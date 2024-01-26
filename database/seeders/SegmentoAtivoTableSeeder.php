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
                'nome' => "Comércio varejista",
                'nomeIngles' => "Retail Trade"
            ],
            [
                'nome' => "Minerais energéticos",
                'nomeIngles' => "Energy Minerals"
            ],
            [
                'nome' => "Serviços de saúde",
                'nomeIngles' => "Health Services"
            ],
            [
                'nome' => "Utilidades",
                'nomeIngles' => "Utilities"
            ],
            [
                'nome' => "Finanças",
                'nomeIngles' => "Finance"
            ],
            [
                'nome' => "Serviços ao consumidor",
                'nomeIngles' => "Consumer Services"
            ],
            [
                'nome' => "Bens de consumo não duráveis",
                'nomeIngles' => "Consumer Non-Durables"
            ],
            [
                'nome' => "Minerais não energéticos",
                'nomeIngles' => "Non-Energy Minerals"
            ],
            [
                'nome' => "Serviços comerciais",
                'nomeIngles' => "Commercial Services"
            ],
            [
                'nome' => "Serviços de distribuição",
                'nomeIngles' => "Distribution Services"
            ],
            [
                'nome' => "Transporte",
                'nomeIngles' => "Transportation"
            ],
            [
                'nome' => "Serviços de tecnologia",
                'nomeIngles' => "Technology Services"
            ],
            [
                'nome' => "Indústrias de processo",
                'nomeIngles' => "Process Industries"
            ],
            [
                'nome' => "Comunicações",
                'nomeIngles' => "Communications"
            ],
            [
                'nome' => "Manufatura de produtores",
                'nomeIngles' => "Producer Manufacturing"
            ],
            [
                'nome' => "Diversos",
                'nomeIngles' => "Miscellaneous"
            ],
            [
                'nome' => "Tecnologia eletrônica",
                'nomeIngles' => "Electronic Technology"
            ],
            [
                'nome' => "Serviços industriais",
                'nomeIngles' => "Industrial Services"
            ],
            [
                'nome' => "Tecnologia de saúde",
                'nomeIngles' => "Health Technology"
            ],
            [
                'nome' => "Bens de consumo duráveis",
                'nomeIngles' => "Consumer Durables"
            ],
            [
                'nome' => "Outros",
                'nomeIngles' => null
            ]
        ]);
    }
}
