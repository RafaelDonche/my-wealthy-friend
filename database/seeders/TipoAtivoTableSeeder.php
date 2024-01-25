<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoAtivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_ativos')->insert([
            [
                'id' => 1,
                'nome' => 'Ação',
                'sigla' => 'Ação',
                'nomeIngles' => 'stock'
            ],
            [
                'id' => 2,
                'nome' => 'Fundo de Investimento Imobiliário',
                'sigla' => 'FII',
                'nomeIngles' => 'fund'
            ],
            [
                'id' => 3,
                'nome' => 'Criptomoeda',
                'sigla' => 'Cripto',
                'nomeIngles' => 'coin'
            ]
        ]);
    }
}
