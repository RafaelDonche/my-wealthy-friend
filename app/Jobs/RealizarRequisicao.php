<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RealizarRequisicao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // A URL e os corpo da requisicao
    private $url;
    private $corpo;

    public function __construct($url, $corpo = null)
    {
        $this->url = $url;
        $this->corpo = $corpo;
    }

    public function handle()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', $this->url, [
                'headers' => [
                    'Authorization' => env("MIX_API_BEARER_TOKEN"),
                    'Content-Type' => 'application/json',
                ],
                'json' => $this->corpo,
            ]);

            // Lidar com a resposta aqui...
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);

            return print_r($data);

        } catch (\Exception $e) {
            error_log("Erro de requisição na URL: " . $this->url);
            return error_log($e->getMessage());
        }
    }
}
