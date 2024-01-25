<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoAcao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function list() {

        try {

            $url = "https://brapi.dev/api/quote/list";
            $params = [
                'token' => env("MIX_API_BEARER_TOKEN"),
            ];

            $query = http_build_query($params);
            $fullUrl = $url . '?' . $query;

            $response = file_get_contents($fullUrl);

            if ($response !== false) {
                $data = json_decode($response, true);
                return response()->json($data);
            } else {
                return response()->json("Houve um erro ao consultar a API.", 400);
            }

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }

    }

    public function listCripto() {

        try {

            $arrayResult = [];

            $url = "https://brapi.dev/api/v2/crypto/available";
            $params = [
                'token' => env("MIX_API_BEARER_TOKEN"),
            ];

            $query = http_build_query($params);
            $fullUrl = $url . '?' . $query;

            $response = file_get_contents($fullUrl);

            if ($response !== false) {
                $data = json_decode($response, true);
                $coins = $data['coins'];

                // foreach ($coins as $coin) {

                    $url = "https://brapi.dev/api/v2/crypto";
                    $params = [
                        'coin' => $coins[0],
                        'token' => env("MIX_API_BEARER_TOKEN"),
                    ];

                    $query = http_build_query($params);
                    $fullUrl = $url . '?' . $query;

                    $response = file_get_contents($fullUrl);

                    if ($response !== false) {
                        $data2 = json_decode($response, true);
                        array_push($arrayResult, $data2);
                    } else {
                        return response()->json("Houve um erro ao consultar a API de criptos disponíveis.", 400);
                    }
                // }
            } else {
                return response()->json("Houve um erro ao consultar a API de criptos disponíveis.", 400);
            }

            return response()->json($arrayResult);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }

    }

    public function obterAcoes($id_user) {

        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', $id_user)->get();

            $quantidadeAcoes = count($acoes);

            if ($quantidadeAcoes <= 0) {
                return "Não há ações cadastradas na carteira.";
            }

            $nomes = $acoes[0]->nome;
            $arrayNomes = [];
            $guard = 1;

            foreach ($acoes as $a) {
                if ($a != $acoes[0]) {

                    if ($a == $acoes[$quantidadeAcoes - 1]) {
                        $nomes = $nomes . "," . $a->nome;
                        array_push($arrayNomes, $nomes);
                    }else {

                        if ($guard == 10) {
                            $nomes = $nomes . "," . $a->nome;
                            $guard = 1;
                            array_push($arrayNomes, $nomes);
                        } if($guard == 1) {
                            $nomes = $a->nome;
                            $guard++;
                        }else {
                            $nomes = $nomes . "," . $a->nome;
                            $guard++;
                        }
                    }
                } if ($a == $acoes[$quantidadeAcoes - 1]) {
                    array_push($arrayNomes, $nomes);
                }
            }

            $result = [];

            foreach ($arrayNomes as $n) {
                $url = "https://brapi.dev/api/quote/" . $n;
                $params = [
                    'token' => env("MIX_API_BEARER_TOKEN"),
                ];

                $query = http_build_query($params);
                $fullUrl = $url . '?' . $query;

                $response = file_get_contents($fullUrl);

                if ($response !== false) {
                    $data = json_decode($response, true);
                    array_push($result, $data);
                } else {
                    array_push($result, "Houve um erro ao consultar a API.");
                }
            }

            return response()->json($result);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }
    }

    public function obterCriptos($id_user) {

        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', $id_user)->get();

            $quantidadeAcoes = count($acoes);

            if ($quantidadeAcoes <= 0) {
                return "Não há ações cadastradas na carteira.";
            }

            $nomes = $acoes[0]->nome;
            $arrayNomes = [];
            $guard = 1;

            foreach ($acoes as $a) {
                if ($a != $acoes[0]) {

                    if ($a == $acoes[$quantidadeAcoes - 1]) {
                        $nomes = $nomes . "," . $a->nome;
                        array_push($arrayNomes, $nomes);
                    }else {

                        if ($guard == 10) {
                            $nomes = $nomes . "," . $a->nome;
                            $guard = 1;
                            array_push($arrayNomes, $nomes);
                        } if($guard == 1) {
                            $nomes = $a->nome;
                            $guard++;
                        }else {
                            $nomes = $nomes . "," . $a->nome;
                            $guard++;
                        }
                    }
                } if ($a == $acoes[$quantidadeAcoes - 1]) {
                    array_push($arrayNomes, $nomes);
                }
            }

            $result = [];

            foreach ($arrayNomes as $n) {
                $url = "https://brapi.dev/api/quote/" . $n;
                $params = [
                    'token' => env("MIX_API_BEARER_TOKEN"),
                ];

                $query = http_build_query($params);
                $fullUrl = $url . '?' . $query;

                $response = file_get_contents($fullUrl);

                if ($response !== false) {
                    $data = json_decode($response, true);
                    array_push($result, $data);
                } else {
                    array_push($result, "Houve um erro ao consultar a API.");
                }
            }

            return response()->json($result);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }
    }
}
