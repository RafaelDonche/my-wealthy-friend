<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentoAtivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('segmento_ativos')->insert([
            [
                'nome' => "Comercio de varejo",
                'nomeIngles' => "Retail Trade"
            ],
            [
                'nome' => "Minerais Energéticos",
                'nomeIngles' => "Energy Minerals"
            ],
            [
                'nome' => "Serviços de saúde",
                'nomeIngles' => "Health Services"
            ],
            [
                'nome' => "Serviços de utilidade pública",
                'nomeIngles' => "Utilities"
            ],
            [
                'nome' => "Finança",
                'nomeIngles' => "Finance"
            ],
            [
                'nome' => "Serviços do Consumidor",
                'nomeIngles' => "Consumer Services"
            ],
            [
                'nome' => "Bens de consumo não duráveis",
                'nomeIngles' => "Consumer Non-Durables"
            ],
            [
                'nome' => "Minerais Não Energéticos",
                'nomeIngles' => "Non-Energy Minerals"
            ],
            [
                'nome' => "Serviços comerciais",
                'nomeIngles' => "Commercial Services"
            ],
            [
                'nome' => "Serviços de Distribuição",
                'nomeIngles' => "Distribution Services"
            ],
            [
                'nome' => "Transporte",
                'nomeIngles' => "Transportation"
            ],
            [
                'nome' => "Serviços de Tecnologia",
                'nomeIngles' => "Technology Services"
            ],
            [
                'nome' => "Indústrias de Processo",
                'nomeIngles' => "Process Industries"
            ],
            [
                'nome' => "Comunicações",
                'nomeIngles' => "Communications"
            ],
            [
                'nome' => "Fabricação de Produtores",
                'nomeIngles' => "Producer Manufacturing"
            ],
            [
                'nome' => "Diversos",
                'nomeIngles' => "Miscellaneous"
            ],
            [
                'nome' => "Tecnologia Eletrônica",
                'nomeIngles' => "Electronic Technology"
            ],
            [
                'nome' => "Serviços Industriais",
                'nomeIngles' => "Industrial Services"
            ],
            [
                'nome' => "Tecnologia em Saúde",
                'nomeIngles' => "Health Technology"
            ],
            [
                'nome' => "Bens de Consumo Duráveis",
                'nomeIngles' => "Consumer Durables"
            ]
        ]);
    }
}
