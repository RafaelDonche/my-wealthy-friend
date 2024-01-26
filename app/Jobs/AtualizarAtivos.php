<?php

namespace App\Jobs;

use App\Models\Ativo;
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
                        $ativo->nome = $stock['name'];
                        $ativo->sigla = $stock['stock'];
                        $ativo->logo = $stock['logo'];

                        if ($stock['type'] == "stock" || $stock['type'] == "bdr") {
                            $ativo->id_tipo = 1;
                        }

                        if ($stock['type'] == "fund") {
                            $ativo->id_tipo = 2;
                        }

                        $ativo->id_segmento = $segmento->id;
                        $ativo->save();

                        $historico_ativo = new HistoricoAtivo();
                        $historico_ativo->data = Carbon::now();
                        $historico_ativo->valor_fechamento = $stock['close'];
                        $historico_ativo->variacao = $stock['change'];
                        $historico_ativo->id_ativo = $ativo->id;
                        $historico_ativo->save();

                    }else {

                        $historico_ativo = new HistoricoAtivo();
                        $historico_ativo->data = Carbon::now();
                        $historico_ativo->valor_fechamento = $stock['close'];
                        $historico_ativo->variacao = $stock['change'];
                        $historico_ativo->id_ativo = $ativo->id;
                        $historico_ativo->save();
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
                            $historico_ativo->data = Carbon::now();
                            $historico_ativo->valor_fechamento = $result['regularMarketPrice'];
                            $historico_ativo->variacao = $result['regularMarketChange'];
                            $historico_ativo->id_ativo = $ativo->id;
                            $historico_ativo->save();

                        }else {

                            $historico_ativo = new HistoricoAtivo();
                            $historico_ativo->data = Carbon::now();
                            $historico_ativo->valor_fechamento = $result['regularMarketPrice'];
                            $historico_ativo->variacao = $result['regularMarketChange'];
                            $historico_ativo->id_ativo = $ativo->id;
                            $historico_ativo->save();

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
