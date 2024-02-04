<?php

namespace App\Jobs;

use App\Models\Ativo;
use App\Models\AtivoEmpresa;
use App\Models\AtivoProvento;
use App\Models\HistoricoAtivo;
use App\Models\SegmentoAtivo;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AtualizarAtivos implements ShouldQueue
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

            $hoje = Carbon::today();

            // atualizar ações e fiis
            $url = "https://brapi.dev/api/quote/list";
            $params = [
                'token' => env("MIX_API_BEARER_TOKEN"),
            ];

            $query = http_build_query($params);
            $fullUrl = $url . '?' . $query;

            $response = file_get_contents($fullUrl);

            if ($response !== false) {
                $data = json_decode($response, true);
                $stocks = $data['stocks'];

                foreach ($stocks as $stock) {

                    $urlStock = "https://brapi.dev/api/quote/" . $stock['stock'];
                    $paramsStock = [
                        'fundamental' => 'true',
                        'dividends' => 'true',
                        'modules' => 'summaryProfile',
                        'token' => env("MIX_API_BEARER_TOKEN")
                    ];

                    $queryStock = http_build_query($paramsStock);
                    $fullUrlStock = $urlStock . '?' . $queryStock;

                    $responseStock = file_get_contents($fullUrlStock);

                    if ($responseStock !== false) {

                        $dataStock = json_decode($responseStock, true);
                        $result = $dataStock['results'];
                        $resultStock = $result[0];
                        $sumary = isset($resultStock['summaryProfile']) ? $resultStock['summaryProfile'] : [];
                        $dividendsData = isset($resultStock['dividendsData']) ? $resultStock['dividendsData'] : [];
                        $dividends = isset($dividendsData['cashDividends']) ? $dividendsData['cashDividends'] : ['cashDividends' => []];

                        $segmento = SegmentoAtivo::where('nomeIngles', $stock['sector'])->first();

                        if (!$segmento) {
                            $segmento = new SegmentoAtivo();
                            $segmento->nome = $stock['sector'];
                            $segmento->sigla = $stock['sector'];
                            $segmento->save();
                        }

                        $ativo = Ativo::where('sigla', $stock['stock'])->first();

                        if (!$ativo) {
                            $ativo = new Ativo();
                            $ativo->nome = isset($stock['name']) ? $stock['name'] : null;
                            $ativo->sigla = isset($stock['stock']) ? $stock['stock'] : null;
                            $ativo->logo = isset($stock['logo']) ? $stock['logo'] : null;

                            if ($stock['type'] == "stock" || $stock['type'] == "bdr") {
                                $ativo->id_tipo = 1;
                            }else {
                                if ($stock['type'] == "fund") {
                                    $ativo->id_tipo = 2;
                                }else {
                                    $ativo->id_tipo = 1;
                                }
                            }

                            $ativo->id_segmento = $segmento->id;
                            $ativo->save();

                            $historico_ativo = new HistoricoAtivo();
                            $historico_ativo->data = $hoje;
                            $historico_ativo->valor_fechamento = isset($stock['close']) ? $stock['close'] : null;
                            $historico_ativo->variacao = isset($stock['change']) ? $stock['change'] : null;
                            $historico_ativo->id_ativo = $ativo->id;
                            $historico_ativo->save();

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

                            foreach ($dividends['cashDividends'] as $d) {
                                $dataPagamento = Carbon::parse($d['paymentDate']);
                                if ($dataPagamento >= $hoje) {

                                    $provento = new AtivoProvento();
                                    $provento->data_pagamento = isset($d['paymentDate']) ? $d['paymentDate'] : null;
                                    $provento->data_com = isset($d['approvedOn']) ? $d['approvedOn'] : null;
                                    $provento->label = isset($d['label']) ? $d['label'] : null;
                                    $provento->valor = isset($d['rate']) ? $d['rate'] : null;
                                    $provento->id_ativo = $ativo->id;
                                    $provento->save();

                                }
                            }


                        }else {

                            $tem_historico_ativo = HistoricoAtivo::where('data', $hoje)->where('id_ativo', $ativo->id)->first();

                            if (!$tem_historico_ativo) {

                                $historico_ativo = new HistoricoAtivo();
                                $historico_ativo->data = $hoje;
                                $historico_ativo->valor_fechamento = isset($stock['close']) ? $stock['close'] : null;
                                $historico_ativo->variacao = isset($stock['change']) ? $stock['change'] : null;
                                $historico_ativo->id_ativo = $ativo->id;
                                $historico_ativo->save();
                            }

                            $empresa = AtivoEmpresa::where('id_ativo', $ativo->id)->first();
                            if (!$empresa) {
                                $empresa = new AtivoEmpresa();
                                $empresa->id_ativo = $ativo->id;
                            }
                            $empresa->pais = isset($sumary['country']) ? $sumary['country'] : null;
                            $empresa->estado = isset($sumary['state']) ? $sumary['state'] : null;
                            $empresa->cidade = isset($sumary['city']) ? $sumary['city'] : null;
                            $empresa->endereco = isset($sumary['address1']) ? $sumary['address1'] : null;
                            $empresa->cep = isset($sumary['zip']) ? $sumary['zip'] : null;
                            $empresa->website = isset($sumary['website']) ? $sumary['website'] : null;
                            $empresa->sumario = isset($sumary['longBusinessSummary']) ? $sumary['longBusinessSummary'] : null;
                            $empresa->save();

                            foreach ($dividends['cashDividends'] as $d) {

                                $dataPagamento = Carbon::parse($d['paymentDate']);
                                if ($dataPagamento >= $hoje) {

                                    $tem_provento_ativo = AtivoProvento::where('data_pagamento', $dataPagamento)->where('id_ativo', $ativo->id)->first();

                                    if (!$tem_provento_ativo) {
                                        $provento = new AtivoProvento();
                                        $provento->data_pagamento = isset($d['paymentDate']) ? $d['paymentDate'] : null;
                                        $provento->data_com = isset($d['approvedOn']) ? $d['approvedOn'] : null;
                                        $provento->label = isset($d['label']) ? $d['label'] : null;
                                        $provento->valor = isset($d['rate']) ? $d['rate'] : null;
                                        $provento->id_ativo = $ativo->id;
                                        $provento->save();
                                    }
                                }
                            }
                        }
                    }
                }
            }

            // atualizar criptos
            $url2 = "https://brapi.dev/api/v2/crypto/available";
            $params2 = [
                'token' => env("MIX_API_BEARER_TOKEN"),
            ];

            $query2 = http_build_query($params2);
            $fullUrl2 = $url2 . '?' . $query2;

            $response2 = file_get_contents($fullUrl2);

            if ($response2 !== false) {
                $data2 = json_decode($response2, true);
                $coins = $data2['coins'];

                foreach ($coins as $coin) {

                    $url3 = "https://brapi.dev/api/v2/crypto";
                    $params3 = [
                        'coin' => $coin,
                        'token' => env("MIX_API_BEARER_TOKEN")
                    ];

                    $query3 = http_build_query($params3);
                    $fullUrl3 = $url3 . '?' . $query3;

                    $response3 = file_get_contents($fullUrl3);

                    if ($response3 !== false) {
                        $data3 = json_decode($response3, true);
                        $resultCoin = $data3['coins'];
                        $result = $resultCoin[0];

                        $ativo = Ativo::where('sigla', $result['coin'])->first();

                        if (!$ativo) {

                            $ativo = new Ativo();
                            $ativo->nome = $result['coinName'];
                            $ativo->sigla = $result['coin'];
                            $ativo->logo = $result['coinImageUrl'];
                            $ativo->id_tipo = 3;
                            $ativo->save();

                            $historico_ativo = new HistoricoAtivo();
                            $historico_ativo->data = $hoje;
                            $historico_ativo->valor_fechamento = $result['regularMarketPrice'];
                            $historico_ativo->variacao = $result['regularMarketChange'];
                            $historico_ativo->id_ativo = $ativo->id;
                            $historico_ativo->save();

                        }else {

                            $tem_historico_ativo = HistoricoAtivo::where('data', $hoje)->where('id_ativo', $ativo->id)->first();

                            if (!$tem_historico_ativo) {

                                $historico_ativo = new HistoricoAtivo();
                                $historico_ativo->data = $hoje;
                                $historico_ativo->valor_fechamento = $result['regularMarketPrice'];
                                $historico_ativo->variacao = $result['regularMarketChange'];
                                $historico_ativo->id_ativo = $ativo->id;
                                $historico_ativo->save();

                            }
                        }
                    }
                }
            }

            return error_log("Deu tudo certo!");
        } catch (\Exception $ex) {
            error_log($ex->getMessage());
        }
    }
}
