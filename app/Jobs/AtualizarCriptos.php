<?php

namespace App\Jobs;

use App\Models\Ativo;
use App\Models\HistoricoAtivo;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AtualizarCriptos implements ShouldQueue
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
                $response = $client->request('GET', "https://brapi.dev/api/v2/crypto/available", [
                    'headers' => [
                        'Authorization' => env("MIX_API_BEARER_TOKEN"),
                        'Content-Type' => 'application/json',
                    ]
                ]);

                // obtendo resposta
                $body = $response->getBody()->getContents();
                $data = json_decode($body, true);

                $coins = $data['coins'];

                // passa por todos os resultas de criptos da listagem
                foreach ($coins as $coin) {

                    // em caso de sucesso
                    try {

                        // realizar requisição
                        $responseCoin = $client->request('GET', "https://brapi.dev/api/v2/crypto?coin=" . $coin . "&currency=BRL", [
                            'headers' => [
                                'Authorization' => env("MIX_API_BEARER_TOKEN"),
                                'Content-Type' => 'application/json',
                            ]
                        ]);

                        // obtendo resposta
                        $bodyCoin = $responseCoin->getBody()->getContents();
                        $dataCoin = json_decode($bodyCoin, true);

                        // atribui as informações para as variáveis
                        $resultCoin = $dataCoin['coins'];
                        $result = $resultCoin[0];

                        // verifica se possui as informações
                        if (!isset($result['coin']) ||
                            !isset($result['coinName']) ||
                            !isset($result['coinImageUrl']) ||
                            !isset($result['regularMarketPrice']) ||
                            !isset($result['regularMarketChange'])) {

                            error_log("O resultado não possui alguma informação necessária.");
                            continue;
                        }

                        // procura o ativo no banco de dados
                        $ativo = Ativo::where('sigla', $result['coin'])->first();

                        if (!$ativo) {

                            // se o ativo não existir cria um novo
                            $ativo = new Ativo();
                            $ativo->nome = $result['coinName'];
                            $ativo->sigla = $result['coin'];
                            $ativo->logo = $result['coinImageUrl'];
                            $ativo->id_tipo = 3;
                            $ativo->save();

                            // cria o cadastro de historico do ativo
                            $historico_ativo = new HistoricoAtivo();
                            $historico_ativo->data = $hoje;
                            $historico_ativo->valor_fechamento = $result['regularMarketPrice'];
                            $historico_ativo->variacao = $result['regularMarketChange'];
                            $historico_ativo->id_ativo = $ativo->id;
                            $historico_ativo->save();

                        }else {

                            //caso o ativo ja existe, não precisamos cadastra-lo, apensa fazer o tratento de historico

                            // busca se ja existe um cadastro para este ativo na data de hoje no banco de dados
                            $tem_historico_ativo = HistoricoAtivo::where('data', $hoje)->where('id_ativo', $ativo->id)->first();

                            if (!$tem_historico_ativo) {

                                // se não existir, cria um cadastro
                                $historico_ativo = new HistoricoAtivo();
                                $historico_ativo->data = $hoje;
                                $historico_ativo->valor_fechamento = $result['regularMarketPrice'];
                                $historico_ativo->variacao = $result['regularMarketChange'];
                                $historico_ativo->id_ativo = $ativo->id;
                                $historico_ativo->save();
                            }
                        }
                    } catch (\Exception $ex) {
                        error_log($coin);
                        error_log($ex->getMessage());
                        continue;
                    }
                }

                return print_r("Criptomoedas atualizadas com sucesso!");

            } catch (\Exception $ex) {
                return error_log($ex->getMessage());
            }

        } catch (\Exception $ex) {
            error_log($ex->getMessage());
        }
    }
}
