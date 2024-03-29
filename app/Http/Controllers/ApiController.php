<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoAcao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    // public function list() {

    //     try {

    //         $url = "https://brapi.dev/api/quote/list";
    //         $params = [
    //             'token' => env("MIX_API_BEARER_TOKEN"),
    //         ];

    //         $query = http_build_query($params);
    //         $fullUrl = $url . '?' . $query;

    //         $response = file_get_contents($fullUrl);

    //         if ($response !== false) {
    //             $data = json_decode($response, true);
    //             return response()->json($data);
    //         } else {
    //             return response()->json("Houve um erro ao consultar a API.", 400);
    //         }

    //     } catch (\Exception $ex) {
    //         return response()->json($ex->getMessage(), 500);
    //     }

    // }

    public function obterDadosEmpresa($ticker) {
        try {

            $url = "https://brapi.dev/api/quote/" . $ticker;
            $params = [
                'token' => env("MIX_API_BEARER_TOKEN"),
                'modules' => 'summaryProfile'
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

    public function obterDadosCripto($coin) {
        try {

            $url = "https://brapi.dev/api/v2/crypto";
            $params = [
                'token' => env("MIX_API_BEARER_TOKEN"),
                'coin'=> $coin,
                'currency' => 'BRL'
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
}
