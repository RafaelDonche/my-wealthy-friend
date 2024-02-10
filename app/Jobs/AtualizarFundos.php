<?php

namespace App\Jobs;

use App\Models\Ativo;
use App\Models\AtivoEmpresa;
use App\Models\AtivoProvento;
use App\Models\HistoricoAtivo;
use App\Models\SegmentoAtivo;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AtualizarFundos implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {

            // obter data de hoje
            $hoje = Carbon::today();

            // iniciando o client de requisições
            $client = new Client();

            try {

                // realizar requisição
                $response = $client->request('GET', "https://brapi.dev/api/quote/list", [
                    'headers' => [
                        'Authorization' => env("MIX_API_BEARER_TOKEN"),
                        'Content-Type' => 'application/json',
                    ]
                ]);

                // obtendo resposta
                $body = $response->getBody()->getContents();
                $data = json_decode($body, true);

                $stocks = $data['stocks'];

                // passa por todos os resultas de ativos da listagem
                foreach ($stocks as $stock) {

                    // verifica se possui as informações
                    if (!isset($stock['type']) ||
                        !isset($stock['stock']) ||
                        !isset($stock['name']) ||
                        !isset($stock['logo']) ||
                        !isset($stock['close']) ||
                        !isset($stock['change'])) {

                        error_log("O resultado não possui alguma informação necessária.");
                        continue;
                    }

                    // só continua se o tipo do ativo for "fund" (ação)
                    if ($stock['type'] == "fund") {

                        try {

                            // realizar requisição
                            $responseStock = $client->request('GET', "https://brapi.dev/api/quote/" . $stock['stock'] . "?modules=summaryProfile&fundamental=true&dividends=true", [
                                'headers' => [
                                    'Authorization' => env("MIX_API_BEARER_TOKEN"),
                                    'Content-Type' => 'application/json',
                                ]
                            ]);

                            // obtendo resposta
                            $bodyStock = $responseStock->getBody()->getContents();
                            $dataStock = json_decode($bodyStock, true);

                            // atribui as informações para as variáveis
                            $result = $dataStock['results'];
                            $resultStock = isset($result[0]) ? $result[0] : [];
                            $sumary = isset($resultStock['summaryProfile']) ? $resultStock['summaryProfile'] : [];
                            $dividendsData = isset($resultStock['dividendsData']) ? $resultStock['dividendsData'] : [];
                            $dividends = isset($dividendsData['cashDividends']) ? $dividendsData['cashDividends'] : [];

                            // tratamento do segmento do ativo, caso não exista cria um novo
                            $segmento = SegmentoAtivo::where('nomeIngles', $stock['sector'])->first();
                            if (!$segmento) {
                                $segmento = new SegmentoAtivo();
                                $segmento->nome = $stock['sector'];
                                $segmento->sigla = $stock['sector'];
                                $segmento->save();
                            }

                            // procura o ativo no banco de dados
                            $ativo = Ativo::where('sigla', $stock['stock'])->first();

                            if (!$ativo) {

                                // se o ativo não existir cria um novo
                                $ativo = new Ativo();
                                $ativo->nome = $stock['name'];
                                $ativo->sigla = $stock['stock'];
                                $ativo->logo = $stock['logo'];
                                $ativo->id_tipo = 2;
                                $ativo->id_segmento = $segmento->id;
                                $ativo->save();

                                // cria o cadastro de historico do ativo
                                $historico_ativo = new HistoricoAtivo();
                                $historico_ativo->data = $hoje;
                                $historico_ativo->valor_fechamento = $stock['close'];
                                $historico_ativo->variacao = $stock['change'];
                                $historico_ativo->id_ativo = $ativo->id;
                                $historico_ativo->save();

                                // cria o cadastro de empresa do ativo (as informações são opcionais, mas o cadastro deve ser feito)
                                $empresa = new AtivoEmpresa();
                                $empresa->pais = isset($sumary['country']) ? $sumary['country'] : null;
                                $empresa->estado = isset($sumary['state']) ? $sumary['state'] : null;
                                $empresa->cidade = isset($sumary['city']) ? $sumary['city'] : null;
                                $empresa->endereco = isset($sumary['address1']) ? $sumary['address1'] : null;
                                $empresa->cep = isset($sumary['zip']) ? $sumary['zip'] : null;
                                $empresa->website = isset($sumary['website']) ? $sumary['website'] : null;
                                $empresa->sumario = isset($sumary['longBusinessSummary']) ? $sumary['longBusinessSummary'] : null;
                                $empresa->id_ativo = $ativo->id;
                                $empresa->save();

                                // passa por todos os dividendos (pode ser um array vazio)
                                foreach ($dividends as $d) {

                                    // verifica se as informações necessárias existem para realizar o cadastro de provento
                                    if (isset($d['paymentDate']) &&
                                        isset($d['approvedOn']) &&
                                        isset($d['label']) &&
                                        isset($d['rate'])) {

                                        // cria uma variavel com a data de pagamento
                                        $dataPagamento = Carbon::parse($d['paymentDate'])->isoFormat("YYYY-MM-DD");
                                        $dataCom = Carbon::parse($d['approvedOn'])->isoFormat("YYYY-MM-DD");

                                        $provento = new AtivoProvento();
                                        $provento->data_pagamento = $dataPagamento;
                                        $provento->data_com = $dataCom;
                                        $provento->label = $d['label'];
                                        $provento->valor = $d['rate'];
                                        $provento->id_ativo = $ativo->id;
                                        $provento->save();
                                    }
                                }
                            }else {

                                //caso o ativo ja existe, não precisamos cadastra-lo, apensa fazer o tratento de historico, empresa e proventos

                                // busca se ja existe um cadastro para este ativo na data de hoje no banco de dados
                                $tem_historico_ativo = HistoricoAtivo::where('data', $hoje)->where('id_ativo', $ativo->id)->first();

                                if (!$tem_historico_ativo) {

                                    // se não existir, cria um cadastro
                                    $historico_ativo = new HistoricoAtivo();
                                    $historico_ativo->data = $hoje;
                                    $historico_ativo->valor_fechamento = $stock['close'];
                                    $historico_ativo->variacao = $stock['change'];
                                    $historico_ativo->id_ativo = $ativo->id;
                                    $historico_ativo->save();
                                }

                                // procura a empresa deste ativo
                                $empresa = AtivoEmpresa::where('id_ativo', $ativo->id)->first();
                                if (!$empresa) {

                                    // se a empresa não existir inicia o cadastro com o id_ativo (informação obrigatória)
                                    $empresa = new AtivoEmpresa();
                                    $empresa->id_ativo = $ativo->id;
                                }

                                // depois atualiza ou adiciona as informações opcionais
                                $empresa->pais = isset($sumary['country']) ? $sumary['country'] : null;
                                $empresa->estado = isset($sumary['state']) ? $sumary['state'] : null;
                                $empresa->cidade = isset($sumary['city']) ? $sumary['city'] : null;
                                $empresa->endereco = isset($sumary['address1']) ? $sumary['address1'] : null;
                                $empresa->cep = isset($sumary['zip']) ? $sumary['zip'] : null;
                                $empresa->website = isset($sumary['website']) ? $sumary['website'] : null;
                                $empresa->sumario = isset($sumary['longBusinessSummary']) ? $sumary['longBusinessSummary'] : null;
                                $empresa->save();

                                // passa por todos os dividendos (pode ser um array vazio)
                                foreach ($dividends as $d) {

                                    // verifica se as informações necessárias existem para realizar o cadastro de provento
                                    if (isset($d['paymentDate']) &&
                                        isset($d['approvedOn']) &&
                                        isset($d['label']) &&
                                        isset($d['rate'])) {

                                        // cria uma variavel com a data de pagamento
                                        $dataPagamento = Carbon::parse($d['paymentDate'])->isoFormat("YYYY-MM-DD");
                                        $dataCom = Carbon::parse($d['approvedOn'])->isoFormat("YYYY-MM-DD");

                                        // procura no banco de dados se ja existe um provento para este ativo com a data de pagamento
                                        $tem_provento_ativo = AtivoProvento::where('data_pagamento', $dataPagamento)
                                            ->where('id_ativo', $ativo->id)
                                            ->first();

                                        // se não existir cadastra o provento
                                        if (!$tem_provento_ativo) {
                                            $provento = new AtivoProvento();
                                            $provento->data_pagamento = $dataPagamento;
                                            $provento->data_com = $dataCom;
                                            $provento->label = $d['label'];
                                            $provento->valor = $d['rate'];
                                            $provento->id_ativo = $ativo->id;
                                            $provento->save();
                                        }
                                    }
                                }
                            }
                        } catch (\Exception $ex) {
                            error_log($ex->getMessage());
                            continue;
                        }
                    }
                }

                return print_r("Fundos imobiliários atualizados com sucesso!");

            } catch (\Exception $ex) {
                return error_log($ex->getMessage());
            }

        } catch (\Exception $ex) {
            return error_log($ex->getMessage());
        }
    }
}
