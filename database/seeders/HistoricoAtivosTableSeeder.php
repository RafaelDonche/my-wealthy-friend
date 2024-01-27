<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoricoAtivosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('historico_ativos')->delete();

        DB::table('historico_ativos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.08',
                'variacao' => '0.48',
                'id_ativo' => 1,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            1 =>
            array (
                'id' => 2,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.93',
                'variacao' => '-2.00',
                'id_ativo' => 2,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            2 =>
            array (
                'id' => 3,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.96',
                'variacao' => '1.73',
                'id_ativo' => 3,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            3 =>
            array (
                'id' => 4,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.22',
                'variacao' => '-1.56',
                'id_ativo' => 4,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            4 =>
            array (
                'id' => 5,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.50',
                'variacao' => '5.20',
                'id_ativo' => 5,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            5 =>
            array (
                'id' => 6,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.07',
                'variacao' => '-4.36',
                'id_ativo' => 6,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            6 =>
            array (
                'id' => 7,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.90',
                'variacao' => '0.82',
                'id_ativo' => 7,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            7 =>
            array (
                'id' => 8,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.50',
                'variacao' => '1.67',
                'id_ativo' => 8,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            8 =>
            array (
                'id' => 9,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.92',
                'variacao' => '-8.07',
                'id_ativo' => 9,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            9 =>
            array (
                'id' => 10,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.52',
                'variacao' => '1.04',
                'id_ativo' => 10,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            10 =>
            array (
                'id' => 11,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.27',
                'variacao' => '1.42',
                'id_ativo' => 11,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            11 =>
            array (
                'id' => 12,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.03',
                'variacao' => '-0.33',
                'id_ativo' => 12,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            12 =>
            array (
                'id' => 13,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.01',
                'variacao' => '0.70',
                'id_ativo' => 13,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            13 =>
            array (
                'id' => 14,
                'data' => '2024-01-27',
                'valor_fechamento' => '32.81',
                'variacao' => '1.48',
                'id_ativo' => 14,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            14 =>
            array (
                'id' => 15,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.40',
                'variacao' => '-0.87',
                'id_ativo' => 15,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            15 =>
            array (
                'id' => 16,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.08',
                'variacao' => '1.25',
                'id_ativo' => 16,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            16 =>
            array (
                'id' => 17,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.97',
                'variacao' => '-1.42',
                'id_ativo' => 17,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            17 =>
            array (
                'id' => 18,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.78',
                'variacao' => '-2.29',
                'id_ativo' => 18,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            18 =>
            array (
                'id' => 19,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.32',
                'variacao' => '1.35',
                'id_ativo' => 19,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            19 =>
            array (
                'id' => 20,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.24',
                'variacao' => '-3.63',
                'id_ativo' => 20,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            20 =>
            array (
                'id' => 21,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.64',
                'variacao' => '0.00',
                'id_ativo' => 21,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            21 =>
            array (
                'id' => 22,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.83',
                'variacao' => '3.75',
                'id_ativo' => 22,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            22 =>
            array (
                'id' => 23,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.96',
                'variacao' => '2.19',
                'id_ativo' => 23,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            23 =>
            array (
                'id' => 24,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.35',
                'variacao' => '2.94',
                'id_ativo' => 24,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            24 =>
            array (
                'id' => 25,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.55',
                'variacao' => '0.73',
                'id_ativo' => 25,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            25 =>
            array (
                'id' => 26,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.07',
                'variacao' => '0.20',
                'id_ativo' => 26,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            26 =>
            array (
                'id' => 27,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.97',
                'variacao' => '-2.72',
                'id_ativo' => 27,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            27 =>
            array (
                'id' => 28,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.95',
                'variacao' => '-1.28',
                'id_ativo' => 28,
                'created_at' => '2024-01-27 08:55:01',
                'updated_at' => '2024-01-27 08:55:01',
            ),
            28 =>
            array (
                'id' => 29,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.97',
                'variacao' => '0.69',
                'id_ativo' => 29,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            29 =>
            array (
                'id' => 30,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.53',
                'variacao' => '0.00',
                'id_ativo' => 30,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            30 =>
            array (
                'id' => 31,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.64',
                'variacao' => '0.85',
                'id_ativo' => 31,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            31 =>
            array (
                'id' => 32,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.69',
                'variacao' => '1.99',
                'id_ativo' => 32,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            32 =>
            array (
                'id' => 33,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.03',
                'variacao' => '-0.88',
                'id_ativo' => 33,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            33 =>
            array (
                'id' => 34,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.61',
                'variacao' => '0.97',
                'id_ativo' => 34,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            34 =>
            array (
                'id' => 35,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.04',
                'variacao' => '0.11',
                'id_ativo' => 35,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            35 =>
            array (
                'id' => 36,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.20',
                'variacao' => '0.00',
                'id_ativo' => 36,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            36 =>
            array (
                'id' => 37,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.45',
                'variacao' => '-5.41',
                'id_ativo' => 37,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            37 =>
            array (
                'id' => 38,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.69',
                'variacao' => '-6.76',
                'id_ativo' => 38,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            38 =>
            array (
                'id' => 39,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.88',
                'variacao' => '-4.08',
                'id_ativo' => 39,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            39 =>
            array (
                'id' => 40,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.16',
                'variacao' => '1.34',
                'id_ativo' => 40,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            40 =>
            array (
                'id' => 41,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.19',
                'variacao' => '0.98',
                'id_ativo' => 41,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            41 =>
            array (
                'id' => 42,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.80',
                'variacao' => '-1.43',
                'id_ativo' => 42,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            42 =>
            array (
                'id' => 43,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.64',
                'variacao' => '-0.17',
                'id_ativo' => 43,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            43 =>
            array (
                'id' => 44,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.63',
                'variacao' => '0.00',
                'id_ativo' => 44,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            44 =>
            array (
                'id' => 45,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.79',
                'variacao' => '2.95',
                'id_ativo' => 45,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            45 =>
            array (
                'id' => 46,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.74',
                'variacao' => '0.27',
                'id_ativo' => 46,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            46 =>
            array (
                'id' => 47,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.14',
                'variacao' => '0.98',
                'id_ativo' => 47,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            47 =>
            array (
                'id' => 48,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.18',
                'variacao' => '0.12',
                'id_ativo' => 48,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            48 =>
            array (
                'id' => 49,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.84',
                'variacao' => '0.28',
                'id_ativo' => 49,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            49 =>
            array (
                'id' => 50,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.77',
                'variacao' => '-1.27',
                'id_ativo' => 50,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            50 =>
            array (
                'id' => 51,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.82',
                'variacao' => '2.40',
                'id_ativo' => 51,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            51 =>
            array (
                'id' => 52,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.98',
                'variacao' => '-6.39',
                'id_ativo' => 52,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            52 =>
            array (
                'id' => 53,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.41',
                'variacao' => '-0.68',
                'id_ativo' => 53,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            53 =>
            array (
                'id' => 54,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.84',
                'variacao' => '-1.38',
                'id_ativo' => 54,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            54 =>
            array (
                'id' => 55,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.88',
                'variacao' => '1.47',
                'id_ativo' => 55,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            55 =>
            array (
                'id' => 56,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.40',
                'variacao' => '-12.09',
                'id_ativo' => 56,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            56 =>
            array (
                'id' => 57,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.74',
                'variacao' => '0.00',
                'id_ativo' => 57,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            57 =>
            array (
                'id' => 58,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.98',
                'variacao' => '-1.96',
                'id_ativo' => 58,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            58 =>
            array (
                'id' => 59,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.16',
                'variacao' => '0.62',
                'id_ativo' => 59,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            59 =>
            array (
                'id' => 60,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.17',
                'variacao' => '-0.24',
                'id_ativo' => 60,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            60 =>
            array (
                'id' => 61,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.31',
                'variacao' => '1.29',
                'id_ativo' => 61,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            61 =>
            array (
                'id' => 62,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.19',
                'variacao' => '1.59',
                'id_ativo' => 62,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            62 =>
            array (
                'id' => 63,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.08',
                'variacao' => '0.60',
                'id_ativo' => 63,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            63 =>
            array (
                'id' => 64,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.52',
                'variacao' => '0.75',
                'id_ativo' => 64,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            64 =>
            array (
                'id' => 65,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.42',
                'variacao' => '-2.69',
                'id_ativo' => 65,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            65 =>
            array (
                'id' => 66,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.71',
                'variacao' => '-2.46',
                'id_ativo' => 66,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            66 =>
            array (
                'id' => 67,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.91',
                'variacao' => '1.15',
                'id_ativo' => 67,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            67 =>
            array (
                'id' => 68,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.37',
                'variacao' => '-2.72',
                'id_ativo' => 68,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            68 =>
            array (
                'id' => 69,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.08',
                'variacao' => '-1.61',
                'id_ativo' => 69,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            69 =>
            array (
                'id' => 70,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.70',
                'variacao' => '-3.39',
                'id_ativo' => 70,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            70 =>
            array (
                'id' => 71,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.75',
                'variacao' => '0.36',
                'id_ativo' => 71,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            71 =>
            array (
                'id' => 72,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.77',
                'variacao' => '1.28',
                'id_ativo' => 72,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            72 =>
            array (
                'id' => 73,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.79',
                'variacao' => '-1.25',
                'id_ativo' => 73,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            73 =>
            array (
                'id' => 74,
                'data' => '2024-01-27',
                'valor_fechamento' => '125.08',
                'variacao' => '0.50',
                'id_ativo' => 74,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            74 =>
            array (
                'id' => 75,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.70',
                'variacao' => '-2.47',
                'id_ativo' => 75,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            75 =>
            array (
                'id' => 76,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.91',
                'variacao' => '2.04',
                'id_ativo' => 76,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            76 =>
            array (
                'id' => 77,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.36',
                'variacao' => '1.06',
                'id_ativo' => 77,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            77 =>
            array (
                'id' => 78,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.22',
                'variacao' => '0.74',
                'id_ativo' => 78,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            78 =>
            array (
                'id' => 79,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.47',
                'variacao' => '-1.14',
                'id_ativo' => 79,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            79 =>
            array (
                'id' => 80,
                'data' => '2024-01-27',
                'valor_fechamento' => '107.50',
                'variacao' => '0.47',
                'id_ativo' => 80,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            80 =>
            array (
                'id' => 81,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.73',
                'variacao' => '-0.03',
                'id_ativo' => 81,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            81 =>
            array (
                'id' => 82,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.70',
                'variacao' => '-1.60',
                'id_ativo' => 82,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            82 =>
            array (
                'id' => 83,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.15',
                'variacao' => '2.22',
                'id_ativo' => 83,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            83 =>
            array (
                'id' => 84,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.19',
                'variacao' => '-0.38',
                'id_ativo' => 84,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            84 =>
            array (
                'id' => 85,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.09',
                'variacao' => '1.51',
                'id_ativo' => 85,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            85 =>
            array (
                'id' => 86,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.81',
                'variacao' => '0.77',
                'id_ativo' => 86,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            86 =>
            array (
                'id' => 87,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.75',
                'variacao' => '1.41',
                'id_ativo' => 87,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            87 =>
            array (
                'id' => 88,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.40',
                'variacao' => '-1.41',
                'id_ativo' => 88,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            88 =>
            array (
                'id' => 89,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.86',
                'variacao' => '-0.66',
                'id_ativo' => 89,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            89 =>
            array (
                'id' => 90,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.56',
                'variacao' => '1.44',
                'id_ativo' => 90,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            90 =>
            array (
                'id' => 91,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.20',
                'variacao' => '-1.95',
                'id_ativo' => 91,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            91 =>
            array (
                'id' => 92,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.74',
                'variacao' => '2.93',
                'id_ativo' => 92,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            92 =>
            array (
                'id' => 93,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.87',
                'variacao' => '0.00',
                'id_ativo' => 93,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            93 =>
            array (
                'id' => 94,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.23',
                'variacao' => '-0.47',
                'id_ativo' => 94,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            94 =>
            array (
                'id' => 95,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.85',
                'variacao' => '0.26',
                'id_ativo' => 95,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            95 =>
            array (
                'id' => 96,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.87',
                'variacao' => '-0.23',
                'id_ativo' => 96,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            96 =>
            array (
                'id' => 97,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.83',
                'variacao' => '0.72',
                'id_ativo' => 97,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            97 =>
            array (
                'id' => 98,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.45',
                'variacao' => '-7.21',
                'id_ativo' => 98,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            98 =>
            array (
                'id' => 99,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.27',
                'variacao' => '-0.30',
                'id_ativo' => 99,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            99 =>
            array (
                'id' => 100,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.85',
                'variacao' => '1.55',
                'id_ativo' => 100,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            100 =>
            array (
                'id' => 101,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.57',
                'variacao' => '0.60',
                'id_ativo' => 101,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            101 =>
            array (
                'id' => 102,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.55',
                'variacao' => '1.42',
                'id_ativo' => 102,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            102 =>
            array (
                'id' => 103,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.06',
                'variacao' => '0.22',
                'id_ativo' => 103,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            103 =>
            array (
                'id' => 104,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.49',
                'variacao' => '-1.08',
                'id_ativo' => 104,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            104 =>
            array (
                'id' => 105,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.75',
                'variacao' => '-0.20',
                'id_ativo' => 105,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            105 =>
            array (
                'id' => 106,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.12',
                'variacao' => '1.19',
                'id_ativo' => 106,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            106 =>
            array (
                'id' => 107,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.10',
                'variacao' => '2.04',
                'id_ativo' => 107,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            107 =>
            array (
                'id' => 108,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.55',
                'variacao' => '-0.08',
                'id_ativo' => 108,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            108 =>
            array (
                'id' => 109,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.33',
                'variacao' => '-0.19',
                'id_ativo' => 109,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            109 =>
            array (
                'id' => 110,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.38',
                'variacao' => '0.69',
                'id_ativo' => 110,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            110 =>
            array (
                'id' => 111,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.02',
                'variacao' => '4.40',
                'id_ativo' => 111,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            111 =>
            array (
                'id' => 112,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.65',
                'variacao' => '-0.66',
                'id_ativo' => 112,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            112 =>
            array (
                'id' => 113,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.40',
                'variacao' => '0.00',
                'id_ativo' => 113,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            113 =>
            array (
                'id' => 114,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.82',
                'variacao' => '-1.07',
                'id_ativo' => 114,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            114 =>
            array (
                'id' => 115,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.34',
                'variacao' => '0.58',
                'id_ativo' => 115,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            115 =>
            array (
                'id' => 116,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.04',
                'variacao' => '-0.06',
                'id_ativo' => 116,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            116 =>
            array (
                'id' => 117,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.65',
                'variacao' => '-0.70',
                'id_ativo' => 117,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            117 =>
            array (
                'id' => 118,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.67',
                'variacao' => '-1.37',
                'id_ativo' => 118,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            118 =>
            array (
                'id' => 119,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.30',
                'variacao' => '-0.26',
                'id_ativo' => 119,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            119 =>
            array (
                'id' => 120,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.58',
                'variacao' => '-2.84',
                'id_ativo' => 120,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            120 =>
            array (
                'id' => 121,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.93',
                'variacao' => '0.69',
                'id_ativo' => 121,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            121 =>
            array (
                'id' => 122,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.43',
                'variacao' => '-1.47',
                'id_ativo' => 122,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            122 =>
            array (
                'id' => 123,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.62',
                'variacao' => '-0.28',
                'id_ativo' => 123,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            123 =>
            array (
                'id' => 124,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.91',
                'variacao' => '-0.93',
                'id_ativo' => 124,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            124 =>
            array (
                'id' => 125,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.88',
                'variacao' => '-0.06',
                'id_ativo' => 125,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            125 =>
            array (
                'id' => 126,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.93',
                'variacao' => '-0.52',
                'id_ativo' => 126,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            126 =>
            array (
                'id' => 127,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.45',
                'variacao' => '-0.05',
                'id_ativo' => 127,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            127 =>
            array (
                'id' => 128,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.18',
                'variacao' => '-1.91',
                'id_ativo' => 128,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            128 =>
            array (
                'id' => 129,
                'data' => '2024-01-27',
                'valor_fechamento' => '51.20',
                'variacao' => '0.89',
                'id_ativo' => 129,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            129 =>
            array (
                'id' => 130,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.34',
                'variacao' => '-0.09',
                'id_ativo' => 130,
                'created_at' => '2024-01-27 08:55:02',
                'updated_at' => '2024-01-27 08:55:02',
            ),
            130 =>
            array (
                'id' => 131,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.97',
                'variacao' => '1.01',
                'id_ativo' => 131,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            131 =>
            array (
                'id' => 132,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.83',
                'variacao' => '0.85',
                'id_ativo' => 132,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            132 =>
            array (
                'id' => 133,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.40',
                'variacao' => '0.23',
                'id_ativo' => 133,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            133 =>
            array (
                'id' => 134,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.79',
                'variacao' => '-1.17',
                'id_ativo' => 134,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            134 =>
            array (
                'id' => 135,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.01',
                'variacao' => '0.72',
                'id_ativo' => 135,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            135 =>
            array (
                'id' => 136,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.85',
                'variacao' => '-0.71',
                'id_ativo' => 136,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            136 =>
            array (
                'id' => 137,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.90',
                'variacao' => '-0.38',
                'id_ativo' => 137,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            137 =>
            array (
                'id' => 138,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.08',
                'variacao' => '-1.82',
                'id_ativo' => 138,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            138 =>
            array (
                'id' => 139,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.12',
                'variacao' => '-0.42',
                'id_ativo' => 139,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            139 =>
            array (
                'id' => 140,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.04',
                'variacao' => '-0.46',
                'id_ativo' => 140,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            140 =>
            array (
                'id' => 141,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.60',
                'variacao' => '4.72',
                'id_ativo' => 141,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            141 =>
            array (
                'id' => 142,
                'data' => '2024-01-27',
                'valor_fechamento' => '131.20',
                'variacao' => '0.51',
                'id_ativo' => 142,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            142 =>
            array (
                'id' => 143,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.81',
                'variacao' => '0.83',
                'id_ativo' => 143,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            143 =>
            array (
                'id' => 144,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.57',
                'variacao' => '-1.20',
                'id_ativo' => 144,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            144 =>
            array (
                'id' => 145,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.04',
                'variacao' => '-0.46',
                'id_ativo' => 145,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            145 =>
            array (
                'id' => 146,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.95',
                'variacao' => '0.52',
                'id_ativo' => 146,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            146 =>
            array (
                'id' => 147,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.13',
                'variacao' => '0.16',
                'id_ativo' => 147,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            147 =>
            array (
                'id' => 148,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.40',
                'variacao' => '0.98',
                'id_ativo' => 148,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            148 =>
            array (
                'id' => 149,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.10',
                'variacao' => '-3.43',
                'id_ativo' => 149,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            149 =>
            array (
                'id' => 150,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.82',
                'variacao' => '-2.95',
                'id_ativo' => 150,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            150 =>
            array (
                'id' => 151,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.09',
                'variacao' => '0.18',
                'id_ativo' => 151,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            151 =>
            array (
                'id' => 152,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.09',
                'variacao' => '-0.90',
                'id_ativo' => 152,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            152 =>
            array (
                'id' => 153,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.80',
                'variacao' => '0.15',
                'id_ativo' => 153,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            153 =>
            array (
                'id' => 154,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.71',
                'variacao' => '-0.09',
                'id_ativo' => 154,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            154 =>
            array (
                'id' => 155,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.90',
                'variacao' => '0.30',
                'id_ativo' => 155,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            155 =>
            array (
                'id' => 156,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.87',
                'variacao' => '-3.56',
                'id_ativo' => 156,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            156 =>
            array (
                'id' => 157,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.60',
                'variacao' => '-0.62',
                'id_ativo' => 157,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            157 =>
            array (
                'id' => 158,
                'data' => '2024-01-27',
                'valor_fechamento' => '125.68',
                'variacao' => '1.07',
                'id_ativo' => 158,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            158 =>
            array (
                'id' => 159,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.70',
                'variacao' => '0.66',
                'id_ativo' => 159,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            159 =>
            array (
                'id' => 160,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.34',
                'variacao' => '0.43',
                'id_ativo' => 160,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            160 =>
            array (
                'id' => 161,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.99',
                'variacao' => '-0.13',
                'id_ativo' => 161,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            161 =>
            array (
                'id' => 162,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.74',
                'variacao' => '-0.84',
                'id_ativo' => 162,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            162 =>
            array (
                'id' => 163,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.14',
                'variacao' => '-0.18',
                'id_ativo' => 163,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            163 =>
            array (
                'id' => 164,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.85',
                'variacao' => '1.09',
                'id_ativo' => 164,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            164 =>
            array (
                'id' => 165,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.98',
                'variacao' => '-0.58',
                'id_ativo' => 165,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            165 =>
            array (
                'id' => 166,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.80',
                'variacao' => '-3.30',
                'id_ativo' => 166,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            166 =>
            array (
                'id' => 167,
                'data' => '2024-01-27',
                'valor_fechamento' => '32.35',
                'variacao' => '3.03',
                'id_ativo' => 167,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            167 =>
            array (
                'id' => 168,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.02',
                'variacao' => '1.16',
                'id_ativo' => 168,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            168 =>
            array (
                'id' => 169,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.94',
                'variacao' => '-0.11',
                'id_ativo' => 169,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            169 =>
            array (
                'id' => 170,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.28',
                'variacao' => '0.92',
                'id_ativo' => 170,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            170 =>
            array (
                'id' => 171,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.07',
                'variacao' => '0.25',
                'id_ativo' => 171,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            171 =>
            array (
                'id' => 172,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.48',
                'variacao' => '0.47',
                'id_ativo' => 172,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            172 =>
            array (
                'id' => 173,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.22',
                'variacao' => '-1.51',
                'id_ativo' => 173,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            173 =>
            array (
                'id' => 174,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.45',
                'variacao' => '-3.30',
                'id_ativo' => 174,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            174 =>
            array (
                'id' => 175,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.54',
                'variacao' => '-0.40',
                'id_ativo' => 175,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            175 =>
            array (
                'id' => 176,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.01',
                'variacao' => '-0.10',
                'id_ativo' => 176,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            176 =>
            array (
                'id' => 177,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.74',
                'variacao' => '-0.57',
                'id_ativo' => 177,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            177 =>
            array (
                'id' => 178,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.45',
                'variacao' => '-0.19',
                'id_ativo' => 178,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            178 =>
            array (
                'id' => 179,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.83',
                'variacao' => '3.19',
                'id_ativo' => 179,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            179 =>
            array (
                'id' => 180,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.22',
                'variacao' => '0.00',
                'id_ativo' => 180,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            180 =>
            array (
                'id' => 181,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.79',
                'variacao' => '-0.55',
                'id_ativo' => 181,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            181 =>
            array (
                'id' => 182,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.08',
                'variacao' => '-0.48',
                'id_ativo' => 182,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            182 =>
            array (
                'id' => 183,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.84',
                'variacao' => '1.02',
                'id_ativo' => 183,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            183 =>
            array (
                'id' => 184,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.39',
                'variacao' => '-0.48',
                'id_ativo' => 184,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            184 =>
            array (
                'id' => 185,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.08',
                'variacao' => '-3.32',
                'id_ativo' => 185,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            185 =>
            array (
                'id' => 186,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.79',
                'variacao' => '-1.45',
                'id_ativo' => 186,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            186 =>
            array (
                'id' => 187,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.35',
                'variacao' => '-0.82',
                'id_ativo' => 187,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            187 =>
            array (
                'id' => 188,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.83',
                'variacao' => '-1.63',
                'id_ativo' => 188,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            188 =>
            array (
                'id' => 189,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.76',
                'variacao' => '-0.19',
                'id_ativo' => 189,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            189 =>
            array (
                'id' => 190,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.45',
                'variacao' => '-2.36',
                'id_ativo' => 190,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            190 =>
            array (
                'id' => 191,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.32',
                'variacao' => '-0.41',
                'id_ativo' => 191,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            191 =>
            array (
                'id' => 192,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.71',
                'variacao' => '0.62',
                'id_ativo' => 192,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            192 =>
            array (
                'id' => 193,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.75',
                'variacao' => '-3.17',
                'id_ativo' => 193,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            193 =>
            array (
                'id' => 194,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.61',
                'variacao' => '-3.27',
                'id_ativo' => 194,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            194 =>
            array (
                'id' => 195,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.97',
                'variacao' => '-0.80',
                'id_ativo' => 195,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            195 =>
            array (
                'id' => 196,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.04',
                'variacao' => '-0.20',
                'id_ativo' => 196,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            196 =>
            array (
                'id' => 197,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.28',
                'variacao' => '-1.52',
                'id_ativo' => 197,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            197 =>
            array (
                'id' => 198,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.58',
                'variacao' => '0.00',
                'id_ativo' => 198,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            198 =>
            array (
                'id' => 199,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.22',
                'variacao' => '0.74',
                'id_ativo' => 199,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            199 =>
            array (
                'id' => 200,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.12',
                'variacao' => '-1.70',
                'id_ativo' => 200,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            200 =>
            array (
                'id' => 201,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.73',
                'variacao' => '1.87',
                'id_ativo' => 201,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            201 =>
            array (
                'id' => 202,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.04',
                'variacao' => '0.62',
                'id_ativo' => 202,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            202 =>
            array (
                'id' => 203,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.07',
                'variacao' => '-0.11',
                'id_ativo' => 203,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            203 =>
            array (
                'id' => 204,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.66',
                'variacao' => '-0.37',
                'id_ativo' => 204,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            204 =>
            array (
                'id' => 205,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.92',
                'variacao' => '-0.67',
                'id_ativo' => 205,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            205 =>
            array (
                'id' => 206,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.17',
                'variacao' => '0.11',
                'id_ativo' => 206,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            206 =>
            array (
                'id' => 207,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.05',
                'variacao' => '-1.12',
                'id_ativo' => 207,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            207 =>
            array (
                'id' => 208,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.73',
                'variacao' => '0.10',
                'id_ativo' => 208,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            208 =>
            array (
                'id' => 209,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.26',
                'variacao' => '-1.50',
                'id_ativo' => 209,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            209 =>
            array (
                'id' => 210,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.56',
                'variacao' => '-3.08',
                'id_ativo' => 210,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            210 =>
            array (
                'id' => 211,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.16',
                'variacao' => '-0.85',
                'id_ativo' => 211,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            211 =>
            array (
                'id' => 212,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.34',
                'variacao' => '0.00',
                'id_ativo' => 212,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            212 =>
            array (
                'id' => 213,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.19',
                'variacao' => '0.00',
                'id_ativo' => 213,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            213 =>
            array (
                'id' => 214,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.15',
                'variacao' => '-0.13',
                'id_ativo' => 214,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            214 =>
            array (
                'id' => 215,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.01',
                'variacao' => '-0.27',
                'id_ativo' => 215,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            215 =>
            array (
                'id' => 216,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.99',
                'variacao' => '0.45',
                'id_ativo' => 216,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            216 =>
            array (
                'id' => 217,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.13',
                'variacao' => '2.90',
                'id_ativo' => 217,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            217 =>
            array (
                'id' => 218,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.75',
                'variacao' => '-1.09',
                'id_ativo' => 218,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            218 =>
            array (
                'id' => 219,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.95',
                'variacao' => '-0.78',
                'id_ativo' => 219,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            219 =>
            array (
                'id' => 220,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.34',
                'variacao' => '0.58',
                'id_ativo' => 220,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            220 =>
            array (
                'id' => 221,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.16',
                'variacao' => '1.16',
                'id_ativo' => 221,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            221 =>
            array (
                'id' => 222,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.74',
                'variacao' => '-0.30',
                'id_ativo' => 222,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            222 =>
            array (
                'id' => 223,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.19',
                'variacao' => '0.85',
                'id_ativo' => 223,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            223 =>
            array (
                'id' => 224,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.25',
                'variacao' => '-1.49',
                'id_ativo' => 224,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            224 =>
            array (
                'id' => 225,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.38',
                'variacao' => '0.46',
                'id_ativo' => 225,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            225 =>
            array (
                'id' => 226,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.63',
                'variacao' => '0.00',
                'id_ativo' => 226,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            226 =>
            array (
                'id' => 227,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.94',
                'variacao' => '-1.22',
                'id_ativo' => 227,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            227 =>
            array (
                'id' => 228,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.51',
                'variacao' => '0.11',
                'id_ativo' => 228,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            228 =>
            array (
                'id' => 229,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.16',
                'variacao' => '-0.54',
                'id_ativo' => 229,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            229 =>
            array (
                'id' => 230,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.13',
                'variacao' => '5.46',
                'id_ativo' => 230,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            230 =>
            array (
                'id' => 231,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.76',
                'variacao' => '-2.06',
                'id_ativo' => 231,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            231 =>
            array (
                'id' => 232,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.30',
                'variacao' => '-0.63',
                'id_ativo' => 232,
                'created_at' => '2024-01-27 08:55:03',
                'updated_at' => '2024-01-27 08:55:03',
            ),
            232 =>
            array (
                'id' => 233,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.59',
                'variacao' => '-2.80',
                'id_ativo' => 233,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            233 =>
            array (
                'id' => 234,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.99',
                'variacao' => '-1.98',
                'id_ativo' => 234,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            234 =>
            array (
                'id' => 235,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.40',
                'variacao' => '-1.30',
                'id_ativo' => 235,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            235 =>
            array (
                'id' => 236,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.12',
                'variacao' => '0.11',
                'id_ativo' => 236,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            236 =>
            array (
                'id' => 237,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.32',
                'variacao' => '-0.23',
                'id_ativo' => 237,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            237 =>
            array (
                'id' => 238,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.24',
                'variacao' => '-2.36',
                'id_ativo' => 238,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            238 =>
            array (
                'id' => 239,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.10',
                'variacao' => '-0.56',
                'id_ativo' => 239,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            239 =>
            array (
                'id' => 240,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.59',
                'variacao' => '-1.60',
                'id_ativo' => 240,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            240 =>
            array (
                'id' => 241,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.93',
                'variacao' => '0.20',
                'id_ativo' => 241,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            241 =>
            array (
                'id' => 242,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.59',
                'variacao' => '0.21',
                'id_ativo' => 242,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            242 =>
            array (
                'id' => 243,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.65',
                'variacao' => '-0.02',
                'id_ativo' => 243,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            243 =>
            array (
                'id' => 244,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.49',
                'variacao' => '-0.30',
                'id_ativo' => 244,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            244 =>
            array (
                'id' => 245,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.72',
                'variacao' => '-1.26',
                'id_ativo' => 245,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            245 =>
            array (
                'id' => 246,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.71',
                'variacao' => '-2.74',
                'id_ativo' => 246,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            246 =>
            array (
                'id' => 247,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.56',
                'variacao' => '-0.40',
                'id_ativo' => 247,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            247 =>
            array (
                'id' => 248,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.95',
                'variacao' => '-1.45',
                'id_ativo' => 248,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            248 =>
            array (
                'id' => 249,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.37',
                'variacao' => '-0.56',
                'id_ativo' => 249,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            249 =>
            array (
                'id' => 250,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.00',
                'variacao' => '0.78',
                'id_ativo' => 250,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            250 =>
            array (
                'id' => 251,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.00',
                'variacao' => '0.30',
                'id_ativo' => 251,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            251 =>
            array (
                'id' => 252,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.57',
                'variacao' => '0.00',
                'id_ativo' => 252,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            252 =>
            array (
                'id' => 253,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.32',
                'variacao' => '0.93',
                'id_ativo' => 253,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            253 =>
            array (
                'id' => 254,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.35',
                'variacao' => '0.92',
                'id_ativo' => 254,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            254 =>
            array (
                'id' => 255,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.25',
                'variacao' => '-0.11',
                'id_ativo' => 255,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            255 =>
            array (
                'id' => 256,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.80',
                'variacao' => '0.26',
                'id_ativo' => 256,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            256 =>
            array (
                'id' => 257,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.35',
                'variacao' => '0.16',
                'id_ativo' => 257,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            257 =>
            array (
                'id' => 258,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.39',
                'variacao' => '-1.07',
                'id_ativo' => 258,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            258 =>
            array (
                'id' => 259,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.00',
                'variacao' => '-0.41',
                'id_ativo' => 259,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            259 =>
            array (
                'id' => 260,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.00',
                'variacao' => '-2.78',
                'id_ativo' => 260,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            260 =>
            array (
                'id' => 261,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.00',
                'variacao' => '-1.39',
                'id_ativo' => 261,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            261 =>
            array (
                'id' => 262,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.00',
                'variacao' => '-0.31',
                'id_ativo' => 262,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            262 =>
            array (
                'id' => 263,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.00',
                'variacao' => '-0.66',
                'id_ativo' => 263,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            263 =>
            array (
                'id' => 264,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.42',
                'variacao' => '0.31',
                'id_ativo' => 264,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            264 =>
            array (
                'id' => 265,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.30',
                'variacao' => '-0.60',
                'id_ativo' => 265,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            265 =>
            array (
                'id' => 266,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.49',
                'variacao' => '0.68',
                'id_ativo' => 266,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            266 =>
            array (
                'id' => 267,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.93',
                'variacao' => '0.61',
                'id_ativo' => 267,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            267 =>
            array (
                'id' => 268,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.56',
                'variacao' => '-1.69',
                'id_ativo' => 268,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            268 =>
            array (
                'id' => 269,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.24',
                'variacao' => '0.09',
                'id_ativo' => 269,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            269 =>
            array (
                'id' => 270,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.92',
                'variacao' => '0.00',
                'id_ativo' => 270,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            270 =>
            array (
                'id' => 271,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.33',
                'variacao' => '1.88',
                'id_ativo' => 271,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            271 =>
            array (
                'id' => 272,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.35',
                'variacao' => '2.13',
                'id_ativo' => 272,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            272 =>
            array (
                'id' => 273,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.60',
                'variacao' => '-1.50',
                'id_ativo' => 273,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            273 =>
            array (
                'id' => 274,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.07',
                'variacao' => '0.30',
                'id_ativo' => 274,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            274 =>
            array (
                'id' => 275,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.54',
                'variacao' => '0.10',
                'id_ativo' => 275,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            275 =>
            array (
                'id' => 276,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.81',
                'variacao' => '-1.40',
                'id_ativo' => 276,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            276 =>
            array (
                'id' => 277,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.57',
                'variacao' => '2.01',
                'id_ativo' => 277,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            277 =>
            array (
                'id' => 278,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.00',
                'variacao' => '6.92',
                'id_ativo' => 278,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            278 =>
            array (
                'id' => 279,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.36',
                'variacao' => '-0.11',
                'id_ativo' => 279,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            279 =>
            array (
                'id' => 280,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.86',
                'variacao' => '0.29',
                'id_ativo' => 280,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            280 =>
            array (
                'id' => 281,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.68',
                'variacao' => '-8.18',
                'id_ativo' => 281,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            281 =>
            array (
                'id' => 282,
                'data' => '2024-01-27',
                'valor_fechamento' => '114.79',
                'variacao' => '0.08',
                'id_ativo' => 282,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            282 =>
            array (
                'id' => 283,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.05',
                'variacao' => '-0.35',
                'id_ativo' => 283,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            283 =>
            array (
                'id' => 284,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.31',
                'variacao' => '0.76',
                'id_ativo' => 284,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            284 =>
            array (
                'id' => 285,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.10',
                'variacao' => '-1.13',
                'id_ativo' => 285,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            285 =>
            array (
                'id' => 286,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.63',
                'variacao' => '-0.19',
                'id_ativo' => 286,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            286 =>
            array (
                'id' => 287,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.00',
                'variacao' => '1.91',
                'id_ativo' => 287,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            287 =>
            array (
                'id' => 288,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.06',
                'variacao' => '-1.07',
                'id_ativo' => 288,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            288 =>
            array (
                'id' => 289,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.83',
                'variacao' => '0.19',
                'id_ativo' => 289,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            289 =>
            array (
                'id' => 290,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.49',
                'variacao' => '-0.82',
                'id_ativo' => 290,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            290 =>
            array (
                'id' => 291,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.63',
                'variacao' => '1.23',
                'id_ativo' => 291,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            291 =>
            array (
                'id' => 292,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.90',
                'variacao' => '-9.09',
                'id_ativo' => 292,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            292 =>
            array (
                'id' => 293,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.99',
                'variacao' => '-0.99',
                'id_ativo' => 293,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            293 =>
            array (
                'id' => 294,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.25',
                'variacao' => '2.61',
                'id_ativo' => 294,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            294 =>
            array (
                'id' => 295,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.52',
                'variacao' => '-0.14',
                'id_ativo' => 295,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            295 =>
            array (
                'id' => 296,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.62',
                'variacao' => '-3.11',
                'id_ativo' => 296,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            296 =>
            array (
                'id' => 297,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.86',
                'variacao' => '0.00',
                'id_ativo' => 297,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            297 =>
            array (
                'id' => 298,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.08',
                'variacao' => '-0.12',
                'id_ativo' => 298,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            298 =>
            array (
                'id' => 299,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.46',
                'variacao' => '0.59',
                'id_ativo' => 299,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            299 =>
            array (
                'id' => 300,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.81',
                'variacao' => '0.15',
                'id_ativo' => 300,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            300 =>
            array (
                'id' => 301,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.30',
                'variacao' => '3.77',
                'id_ativo' => 301,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            301 =>
            array (
                'id' => 302,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.80',
                'variacao' => '0.00',
                'id_ativo' => 302,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            302 =>
            array (
                'id' => 303,
                'data' => '2024-01-27',
                'valor_fechamento' => '123.55',
                'variacao' => '1.10',
                'id_ativo' => 303,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            303 =>
            array (
                'id' => 304,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.12',
                'variacao' => '-0.24',
                'id_ativo' => 304,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            304 =>
            array (
                'id' => 305,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.73',
                'variacao' => '-1.58',
                'id_ativo' => 305,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            305 =>
            array (
                'id' => 306,
                'data' => '2024-01-27',
                'valor_fechamento' => '55.75',
                'variacao' => '1.36',
                'id_ativo' => 306,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            306 =>
            array (
                'id' => 307,
                'data' => '2024-01-27',
                'valor_fechamento' => '103.05',
                'variacao' => '0.06',
                'id_ativo' => 307,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            307 =>
            array (
                'id' => 308,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.81',
                'variacao' => '1.29',
                'id_ativo' => 308,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            308 =>
            array (
                'id' => 309,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.79',
                'variacao' => '-0.12',
                'id_ativo' => 309,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            309 =>
            array (
                'id' => 310,
                'data' => '2024-01-27',
                'valor_fechamento' => '121.72',
                'variacao' => '0.57',
                'id_ativo' => 310,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            310 =>
            array (
                'id' => 311,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.65',
                'variacao' => '-1.28',
                'id_ativo' => 311,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            311 =>
            array (
                'id' => 312,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.22',
                'variacao' => '0.44',
                'id_ativo' => 312,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            312 =>
            array (
                'id' => 313,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.34',
                'variacao' => '-0.23',
                'id_ativo' => 313,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            313 =>
            array (
                'id' => 314,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.22',
                'variacao' => '0.16',
                'id_ativo' => 314,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            314 =>
            array (
                'id' => 315,
                'data' => '2024-01-27',
                'valor_fechamento' => '124.49',
                'variacao' => '-0.01',
                'id_ativo' => 315,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            315 =>
            array (
                'id' => 316,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.08',
                'variacao' => '1.96',
                'id_ativo' => 316,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            316 =>
            array (
                'id' => 317,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.25',
                'variacao' => '-1.32',
                'id_ativo' => 317,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            317 =>
            array (
                'id' => 318,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.82',
                'variacao' => '0.51',
                'id_ativo' => 318,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            318 =>
            array (
                'id' => 319,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.26',
                'variacao' => '-0.79',
                'id_ativo' => 319,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            319 =>
            array (
                'id' => 320,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.81',
                'variacao' => '-1.34',
                'id_ativo' => 320,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            320 =>
            array (
                'id' => 321,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.70',
                'variacao' => '-0.53',
                'id_ativo' => 321,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            321 =>
            array (
                'id' => 322,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.99',
                'variacao' => '0.91',
                'id_ativo' => 322,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            322 =>
            array (
                'id' => 323,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.39',
                'variacao' => '2.42',
                'id_ativo' => 323,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            323 =>
            array (
                'id' => 324,
                'data' => '2024-01-27',
                'valor_fechamento' => '111.15',
                'variacao' => '0.22',
                'id_ativo' => 324,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            324 =>
            array (
                'id' => 325,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.96',
                'variacao' => '-1.41',
                'id_ativo' => 325,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            325 =>
            array (
                'id' => 326,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.74',
                'variacao' => '1.25',
                'id_ativo' => 326,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            326 =>
            array (
                'id' => 327,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.15',
                'variacao' => '-0.84',
                'id_ativo' => 327,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            327 =>
            array (
                'id' => 328,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.72',
                'variacao' => '0.00',
                'id_ativo' => 328,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            328 =>
            array (
                'id' => 329,
                'data' => '2024-01-27',
                'valor_fechamento' => '164.07',
                'variacao' => '0.39',
                'id_ativo' => 329,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            329 =>
            array (
                'id' => 330,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.11',
                'variacao' => '0.50',
                'id_ativo' => 330,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            330 =>
            array (
                'id' => 331,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.30',
                'variacao' => '4.98',
                'id_ativo' => 331,
                'created_at' => '2024-01-27 08:55:04',
                'updated_at' => '2024-01-27 08:55:04',
            ),
            331 =>
            array (
                'id' => 332,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.83',
                'variacao' => '0.56',
                'id_ativo' => 332,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            332 =>
            array (
                'id' => 333,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.41',
                'variacao' => '0.92',
                'id_ativo' => 333,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            333 =>
            array (
                'id' => 334,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.03',
                'variacao' => '-1.96',
                'id_ativo' => 334,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            334 =>
            array (
                'id' => 335,
                'data' => '2024-01-27',
                'valor_fechamento' => '107.63',
                'variacao' => '-2.38',
                'id_ativo' => 335,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            335 =>
            array (
                'id' => 336,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.50',
                'variacao' => '0.12',
                'id_ativo' => 336,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            336 =>
            array (
                'id' => 337,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.42',
                'variacao' => '1.79',
                'id_ativo' => 337,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            337 =>
            array (
                'id' => 338,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.94',
                'variacao' => '0.00',
                'id_ativo' => 338,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            338 =>
            array (
                'id' => 339,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.62',
                'variacao' => '-0.09',
                'id_ativo' => 339,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            339 =>
            array (
                'id' => 340,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.08',
                'variacao' => '-0.68',
                'id_ativo' => 340,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            340 =>
            array (
                'id' => 341,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.42',
                'variacao' => '-0.11',
                'id_ativo' => 341,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            341 =>
            array (
                'id' => 342,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.62',
                'variacao' => '-0.82',
                'id_ativo' => 342,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            342 =>
            array (
                'id' => 343,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.80',
                'variacao' => '0.45',
                'id_ativo' => 343,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            343 =>
            array (
                'id' => 344,
                'data' => '2024-01-27',
                'valor_fechamento' => '266.83',
                'variacao' => '-0.09',
                'id_ativo' => 344,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            344 =>
            array (
                'id' => 345,
                'data' => '2024-01-27',
                'valor_fechamento' => '108.00',
                'variacao' => '0.21',
                'id_ativo' => 345,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            345 =>
            array (
                'id' => 346,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.40',
                'variacao' => '2.56',
                'id_ativo' => 346,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            346 =>
            array (
                'id' => 347,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.36',
                'variacao' => '1.57',
                'id_ativo' => 347,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            347 =>
            array (
                'id' => 348,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.04',
                'variacao' => '1.77',
                'id_ativo' => 348,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            348 =>
            array (
                'id' => 349,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.48',
                'variacao' => '4.87',
                'id_ativo' => 349,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            349 =>
            array (
                'id' => 350,
                'data' => '2024-01-27',
                'valor_fechamento' => '109.90',
                'variacao' => '0.05',
                'id_ativo' => 350,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            350 =>
            array (
                'id' => 351,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.63',
                'variacao' => '1.53',
                'id_ativo' => 351,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            351 =>
            array (
                'id' => 352,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.12',
                'variacao' => '0.00',
                'id_ativo' => 352,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            352 =>
            array (
                'id' => 353,
                'data' => '2024-01-27',
                'valor_fechamento' => '128.16',
                'variacao' => '-0.01',
                'id_ativo' => 353,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            353 =>
            array (
                'id' => 354,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.21',
                'variacao' => '-0.45',
                'id_ativo' => 354,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            354 =>
            array (
                'id' => 355,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.29',
                'variacao' => '0.00',
                'id_ativo' => 355,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            355 =>
            array (
                'id' => 356,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.15',
                'variacao' => '-0.76',
                'id_ativo' => 356,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            356 =>
            array (
                'id' => 357,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.67',
                'variacao' => '-0.31',
                'id_ativo' => 357,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            357 =>
            array (
                'id' => 358,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.94',
                'variacao' => '-1.72',
                'id_ativo' => 358,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            358 =>
            array (
                'id' => 359,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.55',
                'variacao' => '0.58',
                'id_ativo' => 359,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            359 =>
            array (
                'id' => 360,
                'data' => '2024-01-27',
                'valor_fechamento' => '95.40',
                'variacao' => '0.64',
                'id_ativo' => 360,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            360 =>
            array (
                'id' => 361,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.56',
                'variacao' => '-2.07',
                'id_ativo' => 361,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            361 =>
            array (
                'id' => 362,
                'data' => '2024-01-27',
                'valor_fechamento' => '103.96',
                'variacao' => '0.30',
                'id_ativo' => 362,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            362 =>
            array (
                'id' => 363,
                'data' => '2024-01-27',
                'valor_fechamento' => '81.65',
                'variacao' => '0.13',
                'id_ativo' => 363,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            363 =>
            array (
                'id' => 364,
                'data' => '2024-01-27',
                'valor_fechamento' => '119.00',
                'variacao' => '0.29',
                'id_ativo' => 364,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            364 =>
            array (
                'id' => 365,
                'data' => '2024-01-27',
                'valor_fechamento' => '115.91',
                'variacao' => '0.05',
                'id_ativo' => 365,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            365 =>
            array (
                'id' => 366,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.05',
                'variacao' => '-0.66',
                'id_ativo' => 366,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            366 =>
            array (
                'id' => 367,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.66',
                'variacao' => '-1.39',
                'id_ativo' => 367,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            367 =>
            array (
                'id' => 368,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.79',
                'variacao' => '-0.22',
                'id_ativo' => 368,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            368 =>
            array (
                'id' => 369,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.98',
                'variacao' => '-3.41',
                'id_ativo' => 369,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            369 =>
            array (
                'id' => 370,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.30',
                'variacao' => '0.29',
                'id_ativo' => 370,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            370 =>
            array (
                'id' => 371,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.30',
                'variacao' => '2.38',
                'id_ativo' => 371,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            371 =>
            array (
                'id' => 372,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.10',
                'variacao' => '0.00',
                'id_ativo' => 372,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            372 =>
            array (
                'id' => 373,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.07',
                'variacao' => '-4.06',
                'id_ativo' => 373,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            373 =>
            array (
                'id' => 374,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.55',
                'variacao' => '1.40',
                'id_ativo' => 374,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            374 =>
            array (
                'id' => 375,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.10',
                'variacao' => '0.10',
                'id_ativo' => 375,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            375 =>
            array (
                'id' => 376,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.04',
                'variacao' => '0.28',
                'id_ativo' => 376,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            376 =>
            array (
                'id' => 377,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.58',
                'variacao' => '1.50',
                'id_ativo' => 377,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            377 =>
            array (
                'id' => 378,
                'data' => '2024-01-27',
                'valor_fechamento' => '109.25',
                'variacao' => '-1.01',
                'id_ativo' => 378,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            378 =>
            array (
                'id' => 379,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.14',
                'variacao' => '-0.39',
                'id_ativo' => 379,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            379 =>
            array (
                'id' => 380,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.89',
                'variacao' => '1.88',
                'id_ativo' => 380,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            380 =>
            array (
                'id' => 381,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.76',
                'variacao' => '-2.94',
                'id_ativo' => 381,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            381 =>
            array (
                'id' => 382,
                'data' => '2024-01-27',
                'valor_fechamento' => '59.70',
                'variacao' => '0.69',
                'id_ativo' => 382,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            382 =>
            array (
                'id' => 383,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.34',
                'variacao' => '0.12',
                'id_ativo' => 383,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            383 =>
            array (
                'id' => 384,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.21',
                'variacao' => '-0.56',
                'id_ativo' => 384,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            384 =>
            array (
                'id' => 385,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.44',
                'variacao' => '1.08',
                'id_ativo' => 385,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            385 =>
            array (
                'id' => 386,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.08',
                'variacao' => '0.00',
                'id_ativo' => 386,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            386 =>
            array (
                'id' => 387,
                'data' => '2024-01-27',
                'valor_fechamento' => '75.85',
                'variacao' => '0.48',
                'id_ativo' => 387,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            387 =>
            array (
                'id' => 388,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.95',
                'variacao' => '-0.68',
                'id_ativo' => 388,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            388 =>
            array (
                'id' => 389,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.73',
                'variacao' => '0.38',
                'id_ativo' => 389,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            389 =>
            array (
                'id' => 390,
                'data' => '2024-01-27',
                'valor_fechamento' => '106.59',
                'variacao' => '0.64',
                'id_ativo' => 390,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            390 =>
            array (
                'id' => 391,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.22',
                'variacao' => '2.21',
                'id_ativo' => 391,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            391 =>
            array (
                'id' => 392,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.75',
                'variacao' => '3.57',
                'id_ativo' => 392,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            392 =>
            array (
                'id' => 393,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.37',
                'variacao' => '-1.75',
                'id_ativo' => 393,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            393 =>
            array (
                'id' => 394,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.31',
                'variacao' => '5.75',
                'id_ativo' => 394,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            394 =>
            array (
                'id' => 395,
                'data' => '2024-01-27',
                'valor_fechamento' => '32.91',
                'variacao' => '2.40',
                'id_ativo' => 395,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            395 =>
            array (
                'id' => 396,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.23',
                'variacao' => '2.47',
                'id_ativo' => 396,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            396 =>
            array (
                'id' => 397,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.25',
                'variacao' => '1.21',
                'id_ativo' => 397,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            397 =>
            array (
                'id' => 398,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.83',
                'variacao' => '2.47',
                'id_ativo' => 398,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            398 =>
            array (
                'id' => 399,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.31',
                'variacao' => '2.17',
                'id_ativo' => 399,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            399 =>
            array (
                'id' => 400,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.87',
                'variacao' => '-1.50',
                'id_ativo' => 400,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            400 =>
            array (
                'id' => 401,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.90',
                'variacao' => '1.02',
                'id_ativo' => 401,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            401 =>
            array (
                'id' => 402,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.35',
                'variacao' => '0.18',
                'id_ativo' => 402,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            402 =>
            array (
                'id' => 403,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.17',
                'variacao' => '-0.11',
                'id_ativo' => 403,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            403 =>
            array (
                'id' => 404,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.80',
                'variacao' => '15.34',
                'id_ativo' => 404,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            404 =>
            array (
                'id' => 405,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.16',
                'variacao' => '-0.48',
                'id_ativo' => 405,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            405 =>
            array (
                'id' => 406,
                'data' => '2024-01-27',
                'valor_fechamento' => '88.36',
                'variacao' => '-0.29',
                'id_ativo' => 406,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            406 =>
            array (
                'id' => 407,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.06',
                'variacao' => '0.49',
                'id_ativo' => 407,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            407 =>
            array (
                'id' => 408,
                'data' => '2024-01-27',
                'valor_fechamento' => '138.00',
                'variacao' => '-0.93',
                'id_ativo' => 408,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            408 =>
            array (
                'id' => 409,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.48',
                'variacao' => '1.36',
                'id_ativo' => 409,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            409 =>
            array (
                'id' => 410,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.63',
                'variacao' => '0.04',
                'id_ativo' => 410,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            410 =>
            array (
                'id' => 411,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.45',
                'variacao' => '0.30',
                'id_ativo' => 411,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            411 =>
            array (
                'id' => 412,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.64',
                'variacao' => '-0.58',
                'id_ativo' => 412,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            412 =>
            array (
                'id' => 413,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.80',
                'variacao' => '0.32',
                'id_ativo' => 413,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            413 =>
            array (
                'id' => 414,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.28',
                'variacao' => '1.79',
                'id_ativo' => 414,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            414 =>
            array (
                'id' => 415,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.50',
                'variacao' => '2.94',
                'id_ativo' => 415,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            415 =>
            array (
                'id' => 416,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.87',
                'variacao' => '0.32',
                'id_ativo' => 416,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            416 =>
            array (
                'id' => 417,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.30',
                'variacao' => '1.32',
                'id_ativo' => 417,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            417 =>
            array (
                'id' => 418,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.02',
                'variacao' => '1.01',
                'id_ativo' => 418,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            418 =>
            array (
                'id' => 419,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.42',
                'variacao' => '2.08',
                'id_ativo' => 419,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            419 =>
            array (
                'id' => 420,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.90',
                'variacao' => '-3.96',
                'id_ativo' => 420,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            420 =>
            array (
                'id' => 421,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.64',
                'variacao' => '1.59',
                'id_ativo' => 421,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            421 =>
            array (
                'id' => 422,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.46',
                'variacao' => '-6.82',
                'id_ativo' => 422,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            422 =>
            array (
                'id' => 423,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.40',
                'variacao' => '1.11',
                'id_ativo' => 423,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            423 =>
            array (
                'id' => 424,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.50',
                'variacao' => '0.54',
                'id_ativo' => 424,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            424 =>
            array (
                'id' => 425,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.90',
                'variacao' => '-0.13',
                'id_ativo' => 425,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            425 =>
            array (
                'id' => 426,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.79',
                'variacao' => '2.60',
                'id_ativo' => 426,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            426 =>
            array (
                'id' => 427,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.81',
                'variacao' => '3.03',
                'id_ativo' => 427,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            427 =>
            array (
                'id' => 428,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.00',
                'variacao' => '-0.12',
                'id_ativo' => 428,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            428 =>
            array (
                'id' => 429,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.56',
                'variacao' => '0.08',
                'id_ativo' => 429,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            429 =>
            array (
                'id' => 430,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.54',
                'variacao' => '0.54',
                'id_ativo' => 430,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            430 =>
            array (
                'id' => 431,
                'data' => '2024-01-27',
                'valor_fechamento' => '126.26',
                'variacao' => '0.85',
                'id_ativo' => 431,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            431 =>
            array (
                'id' => 432,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.70',
                'variacao' => '-4.16',
                'id_ativo' => 432,
                'created_at' => '2024-01-27 08:55:05',
                'updated_at' => '2024-01-27 08:55:05',
            ),
            432 =>
            array (
                'id' => 433,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.50',
                'variacao' => '-3.00',
                'id_ativo' => 433,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            433 =>
            array (
                'id' => 434,
                'data' => '2024-01-27',
                'valor_fechamento' => '228.00',
                'variacao' => '0.76',
                'id_ativo' => 434,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            434 =>
            array (
                'id' => 435,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.05',
                'variacao' => '-0.97',
                'id_ativo' => 435,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            435 =>
            array (
                'id' => 436,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.91',
                'variacao' => '0.09',
                'id_ativo' => 436,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            436 =>
            array (
                'id' => 437,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.07',
                'variacao' => '0.37',
                'id_ativo' => 437,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            437 =>
            array (
                'id' => 438,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.26',
                'variacao' => '0.00',
                'id_ativo' => 438,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            438 =>
            array (
                'id' => 439,
                'data' => '2024-01-27',
                'valor_fechamento' => '63.09',
                'variacao' => '0.78',
                'id_ativo' => 439,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            439 =>
            array (
                'id' => 440,
                'data' => '2024-01-27',
                'valor_fechamento' => '95.59',
                'variacao' => '-0.22',
                'id_ativo' => 440,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            440 =>
            array (
                'id' => 441,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.70',
                'variacao' => '-3.23',
                'id_ativo' => 441,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            441 =>
            array (
                'id' => 442,
                'data' => '2024-01-27',
                'valor_fechamento' => '32.50',
                'variacao' => '0.15',
                'id_ativo' => 442,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            442 =>
            array (
                'id' => 443,
                'data' => '2024-01-27',
                'valor_fechamento' => '166.35',
                'variacao' => '1.07',
                'id_ativo' => 443,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            443 =>
            array (
                'id' => 444,
                'data' => '2024-01-27',
                'valor_fechamento' => '125.50',
                'variacao' => '1.22',
                'id_ativo' => 444,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            444 =>
            array (
                'id' => 445,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.73',
                'variacao' => '-0.44',
                'id_ativo' => 445,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            445 =>
            array (
                'id' => 446,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.10',
                'variacao' => '0.65',
                'id_ativo' => 446,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            446 =>
            array (
                'id' => 447,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.73',
                'variacao' => '1.16',
                'id_ativo' => 447,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            447 =>
            array (
                'id' => 448,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.29',
                'variacao' => '0.30',
                'id_ativo' => 448,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            448 =>
            array (
                'id' => 449,
                'data' => '2024-01-27',
                'valor_fechamento' => '101.97',
                'variacao' => '-0.47',
                'id_ativo' => 449,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            449 =>
            array (
                'id' => 450,
                'data' => '2024-01-27',
                'valor_fechamento' => '111.15',
                'variacao' => '-0.67',
                'id_ativo' => 450,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            450 =>
            array (
                'id' => 451,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.36',
                'variacao' => '-0.98',
                'id_ativo' => 451,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            451 =>
            array (
                'id' => 452,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.48',
                'variacao' => '1.15',
                'id_ativo' => 452,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            452 =>
            array (
                'id' => 453,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.75',
                'variacao' => '1.35',
                'id_ativo' => 453,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            453 =>
            array (
                'id' => 454,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.39',
                'variacao' => '1.94',
                'id_ativo' => 454,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            454 =>
            array (
                'id' => 455,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.31',
                'variacao' => '-0.73',
                'id_ativo' => 455,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            455 =>
            array (
                'id' => 456,
                'data' => '2024-01-27',
                'valor_fechamento' => '106.04',
                'variacao' => '1.30',
                'id_ativo' => 456,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            456 =>
            array (
                'id' => 457,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.10',
                'variacao' => '-0.84',
                'id_ativo' => 457,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            457 =>
            array (
                'id' => 458,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.47',
                'variacao' => '-1.29',
                'id_ativo' => 458,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            458 =>
            array (
                'id' => 459,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.45',
                'variacao' => '0.35',
                'id_ativo' => 459,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            459 =>
            array (
                'id' => 460,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.13',
                'variacao' => '1.00',
                'id_ativo' => 460,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            460 =>
            array (
                'id' => 461,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.25',
                'variacao' => '-0.29',
                'id_ativo' => 461,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            461 =>
            array (
                'id' => 462,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.69',
                'variacao' => '0.24',
                'id_ativo' => 462,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            462 =>
            array (
                'id' => 463,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.47',
                'variacao' => '-0.07',
                'id_ativo' => 463,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            463 =>
            array (
                'id' => 464,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.49',
                'variacao' => '-0.10',
                'id_ativo' => 464,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            464 =>
            array (
                'id' => 465,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.10',
                'variacao' => '1.52',
                'id_ativo' => 465,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            465 =>
            array (
                'id' => 466,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.70',
                'variacao' => '2.01',
                'id_ativo' => 466,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            466 =>
            array (
                'id' => 467,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.66',
                'variacao' => '-3.29',
                'id_ativo' => 467,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            467 =>
            array (
                'id' => 468,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.20',
                'variacao' => '-2.04',
                'id_ativo' => 468,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            468 =>
            array (
                'id' => 469,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.22',
                'variacao' => '0.61',
                'id_ativo' => 469,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            469 =>
            array (
                'id' => 470,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.97',
                'variacao' => '-0.01',
                'id_ativo' => 470,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            470 =>
            array (
                'id' => 471,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.69',
                'variacao' => '0.55',
                'id_ativo' => 471,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            471 =>
            array (
                'id' => 472,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.72',
                'variacao' => '1.18',
                'id_ativo' => 472,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            472 =>
            array (
                'id' => 473,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.16',
                'variacao' => '-1.81',
                'id_ativo' => 473,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            473 =>
            array (
                'id' => 474,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.84',
                'variacao' => '-0.34',
                'id_ativo' => 474,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            474 =>
            array (
                'id' => 475,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.24',
                'variacao' => '0.56',
                'id_ativo' => 475,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            475 =>
            array (
                'id' => 476,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.06',
                'variacao' => '-3.84',
                'id_ativo' => 476,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            476 =>
            array (
                'id' => 477,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.99',
                'variacao' => '3.46',
                'id_ativo' => 477,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            477 =>
            array (
                'id' => 478,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.64',
                'variacao' => '1.30',
                'id_ativo' => 478,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            478 =>
            array (
                'id' => 479,
                'data' => '2024-01-27',
                'valor_fechamento' => '55.70',
                'variacao' => '1.83',
                'id_ativo' => 479,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            479 =>
            array (
                'id' => 480,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.00',
                'variacao' => '-6.37',
                'id_ativo' => 480,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            480 =>
            array (
                'id' => 481,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.99',
                'variacao' => '-2.61',
                'id_ativo' => 481,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            481 =>
            array (
                'id' => 482,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.19',
                'variacao' => '-0.11',
                'id_ativo' => 482,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            482 =>
            array (
                'id' => 483,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.90',
                'variacao' => '-2.09',
                'id_ativo' => 483,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            483 =>
            array (
                'id' => 484,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.49',
                'variacao' => '-0.05',
                'id_ativo' => 484,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            484 =>
            array (
                'id' => 485,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.57',
                'variacao' => '-6.98',
                'id_ativo' => 485,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            485 =>
            array (
                'id' => 486,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.78',
                'variacao' => '0.78',
                'id_ativo' => 486,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            486 =>
            array (
                'id' => 487,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.70',
                'variacao' => '-0.46',
                'id_ativo' => 487,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            487 =>
            array (
                'id' => 488,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.93',
                'variacao' => '0.41',
                'id_ativo' => 488,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            488 =>
            array (
                'id' => 489,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.17',
                'variacao' => '0.49',
                'id_ativo' => 489,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            489 =>
            array (
                'id' => 490,
                'data' => '2024-01-27',
                'valor_fechamento' => '58.44',
                'variacao' => '-0.95',
                'id_ativo' => 490,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            490 =>
            array (
                'id' => 491,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.59',
                'variacao' => '0.68',
                'id_ativo' => 491,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            491 =>
            array (
                'id' => 492,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.23',
                'variacao' => '0.69',
                'id_ativo' => 492,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            492 =>
            array (
                'id' => 493,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.80',
                'variacao' => '-0.05',
                'id_ativo' => 493,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            493 =>
            array (
                'id' => 494,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.14',
                'variacao' => '0.00',
                'id_ativo' => 494,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            494 =>
            array (
                'id' => 495,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.75',
                'variacao' => '0.84',
                'id_ativo' => 495,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            495 =>
            array (
                'id' => 496,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.20',
                'variacao' => '0.38',
                'id_ativo' => 496,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            496 =>
            array (
                'id' => 497,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.60',
                'variacao' => '0.12',
                'id_ativo' => 497,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            497 =>
            array (
                'id' => 498,
                'data' => '2024-01-27',
                'valor_fechamento' => '89.35',
                'variacao' => '1.51',
                'id_ativo' => 498,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            498 =>
            array (
                'id' => 499,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.82',
                'variacao' => '-0.69',
                'id_ativo' => 499,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            499 =>
            array (
                'id' => 500,
                'data' => '2024-01-27',
                'valor_fechamento' => '89.79',
                'variacao' => '0.55',
                'id_ativo' => 500,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
        ));
        DB::table('historico_ativos')->insert(array (
            0 =>
            array (
                'id' => 501,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.56',
                'variacao' => '-0.55',
                'id_ativo' => 501,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            1 =>
            array (
                'id' => 502,
                'data' => '2024-01-27',
                'valor_fechamento' => '118.95',
                'variacao' => '0.27',
                'id_ativo' => 502,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            2 =>
            array (
                'id' => 503,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.95',
                'variacao' => '1.13',
                'id_ativo' => 503,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            3 =>
            array (
                'id' => 504,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.51',
                'variacao' => '-1.96',
                'id_ativo' => 504,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            4 =>
            array (
                'id' => 505,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.52',
                'variacao' => '0.00',
                'id_ativo' => 505,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            5 =>
            array (
                'id' => 506,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.15',
                'variacao' => '0.83',
                'id_ativo' => 506,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            6 =>
            array (
                'id' => 507,
                'data' => '2024-01-27',
                'valor_fechamento' => '133.13',
                'variacao' => '0.25',
                'id_ativo' => 507,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            7 =>
            array (
                'id' => 508,
                'data' => '2024-01-27',
                'valor_fechamento' => '66.80',
                'variacao' => '0.60',
                'id_ativo' => 508,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            8 =>
            array (
                'id' => 509,
                'data' => '2024-01-27',
                'valor_fechamento' => '128.75',
                'variacao' => '-0.04',
                'id_ativo' => 509,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            9 =>
            array (
                'id' => 510,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.03',
                'variacao' => '-0.71',
                'id_ativo' => 510,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            10 =>
            array (
                'id' => 511,
                'data' => '2024-01-27',
                'valor_fechamento' => '138.31',
                'variacao' => '0.01',
                'id_ativo' => 511,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            11 =>
            array (
                'id' => 512,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.07',
                'variacao' => '-0.71',
                'id_ativo' => 512,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            12 =>
            array (
                'id' => 513,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.13',
                'variacao' => '0.00',
                'id_ativo' => 513,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            13 =>
            array (
                'id' => 514,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.80',
                'variacao' => '-0.20',
                'id_ativo' => 514,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            14 =>
            array (
                'id' => 515,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.03',
                'variacao' => '1.45',
                'id_ativo' => 515,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            15 =>
            array (
                'id' => 516,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.53',
                'variacao' => '-1.85',
                'id_ativo' => 516,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            16 =>
            array (
                'id' => 517,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.00',
                'variacao' => '-0.55',
                'id_ativo' => 517,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            17 =>
            array (
                'id' => 518,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.87',
                'variacao' => '-1.02',
                'id_ativo' => 518,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            18 =>
            array (
                'id' => 519,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.96',
                'variacao' => '-1.34',
                'id_ativo' => 519,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            19 =>
            array (
                'id' => 520,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.83',
                'variacao' => '-0.46',
                'id_ativo' => 520,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            20 =>
            array (
                'id' => 521,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.20',
                'variacao' => '0.14',
                'id_ativo' => 521,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            21 =>
            array (
                'id' => 522,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.20',
                'variacao' => '-2.65',
                'id_ativo' => 522,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            22 =>
            array (
                'id' => 523,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.74',
                'variacao' => '-1.42',
                'id_ativo' => 523,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            23 =>
            array (
                'id' => 524,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.35',
                'variacao' => '0.38',
                'id_ativo' => 524,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            24 =>
            array (
                'id' => 525,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.70',
                'variacao' => '-1.32',
                'id_ativo' => 525,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            25 =>
            array (
                'id' => 526,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.54',
                'variacao' => '-0.42',
                'id_ativo' => 526,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            26 =>
            array (
                'id' => 527,
                'data' => '2024-01-27',
                'valor_fechamento' => '89.67',
                'variacao' => '1.37',
                'id_ativo' => 527,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            27 =>
            array (
                'id' => 528,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.30',
                'variacao' => '-0.08',
                'id_ativo' => 528,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            28 =>
            array (
                'id' => 529,
                'data' => '2024-01-27',
                'valor_fechamento' => '84.99',
                'variacao' => '0.00',
                'id_ativo' => 529,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            29 =>
            array (
                'id' => 530,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.19',
                'variacao' => '0.08',
                'id_ativo' => 530,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            30 =>
            array (
                'id' => 531,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.96',
                'variacao' => '1.67',
                'id_ativo' => 531,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            31 =>
            array (
                'id' => 532,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.76',
                'variacao' => '1.96',
                'id_ativo' => 532,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            32 =>
            array (
                'id' => 533,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.89',
                'variacao' => '-1.91',
                'id_ativo' => 533,
                'created_at' => '2024-01-27 08:55:06',
                'updated_at' => '2024-01-27 08:55:06',
            ),
            33 =>
            array (
                'id' => 534,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.15',
                'variacao' => '2.39',
                'id_ativo' => 534,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            34 =>
            array (
                'id' => 535,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.76',
                'variacao' => '2.05',
                'id_ativo' => 535,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            35 =>
            array (
                'id' => 536,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.86',
                'variacao' => '0.71',
                'id_ativo' => 536,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            36 =>
            array (
                'id' => 537,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.97',
                'variacao' => '1.29',
                'id_ativo' => 537,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            37 =>
            array (
                'id' => 538,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.79',
                'variacao' => '-1.25',
                'id_ativo' => 538,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            38 =>
            array (
                'id' => 539,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.13',
                'variacao' => '-2.19',
                'id_ativo' => 539,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            39 =>
            array (
                'id' => 540,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.25',
                'variacao' => '3.13',
                'id_ativo' => 540,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            40 =>
            array (
                'id' => 541,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.68',
                'variacao' => '-5.64',
                'id_ativo' => 541,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            41 =>
            array (
                'id' => 542,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.46',
                'variacao' => '2.27',
                'id_ativo' => 542,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            42 =>
            array (
                'id' => 543,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.97',
                'variacao' => '2.55',
                'id_ativo' => 543,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            43 =>
            array (
                'id' => 544,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.80',
                'variacao' => '-1.52',
                'id_ativo' => 544,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            44 =>
            array (
                'id' => 545,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.20',
                'variacao' => '0.00',
                'id_ativo' => 545,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            45 =>
            array (
                'id' => 546,
                'data' => '2024-01-27',
                'valor_fechamento' => '75.40',
                'variacao' => '-0.75',
                'id_ativo' => 546,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            46 =>
            array (
                'id' => 547,
                'data' => '2024-01-27',
                'valor_fechamento' => '108.63',
                'variacao' => '0.04',
                'id_ativo' => 547,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            47 =>
            array (
                'id' => 548,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.56',
                'variacao' => '0.34',
                'id_ativo' => 548,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            48 =>
            array (
                'id' => 549,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.50',
                'variacao' => '-0.23',
                'id_ativo' => 549,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            49 =>
            array (
                'id' => 550,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.84',
                'variacao' => '-1.39',
                'id_ativo' => 550,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            50 =>
            array (
                'id' => 551,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.90',
                'variacao' => '1.30',
                'id_ativo' => 551,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            51 =>
            array (
                'id' => 552,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.04',
                'variacao' => '0.63',
                'id_ativo' => 552,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            52 =>
            array (
                'id' => 553,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.96',
                'variacao' => '-0.35',
                'id_ativo' => 553,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            53 =>
            array (
                'id' => 554,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.30',
                'variacao' => '-0.60',
                'id_ativo' => 554,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            54 =>
            array (
                'id' => 555,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.64',
                'variacao' => '-0.23',
                'id_ativo' => 555,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            55 =>
            array (
                'id' => 556,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.26',
                'variacao' => '1.50',
                'id_ativo' => 556,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            56 =>
            array (
                'id' => 557,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.16',
                'variacao' => '-4.13',
                'id_ativo' => 557,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            57 =>
            array (
                'id' => 558,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.00',
                'variacao' => '-0.99',
                'id_ativo' => 558,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            58 =>
            array (
                'id' => 559,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.38',
                'variacao' => '0.56',
                'id_ativo' => 559,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            59 =>
            array (
                'id' => 560,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.85',
                'variacao' => '-2.10',
                'id_ativo' => 560,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            60 =>
            array (
                'id' => 561,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.19',
                'variacao' => '0.00',
                'id_ativo' => 561,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            61 =>
            array (
                'id' => 562,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.70',
                'variacao' => '5.75',
                'id_ativo' => 562,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            62 =>
            array (
                'id' => 563,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.98',
                'variacao' => '-1.67',
                'id_ativo' => 563,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            63 =>
            array (
                'id' => 564,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.92',
                'variacao' => '-0.21',
                'id_ativo' => 564,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            64 =>
            array (
                'id' => 565,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.10',
                'variacao' => '0.78',
                'id_ativo' => 565,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            65 =>
            array (
                'id' => 566,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.80',
                'variacao' => '-0.15',
                'id_ativo' => 566,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            66 =>
            array (
                'id' => 567,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.50',
                'variacao' => '1.68',
                'id_ativo' => 567,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            67 =>
            array (
                'id' => 568,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.79',
                'variacao' => '-1.16',
                'id_ativo' => 568,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            68 =>
            array (
                'id' => 569,
                'data' => '2024-01-27',
                'valor_fechamento' => '185.40',
                'variacao' => '1.42',
                'id_ativo' => 569,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            69 =>
            array (
                'id' => 570,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.10',
                'variacao' => '0.04',
                'id_ativo' => 570,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            70 =>
            array (
                'id' => 571,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.64',
                'variacao' => '1.82',
                'id_ativo' => 571,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            71 =>
            array (
                'id' => 572,
                'data' => '2024-01-27',
                'valor_fechamento' => '114.02',
                'variacao' => '0.72',
                'id_ativo' => 572,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            72 =>
            array (
                'id' => 573,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.79',
                'variacao' => '1.17',
                'id_ativo' => 573,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            73 =>
            array (
                'id' => 574,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.10',
                'variacao' => '-2.61',
                'id_ativo' => 574,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            74 =>
            array (
                'id' => 575,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.28',
                'variacao' => '0.26',
                'id_ativo' => 575,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            75 =>
            array (
                'id' => 576,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.50',
                'variacao' => '2.25',
                'id_ativo' => 576,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            76 =>
            array (
                'id' => 577,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.90',
                'variacao' => '-0.44',
                'id_ativo' => 577,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            77 =>
            array (
                'id' => 578,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.12',
                'variacao' => '0.00',
                'id_ativo' => 578,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            78 =>
            array (
                'id' => 579,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.40',
                'variacao' => '0.47',
                'id_ativo' => 579,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            79 =>
            array (
                'id' => 580,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.90',
                'variacao' => '-0.24',
                'id_ativo' => 580,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            80 =>
            array (
                'id' => 581,
                'data' => '2024-01-27',
                'valor_fechamento' => '95.20',
                'variacao' => '-0.39',
                'id_ativo' => 581,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            81 =>
            array (
                'id' => 582,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.76',
                'variacao' => '0.80',
                'id_ativo' => 582,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            82 =>
            array (
                'id' => 583,
                'data' => '2024-01-27',
                'valor_fechamento' => '76.75',
                'variacao' => '0.13',
                'id_ativo' => 583,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            83 =>
            array (
                'id' => 584,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.20',
                'variacao' => '3.45',
                'id_ativo' => 584,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            84 =>
            array (
                'id' => 585,
                'data' => '2024-01-27',
                'valor_fechamento' => '65.88',
                'variacao' => '-0.20',
                'id_ativo' => 585,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            85 =>
            array (
                'id' => 586,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.09',
                'variacao' => '0.25',
                'id_ativo' => 586,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            86 =>
            array (
                'id' => 587,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.28',
                'variacao' => '1.00',
                'id_ativo' => 587,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            87 =>
            array (
                'id' => 588,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.33',
                'variacao' => '-1.25',
                'id_ativo' => 588,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            88 =>
            array (
                'id' => 589,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.88',
                'variacao' => '0.07',
                'id_ativo' => 589,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            89 =>
            array (
                'id' => 590,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.40',
                'variacao' => '-0.22',
                'id_ativo' => 590,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            90 =>
            array (
                'id' => 591,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.90',
                'variacao' => '1.63',
                'id_ativo' => 591,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            91 =>
            array (
                'id' => 592,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.40',
                'variacao' => '0.00',
                'id_ativo' => 592,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            92 =>
            array (
                'id' => 593,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.47',
                'variacao' => '1.54',
                'id_ativo' => 593,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            93 =>
            array (
                'id' => 594,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.00',
                'variacao' => '-1.46',
                'id_ativo' => 594,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            94 =>
            array (
                'id' => 595,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.78',
                'variacao' => '-2.26',
                'id_ativo' => 595,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            95 =>
            array (
                'id' => 596,
                'data' => '2024-01-27',
                'valor_fechamento' => '118.00',
                'variacao' => '0.27',
                'id_ativo' => 596,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            96 =>
            array (
                'id' => 597,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.70',
                'variacao' => '-0.56',
                'id_ativo' => 597,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            97 =>
            array (
                'id' => 598,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.00',
                'variacao' => '-0.73',
                'id_ativo' => 598,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            98 =>
            array (
                'id' => 599,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.88',
                'variacao' => '-0.26',
                'id_ativo' => 599,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            99 =>
            array (
                'id' => 600,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.54',
                'variacao' => '1.54',
                'id_ativo' => 600,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            100 =>
            array (
                'id' => 601,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.25',
                'variacao' => '-0.08',
                'id_ativo' => 601,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            101 =>
            array (
                'id' => 602,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.62',
                'variacao' => '-1.82',
                'id_ativo' => 602,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            102 =>
            array (
                'id' => 603,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.85',
                'variacao' => '0.16',
                'id_ativo' => 603,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            103 =>
            array (
                'id' => 604,
                'data' => '2024-01-27',
                'valor_fechamento' => '84.35',
                'variacao' => '0.37',
                'id_ativo' => 604,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            104 =>
            array (
                'id' => 605,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.90',
                'variacao' => '1.46',
                'id_ativo' => 605,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            105 =>
            array (
                'id' => 606,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.98',
                'variacao' => '-1.00',
                'id_ativo' => 606,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            106 =>
            array (
                'id' => 607,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.32',
                'variacao' => '2.87',
                'id_ativo' => 607,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            107 =>
            array (
                'id' => 608,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.45',
                'variacao' => '-2.22',
                'id_ativo' => 608,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            108 =>
            array (
                'id' => 609,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.55',
                'variacao' => '-0.43',
                'id_ativo' => 609,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            109 =>
            array (
                'id' => 610,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.55',
                'variacao' => '-0.27',
                'id_ativo' => 610,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            110 =>
            array (
                'id' => 611,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.81',
                'variacao' => '3.92',
                'id_ativo' => 611,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            111 =>
            array (
                'id' => 612,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.92',
                'variacao' => '0.45',
                'id_ativo' => 612,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            112 =>
            array (
                'id' => 613,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.20',
                'variacao' => '0.00',
                'id_ativo' => 613,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            113 =>
            array (
                'id' => 614,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.85',
                'variacao' => '0.46',
                'id_ativo' => 614,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            114 =>
            array (
                'id' => 615,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.41',
                'variacao' => '0.12',
                'id_ativo' => 615,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            115 =>
            array (
                'id' => 616,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.47',
                'variacao' => '-0.10',
                'id_ativo' => 616,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            116 =>
            array (
                'id' => 617,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.50',
                'variacao' => '0.11',
                'id_ativo' => 617,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            117 =>
            array (
                'id' => 618,
                'data' => '2024-01-27',
                'valor_fechamento' => '114.58',
                'variacao' => '-0.27',
                'id_ativo' => 618,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            118 =>
            array (
                'id' => 619,
                'data' => '2024-01-27',
                'valor_fechamento' => '84.59',
                'variacao' => '-0.32',
                'id_ativo' => 619,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            119 =>
            array (
                'id' => 620,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.37',
                'variacao' => '0.30',
                'id_ativo' => 620,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            120 =>
            array (
                'id' => 621,
                'data' => '2024-01-27',
                'valor_fechamento' => '84.57',
                'variacao' => '-2.50',
                'id_ativo' => 621,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            121 =>
            array (
                'id' => 622,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.60',
                'variacao' => '-2.65',
                'id_ativo' => 622,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            122 =>
            array (
                'id' => 623,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.72',
                'variacao' => '-0.82',
                'id_ativo' => 623,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            123 =>
            array (
                'id' => 624,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.11',
                'variacao' => '0.24',
                'id_ativo' => 624,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            124 =>
            array (
                'id' => 625,
                'data' => '2024-01-27',
                'valor_fechamento' => '100.50',
                'variacao' => '0.30',
                'id_ativo' => 625,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            125 =>
            array (
                'id' => 626,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.59',
                'variacao' => '0.39',
                'id_ativo' => 626,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            126 =>
            array (
                'id' => 627,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.98',
                'variacao' => '0.28',
                'id_ativo' => 627,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            127 =>
            array (
                'id' => 628,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.90',
                'variacao' => '0.65',
                'id_ativo' => 628,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            128 =>
            array (
                'id' => 629,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.99',
                'variacao' => '0.30',
                'id_ativo' => 629,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            129 =>
            array (
                'id' => 630,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.31',
                'variacao' => '1.91',
                'id_ativo' => 630,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            130 =>
            array (
                'id' => 631,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.58',
                'variacao' => '1.45',
                'id_ativo' => 631,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            131 =>
            array (
                'id' => 632,
                'data' => '2024-01-27',
                'valor_fechamento' => '100.90',
                'variacao' => '1.49',
                'id_ativo' => 632,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            132 =>
            array (
                'id' => 633,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.90',
                'variacao' => '6.06',
                'id_ativo' => 633,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            133 =>
            array (
                'id' => 634,
                'data' => '2024-01-27',
                'valor_fechamento' => '73.05',
                'variacao' => '0.27',
                'id_ativo' => 634,
                'created_at' => '2024-01-27 08:55:07',
                'updated_at' => '2024-01-27 08:55:07',
            ),
            134 =>
            array (
                'id' => 635,
                'data' => '2024-01-27',
                'valor_fechamento' => '83.20',
                'variacao' => '0.85',
                'id_ativo' => 635,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            135 =>
            array (
                'id' => 636,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.25',
                'variacao' => '-1.15',
                'id_ativo' => 636,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            136 =>
            array (
                'id' => 637,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.54',
                'variacao' => '-1.18',
                'id_ativo' => 637,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            137 =>
            array (
                'id' => 638,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.18',
                'variacao' => '2.45',
                'id_ativo' => 638,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            138 =>
            array (
                'id' => 639,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.80',
                'variacao' => '-0.42',
                'id_ativo' => 639,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            139 =>
            array (
                'id' => 640,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.60',
                'variacao' => '-1.17',
                'id_ativo' => 640,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            140 =>
            array (
                'id' => 641,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.81',
                'variacao' => '-1.01',
                'id_ativo' => 641,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            141 =>
            array (
                'id' => 642,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.53',
                'variacao' => '-0.17',
                'id_ativo' => 642,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            142 =>
            array (
                'id' => 643,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.65',
                'variacao' => '0.21',
                'id_ativo' => 643,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            143 =>
            array (
                'id' => 644,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.38',
                'variacao' => '0.87',
                'id_ativo' => 644,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            144 =>
            array (
                'id' => 645,
                'data' => '2024-01-27',
                'valor_fechamento' => '55.70',
                'variacao' => '-1.00',
                'id_ativo' => 645,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            145 =>
            array (
                'id' => 646,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.41',
                'variacao' => '0.00',
                'id_ativo' => 646,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            146 =>
            array (
                'id' => 647,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.99',
                'variacao' => '-0.01',
                'id_ativo' => 647,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            147 =>
            array (
                'id' => 648,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.96',
                'variacao' => '3.11',
                'id_ativo' => 648,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            148 =>
            array (
                'id' => 649,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.25',
                'variacao' => '0.32',
                'id_ativo' => 649,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            149 =>
            array (
                'id' => 650,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.57',
                'variacao' => '0.10',
                'id_ativo' => 650,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            150 =>
            array (
                'id' => 651,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.41',
                'variacao' => '-0.10',
                'id_ativo' => 651,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            151 =>
            array (
                'id' => 652,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.80',
                'variacao' => '-1.27',
                'id_ativo' => 652,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            152 =>
            array (
                'id' => 653,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.80',
                'variacao' => '0.58',
                'id_ativo' => 653,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            153 =>
            array (
                'id' => 654,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.70',
                'variacao' => '1.66',
                'id_ativo' => 654,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            154 =>
            array (
                'id' => 655,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.39',
                'variacao' => '5.41',
                'id_ativo' => 655,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            155 =>
            array (
                'id' => 656,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.48',
                'variacao' => '-2.13',
                'id_ativo' => 656,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            156 =>
            array (
                'id' => 657,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.80',
                'variacao' => '0.15',
                'id_ativo' => 657,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            157 =>
            array (
                'id' => 658,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.88',
                'variacao' => '-6.00',
                'id_ativo' => 658,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            158 =>
            array (
                'id' => 659,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.00',
                'variacao' => '-0.17',
                'id_ativo' => 659,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            159 =>
            array (
                'id' => 660,
                'data' => '2024-01-27',
                'valor_fechamento' => '70.73',
                'variacao' => '-0.66',
                'id_ativo' => 660,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            160 =>
            array (
                'id' => 661,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.40',
                'variacao' => '-11.76',
                'id_ativo' => 661,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            161 =>
            array (
                'id' => 662,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.87',
                'variacao' => '-1.58',
                'id_ativo' => 662,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            162 =>
            array (
                'id' => 663,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.59',
                'variacao' => '0.00',
                'id_ativo' => 663,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            163 =>
            array (
                'id' => 664,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.98',
                'variacao' => '0.22',
                'id_ativo' => 664,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            164 =>
            array (
                'id' => 665,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.78',
                'variacao' => '0.14',
                'id_ativo' => 665,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            165 =>
            array (
                'id' => 666,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.53',
                'variacao' => '-0.09',
                'id_ativo' => 666,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            166 =>
            array (
                'id' => 667,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.12',
                'variacao' => '1.31',
                'id_ativo' => 667,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            167 =>
            array (
                'id' => 668,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.03',
                'variacao' => '-0.28',
                'id_ativo' => 668,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            168 =>
            array (
                'id' => 669,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.35',
                'variacao' => '0.70',
                'id_ativo' => 669,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            169 =>
            array (
                'id' => 670,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.87',
                'variacao' => '3.15',
                'id_ativo' => 670,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            170 =>
            array (
                'id' => 671,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.66',
                'variacao' => '-0.16',
                'id_ativo' => 671,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            171 =>
            array (
                'id' => 672,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.00',
                'variacao' => '0.86',
                'id_ativo' => 672,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            172 =>
            array (
                'id' => 673,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.49',
                'variacao' => '1.09',
                'id_ativo' => 673,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            173 =>
            array (
                'id' => 674,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.50',
                'variacao' => '-0.51',
                'id_ativo' => 674,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            174 =>
            array (
                'id' => 675,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.10',
                'variacao' => '0.26',
                'id_ativo' => 675,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            175 =>
            array (
                'id' => 676,
                'data' => '2024-01-27',
                'valor_fechamento' => '89.89',
                'variacao' => '0.12',
                'id_ativo' => 676,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            176 =>
            array (
                'id' => 677,
                'data' => '2024-01-27',
                'valor_fechamento' => '58.90',
                'variacao' => '5.18',
                'id_ativo' => 677,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            177 =>
            array (
                'id' => 678,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.00',
                'variacao' => '4.05',
                'id_ativo' => 678,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            178 =>
            array (
                'id' => 679,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.99',
                'variacao' => '41.39',
                'id_ativo' => 679,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            179 =>
            array (
                'id' => 680,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.27',
                'variacao' => '1.69',
                'id_ativo' => 680,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            180 =>
            array (
                'id' => 681,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.49',
                'variacao' => '-0.40',
                'id_ativo' => 681,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            181 =>
            array (
                'id' => 682,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.55',
                'variacao' => '0.17',
                'id_ativo' => 682,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            182 =>
            array (
                'id' => 683,
                'data' => '2024-01-27',
                'valor_fechamento' => '112.24',
                'variacao' => '0.21',
                'id_ativo' => 683,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            183 =>
            array (
                'id' => 684,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.92',
                'variacao' => '3.14',
                'id_ativo' => 684,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            184 =>
            array (
                'id' => 685,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.86',
                'variacao' => '1.78',
                'id_ativo' => 685,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            185 =>
            array (
                'id' => 686,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.29',
                'variacao' => '0.37',
                'id_ativo' => 686,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            186 =>
            array (
                'id' => 687,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.39',
                'variacao' => '0.77',
                'id_ativo' => 687,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            187 =>
            array (
                'id' => 688,
                'data' => '2024-01-27',
                'valor_fechamento' => '44.39',
                'variacao' => '-0.65',
                'id_ativo' => 688,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            188 =>
            array (
                'id' => 689,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.00',
                'variacao' => '-0.20',
                'id_ativo' => 689,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            189 =>
            array (
                'id' => 690,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.78',
                'variacao' => '0.09',
                'id_ativo' => 690,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            190 =>
            array (
                'id' => 691,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.97',
                'variacao' => '0.32',
                'id_ativo' => 691,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            191 =>
            array (
                'id' => 692,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.05',
                'variacao' => '-0.77',
                'id_ativo' => 692,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            192 =>
            array (
                'id' => 693,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.51',
                'variacao' => '-2.54',
                'id_ativo' => 693,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            193 =>
            array (
                'id' => 694,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.90',
                'variacao' => '-0.19',
                'id_ativo' => 694,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            194 =>
            array (
                'id' => 695,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.52',
                'variacao' => '0.10',
                'id_ativo' => 695,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            195 =>
            array (
                'id' => 696,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.36',
                'variacao' => '-0.76',
                'id_ativo' => 696,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            196 =>
            array (
                'id' => 697,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.56',
                'variacao' => '0.13',
                'id_ativo' => 697,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            197 =>
            array (
                'id' => 698,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.75',
                'variacao' => '-2.48',
                'id_ativo' => 698,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            198 =>
            array (
                'id' => 699,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.10',
                'variacao' => '-0.30',
                'id_ativo' => 699,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            199 =>
            array (
                'id' => 700,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.87',
                'variacao' => '0.05',
                'id_ativo' => 700,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            200 =>
            array (
                'id' => 701,
                'data' => '2024-01-27',
                'valor_fechamento' => '42.73',
                'variacao' => '3.41',
                'id_ativo' => 701,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            201 =>
            array (
                'id' => 702,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.71',
                'variacao' => '0.00',
                'id_ativo' => 702,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            202 =>
            array (
                'id' => 703,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.89',
                'variacao' => '-0.92',
                'id_ativo' => 703,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            203 =>
            array (
                'id' => 704,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.20',
                'variacao' => '0.54',
                'id_ativo' => 704,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            204 =>
            array (
                'id' => 705,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.96',
                'variacao' => '-0.29',
                'id_ativo' => 705,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            205 =>
            array (
                'id' => 706,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.63',
                'variacao' => '0.70',
                'id_ativo' => 706,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            206 =>
            array (
                'id' => 707,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.24',
                'variacao' => '0.79',
                'id_ativo' => 707,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            207 =>
            array (
                'id' => 708,
                'data' => '2024-01-27',
                'valor_fechamento' => '73.00',
                'variacao' => '-0.19',
                'id_ativo' => 708,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            208 =>
            array (
                'id' => 709,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.02',
                'variacao' => '-1.84',
                'id_ativo' => 709,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            209 =>
            array (
                'id' => 710,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.60',
                'variacao' => '0.56',
                'id_ativo' => 710,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            210 =>
            array (
                'id' => 711,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.00',
                'variacao' => '1.17',
                'id_ativo' => 711,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            211 =>
            array (
                'id' => 712,
                'data' => '2024-01-27',
                'valor_fechamento' => '89.99',
                'variacao' => '-0.04',
                'id_ativo' => 712,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            212 =>
            array (
                'id' => 713,
                'data' => '2024-01-27',
                'valor_fechamento' => '120.89',
                'variacao' => '-0.50',
                'id_ativo' => 713,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            213 =>
            array (
                'id' => 714,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.72',
                'variacao' => '0.64',
                'id_ativo' => 714,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            214 =>
            array (
                'id' => 715,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.20',
                'variacao' => '-0.74',
                'id_ativo' => 715,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            215 =>
            array (
                'id' => 716,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.76',
                'variacao' => '-1.09',
                'id_ativo' => 716,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            216 =>
            array (
                'id' => 717,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.23',
                'variacao' => '0.95',
                'id_ativo' => 717,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            217 =>
            array (
                'id' => 718,
                'data' => '2024-01-27',
                'valor_fechamento' => '125.50',
                'variacao' => '-0.48',
                'id_ativo' => 718,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            218 =>
            array (
                'id' => 719,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.96',
                'variacao' => '-0.30',
                'id_ativo' => 719,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            219 =>
            array (
                'id' => 720,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.72',
                'variacao' => '-0.93',
                'id_ativo' => 720,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            220 =>
            array (
                'id' => 721,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.45',
                'variacao' => '0.32',
                'id_ativo' => 721,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            221 =>
            array (
                'id' => 722,
                'data' => '2024-01-27',
                'valor_fechamento' => '109.79',
                'variacao' => '0.00',
                'id_ativo' => 722,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            222 =>
            array (
                'id' => 723,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.05',
                'variacao' => '0.41',
                'id_ativo' => 723,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            223 =>
            array (
                'id' => 724,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.59',
                'variacao' => '1.30',
                'id_ativo' => 724,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            224 =>
            array (
                'id' => 725,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.68',
                'variacao' => '-1.41',
                'id_ativo' => 725,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            225 =>
            array (
                'id' => 726,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.87',
                'variacao' => '-0.64',
                'id_ativo' => 726,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            226 =>
            array (
                'id' => 727,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.58',
                'variacao' => '-0.78',
                'id_ativo' => 727,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            227 =>
            array (
                'id' => 728,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.62',
                'variacao' => '0.00',
                'id_ativo' => 728,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            228 =>
            array (
                'id' => 729,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.05',
                'variacao' => '-0.22',
                'id_ativo' => 729,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            229 =>
            array (
                'id' => 730,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.91',
                'variacao' => '-1.80',
                'id_ativo' => 730,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            230 =>
            array (
                'id' => 731,
                'data' => '2024-01-27',
                'valor_fechamento' => '72.10',
                'variacao' => '0.68',
                'id_ativo' => 731,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            231 =>
            array (
                'id' => 732,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.97',
                'variacao' => '-0.03',
                'id_ativo' => 732,
                'created_at' => '2024-01-27 08:55:08',
                'updated_at' => '2024-01-27 08:55:08',
            ),
            232 =>
            array (
                'id' => 733,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.75',
                'variacao' => '0.05',
                'id_ativo' => 733,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            233 =>
            array (
                'id' => 734,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.51',
                'variacao' => '-0.24',
                'id_ativo' => 734,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            234 =>
            array (
                'id' => 735,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.55',
                'variacao' => '3.80',
                'id_ativo' => 735,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            235 =>
            array (
                'id' => 736,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.04',
                'variacao' => '5.07',
                'id_ativo' => 736,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            236 =>
            array (
                'id' => 737,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.83',
                'variacao' => '-0.17',
                'id_ativo' => 737,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            237 =>
            array (
                'id' => 738,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.20',
                'variacao' => '0.01',
                'id_ativo' => 738,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            238 =>
            array (
                'id' => 739,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.55',
                'variacao' => '-0.59',
                'id_ativo' => 739,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            239 =>
            array (
                'id' => 740,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.12',
                'variacao' => '0.00',
                'id_ativo' => 740,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            240 =>
            array (
                'id' => 741,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.93',
                'variacao' => '0.43',
                'id_ativo' => 741,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            241 =>
            array (
                'id' => 742,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.32',
                'variacao' => '1.11',
                'id_ativo' => 742,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            242 =>
            array (
                'id' => 743,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.69',
                'variacao' => '-9.21',
                'id_ativo' => 743,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            243 =>
            array (
                'id' => 744,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.30',
                'variacao' => '0.50',
                'id_ativo' => 744,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            244 =>
            array (
                'id' => 745,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.18',
                'variacao' => '-5.26',
                'id_ativo' => 745,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            245 =>
            array (
                'id' => 746,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.77',
                'variacao' => '-0.59',
                'id_ativo' => 746,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            246 =>
            array (
                'id' => 747,
                'data' => '2024-01-27',
                'valor_fechamento' => '72.98',
                'variacao' => '-0.57',
                'id_ativo' => 747,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            247 =>
            array (
                'id' => 748,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.09',
                'variacao' => '5.21',
                'id_ativo' => 748,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            248 =>
            array (
                'id' => 749,
                'data' => '2024-01-27',
                'valor_fechamento' => '59.01',
                'variacao' => '-0.41',
                'id_ativo' => 749,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            249 =>
            array (
                'id' => 750,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.15',
                'variacao' => '-0.75',
                'id_ativo' => 750,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            250 =>
            array (
                'id' => 751,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.80',
                'variacao' => '0.06',
                'id_ativo' => 751,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            251 =>
            array (
                'id' => 752,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.94',
                'variacao' => '-1.17',
                'id_ativo' => 752,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            252 =>
            array (
                'id' => 753,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.88',
                'variacao' => '-1.61',
                'id_ativo' => 753,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            253 =>
            array (
                'id' => 754,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.55',
                'variacao' => '-1.10',
                'id_ativo' => 754,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            254 =>
            array (
                'id' => 755,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.20',
                'variacao' => '-0.15',
                'id_ativo' => 755,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            255 =>
            array (
                'id' => 756,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.38',
                'variacao' => '-0.92',
                'id_ativo' => 756,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            256 =>
            array (
                'id' => 757,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.65',
                'variacao' => '-0.35',
                'id_ativo' => 757,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            257 =>
            array (
                'id' => 758,
                'data' => '2024-01-27',
                'valor_fechamento' => '81.98',
                'variacao' => '0.28',
                'id_ativo' => 758,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            258 =>
            array (
                'id' => 759,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.15',
                'variacao' => '-1.71',
                'id_ativo' => 759,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            259 =>
            array (
                'id' => 760,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.76',
                'variacao' => '-1.21',
                'id_ativo' => 760,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            260 =>
            array (
                'id' => 761,
                'data' => '2024-01-27',
                'valor_fechamento' => '101.45',
                'variacao' => '0.34',
                'id_ativo' => 761,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            261 =>
            array (
                'id' => 762,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.36',
                'variacao' => '0.93',
                'id_ativo' => 762,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            262 =>
            array (
                'id' => 763,
                'data' => '2024-01-27',
                'valor_fechamento' => '130.73',
                'variacao' => '0.62',
                'id_ativo' => 763,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            263 =>
            array (
                'id' => 764,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.80',
                'variacao' => '0.20',
                'id_ativo' => 764,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            264 =>
            array (
                'id' => 765,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.93',
                'variacao' => '-4.27',
                'id_ativo' => 765,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            265 =>
            array (
                'id' => 766,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.03',
                'variacao' => '0.20',
                'id_ativo' => 766,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            266 =>
            array (
                'id' => 767,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.40',
                'variacao' => '-0.19',
                'id_ativo' => 767,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            267 =>
            array (
                'id' => 768,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.80',
                'variacao' => '1.88',
                'id_ativo' => 768,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            268 =>
            array (
                'id' => 769,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.00',
                'variacao' => '5.63',
                'id_ativo' => 769,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            269 =>
            array (
                'id' => 770,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.16',
                'variacao' => '-2.80',
                'id_ativo' => 770,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            270 =>
            array (
                'id' => 771,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.40',
                'variacao' => '-1.57',
                'id_ativo' => 771,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            271 =>
            array (
                'id' => 772,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.00',
                'variacao' => '-0.82',
                'id_ativo' => 772,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            272 =>
            array (
                'id' => 773,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.69',
                'variacao' => '-1.91',
                'id_ativo' => 773,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            273 =>
            array (
                'id' => 774,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.65',
                'variacao' => '-2.91',
                'id_ativo' => 774,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            274 =>
            array (
                'id' => 775,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.15',
                'variacao' => '0.11',
                'id_ativo' => 775,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            275 =>
            array (
                'id' => 776,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.53',
                'variacao' => '0.43',
                'id_ativo' => 776,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            276 =>
            array (
                'id' => 777,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.96',
                'variacao' => '0.39',
                'id_ativo' => 777,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            277 =>
            array (
                'id' => 778,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.40',
                'variacao' => '-0.56',
                'id_ativo' => 778,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            278 =>
            array (
                'id' => 779,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.66',
                'variacao' => '0.00',
                'id_ativo' => 779,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            279 =>
            array (
                'id' => 780,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.31',
                'variacao' => '-0.81',
                'id_ativo' => 780,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            280 =>
            array (
                'id' => 781,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.67',
                'variacao' => '23.56',
                'id_ativo' => 781,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            281 =>
            array (
                'id' => 782,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.90',
                'variacao' => '-2.59',
                'id_ativo' => 782,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            282 =>
            array (
                'id' => 783,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.19',
                'variacao' => '1.66',
                'id_ativo' => 783,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            283 =>
            array (
                'id' => 784,
                'data' => '2024-01-27',
                'valor_fechamento' => '121.80',
                'variacao' => '-0.57',
                'id_ativo' => 784,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            284 =>
            array (
                'id' => 785,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.80',
                'variacao' => '-1.04',
                'id_ativo' => 785,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            285 =>
            array (
                'id' => 786,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.15',
                'variacao' => '0.73',
                'id_ativo' => 786,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            286 =>
            array (
                'id' => 787,
                'data' => '2024-01-27',
                'valor_fechamento' => '76.76',
                'variacao' => '0.21',
                'id_ativo' => 787,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            287 =>
            array (
                'id' => 788,
                'data' => '2024-01-27',
                'valor_fechamento' => '100.48',
                'variacao' => '0.40',
                'id_ativo' => 788,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            288 =>
            array (
                'id' => 789,
                'data' => '2024-01-27',
                'valor_fechamento' => '259.54',
                'variacao' => '-0.20',
                'id_ativo' => 789,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            289 =>
            array (
                'id' => 790,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.65',
                'variacao' => '0.42',
                'id_ativo' => 790,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            290 =>
            array (
                'id' => 791,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.15',
                'variacao' => '-3.70',
                'id_ativo' => 791,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            291 =>
            array (
                'id' => 792,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.70',
                'variacao' => '-0.42',
                'id_ativo' => 792,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            292 =>
            array (
                'id' => 793,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.06',
                'variacao' => '1.50',
                'id_ativo' => 793,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            293 =>
            array (
                'id' => 794,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.00',
                'variacao' => '3.23',
                'id_ativo' => 794,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            294 =>
            array (
                'id' => 795,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.49',
                'variacao' => '1.61',
                'id_ativo' => 795,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            295 =>
            array (
                'id' => 796,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.90',
                'variacao' => '-0.20',
                'id_ativo' => 796,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            296 =>
            array (
                'id' => 797,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.67',
                'variacao' => '-0.26',
                'id_ativo' => 797,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            297 =>
            array (
                'id' => 798,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.56',
                'variacao' => '-0.64',
                'id_ativo' => 798,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            298 =>
            array (
                'id' => 799,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.50',
                'variacao' => '-1.99',
                'id_ativo' => 799,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            299 =>
            array (
                'id' => 800,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.25',
                'variacao' => '1.91',
                'id_ativo' => 800,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            300 =>
            array (
                'id' => 801,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.90',
                'variacao' => '0.77',
                'id_ativo' => 801,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            301 =>
            array (
                'id' => 802,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.60',
                'variacao' => '0.93',
                'id_ativo' => 802,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            302 =>
            array (
                'id' => 803,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.60',
                'variacao' => '0.81',
                'id_ativo' => 803,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            303 =>
            array (
                'id' => 804,
                'data' => '2024-01-27',
                'valor_fechamento' => '60.42',
                'variacao' => '-1.10',
                'id_ativo' => 804,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            304 =>
            array (
                'id' => 805,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.17',
                'variacao' => '-0.02',
                'id_ativo' => 805,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            305 =>
            array (
                'id' => 806,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.80',
                'variacao' => '-0.21',
                'id_ativo' => 806,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            306 =>
            array (
                'id' => 807,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.80',
                'variacao' => '-0.24',
                'id_ativo' => 807,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            307 =>
            array (
                'id' => 808,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.87',
                'variacao' => '-3.16',
                'id_ativo' => 808,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            308 =>
            array (
                'id' => 809,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.65',
                'variacao' => '0.11',
                'id_ativo' => 809,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            309 =>
            array (
                'id' => 810,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.98',
                'variacao' => '-0.02',
                'id_ativo' => 810,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            310 =>
            array (
                'id' => 811,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.68',
                'variacao' => '0.13',
                'id_ativo' => 811,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            311 =>
            array (
                'id' => 812,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.51',
                'variacao' => '-1.21',
                'id_ativo' => 812,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            312 =>
            array (
                'id' => 813,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.58',
                'variacao' => '0.00',
                'id_ativo' => 813,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            313 =>
            array (
                'id' => 814,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.41',
                'variacao' => '-2.76',
                'id_ativo' => 814,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            314 =>
            array (
                'id' => 815,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.28',
                'variacao' => '0.00',
                'id_ativo' => 815,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            315 =>
            array (
                'id' => 816,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.40',
                'variacao' => '-1.76',
                'id_ativo' => 816,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            316 =>
            array (
                'id' => 817,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.21',
                'variacao' => '-1.10',
                'id_ativo' => 817,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            317 =>
            array (
                'id' => 818,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.20',
                'variacao' => '0.00',
                'id_ativo' => 818,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            318 =>
            array (
                'id' => 819,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.76',
                'variacao' => '3.32',
                'id_ativo' => 819,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            319 =>
            array (
                'id' => 820,
                'data' => '2024-01-27',
                'valor_fechamento' => '158.25',
                'variacao' => '-0.19',
                'id_ativo' => 820,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            320 =>
            array (
                'id' => 821,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.20',
                'variacao' => '0.79',
                'id_ativo' => 821,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            321 =>
            array (
                'id' => 822,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.50',
                'variacao' => '1.42',
                'id_ativo' => 822,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            322 =>
            array (
                'id' => 823,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.32',
                'variacao' => '-0.32',
                'id_ativo' => 823,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            323 =>
            array (
                'id' => 824,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.11',
                'variacao' => '-1.04',
                'id_ativo' => 824,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            324 =>
            array (
                'id' => 825,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.05',
                'variacao' => '-0.02',
                'id_ativo' => 825,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            325 =>
            array (
                'id' => 826,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.39',
                'variacao' => '0.41',
                'id_ativo' => 826,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            326 =>
            array (
                'id' => 827,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.85',
                'variacao' => '0.10',
                'id_ativo' => 827,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            327 =>
            array (
                'id' => 828,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.48',
                'variacao' => '0.53',
                'id_ativo' => 828,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            328 =>
            array (
                'id' => 829,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.99',
                'variacao' => '0.37',
                'id_ativo' => 829,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            329 =>
            array (
                'id' => 830,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.03',
                'variacao' => '0.08',
                'id_ativo' => 830,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            330 =>
            array (
                'id' => 831,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.27',
                'variacao' => '-0.78',
                'id_ativo' => 831,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            331 =>
            array (
                'id' => 832,
                'data' => '2024-01-27',
                'valor_fechamento' => '80.00',
                'variacao' => '0.04',
                'id_ativo' => 832,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            332 =>
            array (
                'id' => 833,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.84',
                'variacao' => '-0.31',
                'id_ativo' => 833,
                'created_at' => '2024-01-27 08:55:09',
                'updated_at' => '2024-01-27 08:55:09',
            ),
            333 =>
            array (
                'id' => 834,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.35',
                'variacao' => '-1.65',
                'id_ativo' => 834,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            334 =>
            array (
                'id' => 835,
                'data' => '2024-01-27',
                'valor_fechamento' => '88.20',
                'variacao' => '0.36',
                'id_ativo' => 835,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            335 =>
            array (
                'id' => 836,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.28',
                'variacao' => '-0.13',
                'id_ativo' => 836,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            336 =>
            array (
                'id' => 837,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.82',
                'variacao' => '2.65',
                'id_ativo' => 837,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            337 =>
            array (
                'id' => 838,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.44',
                'variacao' => '0.14',
                'id_ativo' => 838,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            338 =>
            array (
                'id' => 839,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.50',
                'variacao' => '-22.91',
                'id_ativo' => 839,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            339 =>
            array (
                'id' => 840,
                'data' => '2024-01-27',
                'valor_fechamento' => '60.14',
                'variacao' => '-0.27',
                'id_ativo' => 840,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            340 =>
            array (
                'id' => 841,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.00',
                'variacao' => '0.15',
                'id_ativo' => 841,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            341 =>
            array (
                'id' => 842,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.66',
                'variacao' => '-0.32',
                'id_ativo' => 842,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            342 =>
            array (
                'id' => 843,
                'data' => '2024-01-27',
                'valor_fechamento' => '64.89',
                'variacao' => '-1.38',
                'id_ativo' => 843,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            343 =>
            array (
                'id' => 844,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.82',
                'variacao' => '0.56',
                'id_ativo' => 844,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            344 =>
            array (
                'id' => 845,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.00',
                'variacao' => '-0.99',
                'id_ativo' => 845,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            345 =>
            array (
                'id' => 846,
                'data' => '2024-01-27',
                'valor_fechamento' => '106.45',
                'variacao' => '0.19',
                'id_ativo' => 846,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            346 =>
            array (
                'id' => 847,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.50',
                'variacao' => '-3.48',
                'id_ativo' => 847,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            347 =>
            array (
                'id' => 848,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.06',
                'variacao' => '-0.48',
                'id_ativo' => 848,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            348 =>
            array (
                'id' => 849,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.98',
                'variacao' => '8.45',
                'id_ativo' => 849,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            349 =>
            array (
                'id' => 850,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.40',
                'variacao' => '0.96',
                'id_ativo' => 850,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            350 =>
            array (
                'id' => 851,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.59',
                'variacao' => '-1.64',
                'id_ativo' => 851,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            351 =>
            array (
                'id' => 852,
                'data' => '2024-01-27',
                'valor_fechamento' => '51.76',
                'variacao' => '-1.37',
                'id_ativo' => 852,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            352 =>
            array (
                'id' => 853,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.44',
                'variacao' => '8.74',
                'id_ativo' => 853,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            353 =>
            array (
                'id' => 854,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.71',
                'variacao' => '0.37',
                'id_ativo' => 854,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            354 =>
            array (
                'id' => 855,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.00',
                'variacao' => '1.03',
                'id_ativo' => 855,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            355 =>
            array (
                'id' => 856,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.33',
                'variacao' => '-2.33',
                'id_ativo' => 856,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            356 =>
            array (
                'id' => 857,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.10',
                'variacao' => '0.96',
                'id_ativo' => 857,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            357 =>
            array (
                'id' => 858,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.20',
                'variacao' => '-0.89',
                'id_ativo' => 858,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            358 =>
            array (
                'id' => 859,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.81',
                'variacao' => '-3.10',
                'id_ativo' => 859,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            359 =>
            array (
                'id' => 860,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.30',
                'variacao' => '1.53',
                'id_ativo' => 860,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            360 =>
            array (
                'id' => 861,
                'data' => '2024-01-27',
                'valor_fechamento' => '118.00',
                'variacao' => '0.51',
                'id_ativo' => 861,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            361 =>
            array (
                'id' => 862,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.16',
                'variacao' => '0.37',
                'id_ativo' => 862,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            362 =>
            array (
                'id' => 863,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.73',
                'variacao' => '0.58',
                'id_ativo' => 863,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            363 =>
            array (
                'id' => 864,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.02',
                'variacao' => '-0.12',
                'id_ativo' => 864,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            364 =>
            array (
                'id' => 865,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.79',
                'variacao' => '3.47',
                'id_ativo' => 865,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            365 =>
            array (
                'id' => 866,
                'data' => '2024-01-27',
                'valor_fechamento' => '125.47',
                'variacao' => '0.67',
                'id_ativo' => 866,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            366 =>
            array (
                'id' => 867,
                'data' => '2024-01-27',
                'valor_fechamento' => '80.80',
                'variacao' => '0.86',
                'id_ativo' => 867,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            367 =>
            array (
                'id' => 868,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.09',
                'variacao' => '1.25',
                'id_ativo' => 868,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            368 =>
            array (
                'id' => 869,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.09',
                'variacao' => '-0.48',
                'id_ativo' => 869,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            369 =>
            array (
                'id' => 870,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.19',
                'variacao' => '0.89',
                'id_ativo' => 870,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            370 =>
            array (
                'id' => 871,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.83',
                'variacao' => '-2.55',
                'id_ativo' => 871,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            371 =>
            array (
                'id' => 872,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.84',
                'variacao' => '0.26',
                'id_ativo' => 872,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            372 =>
            array (
                'id' => 873,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.86',
                'variacao' => '0.54',
                'id_ativo' => 873,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            373 =>
            array (
                'id' => 874,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.96',
                'variacao' => '-2.19',
                'id_ativo' => 874,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            374 =>
            array (
                'id' => 875,
                'data' => '2024-01-27',
                'valor_fechamento' => '100.00',
                'variacao' => '-1.91',
                'id_ativo' => 875,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            375 =>
            array (
                'id' => 876,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.20',
                'variacao' => '0.12',
                'id_ativo' => 876,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            376 =>
            array (
                'id' => 877,
                'data' => '2024-01-27',
                'valor_fechamento' => '158.65',
                'variacao' => '0.03',
                'id_ativo' => 877,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            377 =>
            array (
                'id' => 878,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.79',
                'variacao' => '-0.01',
                'id_ativo' => 878,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            378 =>
            array (
                'id' => 879,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.75',
                'variacao' => '-0.39',
                'id_ativo' => 879,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            379 =>
            array (
                'id' => 880,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.18',
                'variacao' => '-1.36',
                'id_ativo' => 880,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            380 =>
            array (
                'id' => 881,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.25',
                'variacao' => '0.29',
                'id_ativo' => 881,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            381 =>
            array (
                'id' => 882,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.54',
                'variacao' => '0.64',
                'id_ativo' => 882,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            382 =>
            array (
                'id' => 883,
                'data' => '2024-01-27',
                'valor_fechamento' => '285.20',
                'variacao' => '-0.55',
                'id_ativo' => 883,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            383 =>
            array (
                'id' => 884,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.99',
                'variacao' => '0.00',
                'id_ativo' => 884,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            384 =>
            array (
                'id' => 885,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.07',
                'variacao' => '0.60',
                'id_ativo' => 885,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            385 =>
            array (
                'id' => 886,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.15',
                'variacao' => '0.22',
                'id_ativo' => 886,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            386 =>
            array (
                'id' => 887,
                'data' => '2024-01-27',
                'valor_fechamento' => '44.65',
                'variacao' => '2.06',
                'id_ativo' => 887,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            387 =>
            array (
                'id' => 888,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.99',
                'variacao' => '-0.92',
                'id_ativo' => 888,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            388 =>
            array (
                'id' => 889,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.90',
                'variacao' => '-1.17',
                'id_ativo' => 889,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            389 =>
            array (
                'id' => 890,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.91',
                'variacao' => '-4.02',
                'id_ativo' => 890,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            390 =>
            array (
                'id' => 891,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.02',
                'variacao' => '0.95',
                'id_ativo' => 891,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            391 =>
            array (
                'id' => 892,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.59',
                'variacao' => '-1.89',
                'id_ativo' => 892,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            392 =>
            array (
                'id' => 893,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.02',
                'variacao' => '1.01',
                'id_ativo' => 893,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            393 =>
            array (
                'id' => 894,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.30',
                'variacao' => '-0.82',
                'id_ativo' => 894,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            394 =>
            array (
                'id' => 895,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.33',
                'variacao' => '-1.71',
                'id_ativo' => 895,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            395 =>
            array (
                'id' => 896,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.31',
                'variacao' => '0.61',
                'id_ativo' => 896,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            396 =>
            array (
                'id' => 897,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.75',
                'variacao' => '1.93',
                'id_ativo' => 897,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            397 =>
            array (
                'id' => 898,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.90',
                'variacao' => '7.25',
                'id_ativo' => 898,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            398 =>
            array (
                'id' => 899,
                'data' => '2024-01-27',
                'valor_fechamento' => '76.99',
                'variacao' => '-0.05',
                'id_ativo' => 899,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            399 =>
            array (
                'id' => 900,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.22',
                'variacao' => '-1.09',
                'id_ativo' => 900,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            400 =>
            array (
                'id' => 901,
                'data' => '2024-01-27',
                'valor_fechamento' => '152.50',
                'variacao' => '2.07',
                'id_ativo' => 901,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            401 =>
            array (
                'id' => 902,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.75',
                'variacao' => '-1.02',
                'id_ativo' => 902,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            402 =>
            array (
                'id' => 903,
                'data' => '2024-01-27',
                'valor_fechamento' => '64.50',
                'variacao' => '0.66',
                'id_ativo' => 903,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            403 =>
            array (
                'id' => 904,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.88',
                'variacao' => '0.35',
                'id_ativo' => 904,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            404 =>
            array (
                'id' => 905,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.19',
                'variacao' => '-3.71',
                'id_ativo' => 905,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            405 =>
            array (
                'id' => 906,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.55',
                'variacao' => '-0.21',
                'id_ativo' => 906,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            406 =>
            array (
                'id' => 907,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.25',
                'variacao' => '0.49',
                'id_ativo' => 907,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            407 =>
            array (
                'id' => 908,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.04',
                'variacao' => '10.14',
                'id_ativo' => 908,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            408 =>
            array (
                'id' => 909,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.06',
                'variacao' => '0.50',
                'id_ativo' => 909,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            409 =>
            array (
                'id' => 910,
                'data' => '2024-01-27',
                'valor_fechamento' => '131.29',
                'variacao' => '0.14',
                'id_ativo' => 910,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            410 =>
            array (
                'id' => 911,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.85',
                'variacao' => '-3.66',
                'id_ativo' => 911,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            411 =>
            array (
                'id' => 912,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.98',
                'variacao' => '8.20',
                'id_ativo' => 912,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            412 =>
            array (
                'id' => 913,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.02',
                'variacao' => '-3.76',
                'id_ativo' => 913,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            413 =>
            array (
                'id' => 914,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.21',
                'variacao' => '-1.29',
                'id_ativo' => 914,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            414 =>
            array (
                'id' => 915,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.90',
                'variacao' => '2.59',
                'id_ativo' => 915,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            415 =>
            array (
                'id' => 916,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.38',
                'variacao' => '6.05',
                'id_ativo' => 916,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            416 =>
            array (
                'id' => 917,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.31',
                'variacao' => '-0.10',
                'id_ativo' => 917,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            417 =>
            array (
                'id' => 918,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.79',
                'variacao' => '-0.83',
                'id_ativo' => 918,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            418 =>
            array (
                'id' => 919,
                'data' => '2024-01-27',
                'valor_fechamento' => '58.89',
                'variacao' => '1.12',
                'id_ativo' => 919,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            419 =>
            array (
                'id' => 920,
                'data' => '2024-01-27',
                'valor_fechamento' => '116.60',
                'variacao' => '0.56',
                'id_ativo' => 920,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            420 =>
            array (
                'id' => 921,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.68',
                'variacao' => '-2.91',
                'id_ativo' => 921,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            421 =>
            array (
                'id' => 922,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.39',
                'variacao' => '-0.54',
                'id_ativo' => 922,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            422 =>
            array (
                'id' => 923,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.09',
                'variacao' => '0.00',
                'id_ativo' => 923,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            423 =>
            array (
                'id' => 924,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.90',
                'variacao' => '-0.22',
                'id_ativo' => 924,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            424 =>
            array (
                'id' => 925,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.82',
                'variacao' => '-0.01',
                'id_ativo' => 925,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            425 =>
            array (
                'id' => 926,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.00',
                'variacao' => '-0.93',
                'id_ativo' => 926,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            426 =>
            array (
                'id' => 927,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.89',
                'variacao' => '0.52',
                'id_ativo' => 927,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            427 =>
            array (
                'id' => 928,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.68',
                'variacao' => '-3.16',
                'id_ativo' => 928,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            428 =>
            array (
                'id' => 929,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.95',
                'variacao' => '2.14',
                'id_ativo' => 929,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            429 =>
            array (
                'id' => 930,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.91',
                'variacao' => '-1.29',
                'id_ativo' => 930,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            430 =>
            array (
                'id' => 931,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.80',
                'variacao' => '0.10',
                'id_ativo' => 931,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            431 =>
            array (
                'id' => 932,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.10',
                'variacao' => '-1.79',
                'id_ativo' => 932,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            432 =>
            array (
                'id' => 933,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.19',
                'variacao' => '0.31',
                'id_ativo' => 933,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            433 =>
            array (
                'id' => 934,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.29',
                'variacao' => '-0.69',
                'id_ativo' => 934,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            434 =>
            array (
                'id' => 935,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.32',
                'variacao' => '3.48',
                'id_ativo' => 935,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            435 =>
            array (
                'id' => 936,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.48',
                'variacao' => '-0.04',
                'id_ativo' => 936,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            436 =>
            array (
                'id' => 937,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.50',
                'variacao' => '-0.28',
                'id_ativo' => 937,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            437 =>
            array (
                'id' => 938,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.16',
                'variacao' => '-0.87',
                'id_ativo' => 938,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            438 =>
            array (
                'id' => 939,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.42',
                'variacao' => '-0.29',
                'id_ativo' => 939,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            439 =>
            array (
                'id' => 940,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.17',
                'variacao' => '-3.31',
                'id_ativo' => 940,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            440 =>
            array (
                'id' => 941,
                'data' => '2024-01-27',
                'valor_fechamento' => '76.53',
                'variacao' => '-0.08',
                'id_ativo' => 941,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            441 =>
            array (
                'id' => 942,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.00',
                'variacao' => '1.78',
                'id_ativo' => 942,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            442 =>
            array (
                'id' => 943,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.45',
                'variacao' => '1.90',
                'id_ativo' => 943,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            443 =>
            array (
                'id' => 944,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.16',
                'variacao' => '0.87',
                'id_ativo' => 944,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            444 =>
            array (
                'id' => 945,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.98',
                'variacao' => '-1.19',
                'id_ativo' => 945,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            445 =>
            array (
                'id' => 946,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.02',
                'variacao' => '0.65',
                'id_ativo' => 946,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            446 =>
            array (
                'id' => 947,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.60',
                'variacao' => '0.10',
                'id_ativo' => 947,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            447 =>
            array (
                'id' => 948,
                'data' => '2024-01-27',
                'valor_fechamento' => '78.25',
                'variacao' => '-0.29',
                'id_ativo' => 948,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            448 =>
            array (
                'id' => 949,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.36',
                'variacao' => '17.99',
                'id_ativo' => 949,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            449 =>
            array (
                'id' => 950,
                'data' => '2024-01-27',
                'valor_fechamento' => '44.15',
                'variacao' => '-1.23',
                'id_ativo' => 950,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            450 =>
            array (
                'id' => 951,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.84',
                'variacao' => '0.16',
                'id_ativo' => 951,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            451 =>
            array (
                'id' => 952,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.00',
                'variacao' => '-0.50',
                'id_ativo' => 952,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            452 =>
            array (
                'id' => 953,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.32',
                'variacao' => '0.25',
                'id_ativo' => 953,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            453 =>
            array (
                'id' => 954,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.53',
                'variacao' => '0.00',
                'id_ativo' => 954,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            454 =>
            array (
                'id' => 955,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.91',
                'variacao' => '-3.71',
                'id_ativo' => 955,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            455 =>
            array (
                'id' => 956,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.63',
                'variacao' => '1.11',
                'id_ativo' => 956,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            456 =>
            array (
                'id' => 957,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.29',
                'variacao' => '3.87',
                'id_ativo' => 957,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            457 =>
            array (
                'id' => 958,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.40',
                'variacao' => '1.05',
                'id_ativo' => 958,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            458 =>
            array (
                'id' => 959,
                'data' => '2024-01-27',
                'valor_fechamento' => '80.50',
                'variacao' => '-0.43',
                'id_ativo' => 959,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            459 =>
            array (
                'id' => 960,
                'data' => '2024-01-27',
                'valor_fechamento' => '113.20',
                'variacao' => '0.00',
                'id_ativo' => 960,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            460 =>
            array (
                'id' => 961,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.00',
                'variacao' => '0.23',
                'id_ativo' => 961,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            461 =>
            array (
                'id' => 962,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.30',
                'variacao' => '0.70',
                'id_ativo' => 962,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            462 =>
            array (
                'id' => 963,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.77',
                'variacao' => '-0.31',
                'id_ativo' => 963,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            463 =>
            array (
                'id' => 964,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.99',
                'variacao' => '0.50',
                'id_ativo' => 964,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            464 =>
            array (
                'id' => 965,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.60',
                'variacao' => '1.28',
                'id_ativo' => 965,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            465 =>
            array (
                'id' => 966,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.29',
                'variacao' => '-0.77',
                'id_ativo' => 966,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            466 =>
            array (
                'id' => 967,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.01',
                'variacao' => '-0.98',
                'id_ativo' => 967,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            467 =>
            array (
                'id' => 968,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.99',
                'variacao' => '6.09',
                'id_ativo' => 968,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            468 =>
            array (
                'id' => 969,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.94',
                'variacao' => '47.59',
                'id_ativo' => 969,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            469 =>
            array (
                'id' => 970,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.90',
                'variacao' => '-1.17',
                'id_ativo' => 970,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            470 =>
            array (
                'id' => 971,
                'data' => '2024-01-27',
                'valor_fechamento' => '73.91',
                'variacao' => '-2.42',
                'id_ativo' => 971,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            471 =>
            array (
                'id' => 972,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.27',
                'variacao' => '0.05',
                'id_ativo' => 972,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            472 =>
            array (
                'id' => 973,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.09',
                'variacao' => '1.06',
                'id_ativo' => 973,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            473 =>
            array (
                'id' => 974,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.40',
                'variacao' => '2.10',
                'id_ativo' => 974,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            474 =>
            array (
                'id' => 975,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.35',
                'variacao' => '0.60',
                'id_ativo' => 975,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            475 =>
            array (
                'id' => 976,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.00',
                'variacao' => '-0.99',
                'id_ativo' => 976,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            476 =>
            array (
                'id' => 977,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.45',
                'variacao' => '1.14',
                'id_ativo' => 977,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            477 =>
            array (
                'id' => 978,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.68',
                'variacao' => '1.30',
                'id_ativo' => 978,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            478 =>
            array (
                'id' => 979,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.20',
                'variacao' => '-0.22',
                'id_ativo' => 979,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            479 =>
            array (
                'id' => 980,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.00',
                'variacao' => '2.11',
                'id_ativo' => 980,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            480 =>
            array (
                'id' => 981,
                'data' => '2024-01-27',
                'valor_fechamento' => '81.56',
                'variacao' => '0.09',
                'id_ativo' => 981,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            481 =>
            array (
                'id' => 982,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.95',
                'variacao' => '0.03',
                'id_ativo' => 982,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            482 =>
            array (
                'id' => 983,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.88',
                'variacao' => '-1.61',
                'id_ativo' => 983,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            483 =>
            array (
                'id' => 984,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.88',
                'variacao' => '0.70',
                'id_ativo' => 984,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            484 =>
            array (
                'id' => 985,
                'data' => '2024-01-27',
                'valor_fechamento' => '89.15',
                'variacao' => '-0.21',
                'id_ativo' => 985,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            485 =>
            array (
                'id' => 986,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.08',
                'variacao' => '-1.70',
                'id_ativo' => 986,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            486 =>
            array (
                'id' => 987,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.80',
                'variacao' => '0.42',
                'id_ativo' => 987,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            487 =>
            array (
                'id' => 988,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.39',
                'variacao' => '-2.50',
                'id_ativo' => 988,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            488 =>
            array (
                'id' => 989,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.00',
                'variacao' => '0.00',
                'id_ativo' => 989,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            489 =>
            array (
                'id' => 990,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.58',
                'variacao' => '-0.08',
                'id_ativo' => 990,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            490 =>
            array (
                'id' => 991,
                'data' => '2024-01-27',
                'valor_fechamento' => '53.70',
                'variacao' => '-0.37',
                'id_ativo' => 991,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            491 =>
            array (
                'id' => 992,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.19',
                'variacao' => '-0.89',
                'id_ativo' => 992,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            492 =>
            array (
                'id' => 993,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.70',
                'variacao' => '-0.40',
                'id_ativo' => 993,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            493 =>
            array (
                'id' => 994,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.94',
                'variacao' => '-0.01',
                'id_ativo' => 994,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            494 =>
            array (
                'id' => 995,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.50',
                'variacao' => '-3.13',
                'id_ativo' => 995,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            495 =>
            array (
                'id' => 996,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.34',
                'variacao' => '1.19',
                'id_ativo' => 996,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            496 =>
            array (
                'id' => 997,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.02',
                'variacao' => '-0.30',
                'id_ativo' => 997,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            497 =>
            array (
                'id' => 998,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.02',
                'variacao' => '-0.29',
                'id_ativo' => 998,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            498 =>
            array (
                'id' => 999,
                'data' => '2024-01-27',
                'valor_fechamento' => '120.83',
                'variacao' => '0.07',
                'id_ativo' => 999,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            499 =>
            array (
                'id' => 1000,
                'data' => '2024-01-27',
                'valor_fechamento' => '84.10',
                'variacao' => '0.59',
                'id_ativo' => 1000,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
        ));
        DB::table('historico_ativos')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'data' => '2024-01-27',
                'valor_fechamento' => '72.98',
                'variacao' => '0.54',
                'id_ativo' => 1001,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            1 =>
            array (
                'id' => 1002,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.09',
                'variacao' => '0.48',
                'id_ativo' => 1002,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            2 =>
            array (
                'id' => 1003,
                'data' => '2024-01-27',
                'valor_fechamento' => '66.06',
                'variacao' => '-0.18',
                'id_ativo' => 1003,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            3 =>
            array (
                'id' => 1004,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.74',
                'variacao' => '2.78',
                'id_ativo' => 1004,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            4 =>
            array (
                'id' => 1005,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.50',
                'variacao' => '-0.28',
                'id_ativo' => 1005,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            5 =>
            array (
                'id' => 1006,
                'data' => '2024-01-27',
                'valor_fechamento' => '139.31',
                'variacao' => '-0.49',
                'id_ativo' => 1006,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            6 =>
            array (
                'id' => 1007,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.29',
                'variacao' => '-1.90',
                'id_ativo' => 1007,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            7 =>
            array (
                'id' => 1008,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.26',
                'variacao' => '-2.16',
                'id_ativo' => 1008,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            8 =>
            array (
                'id' => 1009,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.00',
                'variacao' => '-0.43',
                'id_ativo' => 1009,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            9 =>
            array (
                'id' => 1010,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.60',
                'variacao' => '3.40',
                'id_ativo' => 1010,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            10 =>
            array (
                'id' => 1011,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.64',
                'variacao' => '-0.08',
                'id_ativo' => 1011,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            11 =>
            array (
                'id' => 1012,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.20',
                'variacao' => '-0.37',
                'id_ativo' => 1012,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            12 =>
            array (
                'id' => 1013,
                'data' => '2024-01-27',
                'valor_fechamento' => '225.09',
                'variacao' => '0.91',
                'id_ativo' => 1013,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            13 =>
            array (
                'id' => 1014,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.38',
                'variacao' => '-0.24',
                'id_ativo' => 1014,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            14 =>
            array (
                'id' => 1015,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.98',
                'variacao' => '-1.64',
                'id_ativo' => 1015,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            15 =>
            array (
                'id' => 1016,
                'data' => '2024-01-27',
                'valor_fechamento' => '75.60',
                'variacao' => '0.53',
                'id_ativo' => 1016,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            16 =>
            array (
                'id' => 1017,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.20',
                'variacao' => '-0.10',
                'id_ativo' => 1017,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            17 =>
            array (
                'id' => 1018,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.30',
                'variacao' => '-0.23',
                'id_ativo' => 1018,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            18 =>
            array (
                'id' => 1019,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.54',
                'variacao' => '2.67',
                'id_ativo' => 1019,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            19 =>
            array (
                'id' => 1020,
                'data' => '2024-01-27',
                'valor_fechamento' => '148.54',
                'variacao' => '0.02',
                'id_ativo' => 1020,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            20 =>
            array (
                'id' => 1021,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.15',
                'variacao' => '-2.12',
                'id_ativo' => 1021,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            21 =>
            array (
                'id' => 1022,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.35',
                'variacao' => '2.08',
                'id_ativo' => 1022,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            22 =>
            array (
                'id' => 1023,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.31',
                'variacao' => '0.86',
                'id_ativo' => 1023,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            23 =>
            array (
                'id' => 1024,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.06',
                'variacao' => '-1.12',
                'id_ativo' => 1024,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            24 =>
            array (
                'id' => 1025,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.54',
                'variacao' => '-0.20',
                'id_ativo' => 1025,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            25 =>
            array (
                'id' => 1026,
                'data' => '2024-01-27',
                'valor_fechamento' => '184.54',
                'variacao' => '2.04',
                'id_ativo' => 1026,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            26 =>
            array (
                'id' => 1027,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.86',
                'variacao' => '-3.27',
                'id_ativo' => 1027,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            27 =>
            array (
                'id' => 1028,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.90',
                'variacao' => '-7.32',
                'id_ativo' => 1028,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            28 =>
            array (
                'id' => 1029,
                'data' => '2024-01-27',
                'valor_fechamento' => '347.20',
                'variacao' => '0.91',
                'id_ativo' => 1029,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            29 =>
            array (
                'id' => 1030,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.71',
                'variacao' => '-1.67',
                'id_ativo' => 1030,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            30 =>
            array (
                'id' => 1031,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.09',
                'variacao' => '0.00',
                'id_ativo' => 1031,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            31 =>
            array (
                'id' => 1032,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.98',
                'variacao' => '-0.14',
                'id_ativo' => 1032,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            32 =>
            array (
                'id' => 1033,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.70',
                'variacao' => '-2.44',
                'id_ativo' => 1033,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            33 =>
            array (
                'id' => 1034,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.80',
                'variacao' => '1.60',
                'id_ativo' => 1034,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            34 =>
            array (
                'id' => 1035,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.79',
                'variacao' => '-0.77',
                'id_ativo' => 1035,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            35 =>
            array (
                'id' => 1036,
                'data' => '2024-01-27',
                'valor_fechamento' => '75.02',
                'variacao' => '-1.16',
                'id_ativo' => 1036,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            36 =>
            array (
                'id' => 1037,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.37',
                'variacao' => '0.84',
                'id_ativo' => 1037,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            37 =>
            array (
                'id' => 1038,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.98',
                'variacao' => '-0.19',
                'id_ativo' => 1038,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            38 =>
            array (
                'id' => 1039,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.75',
                'variacao' => '0.46',
                'id_ativo' => 1039,
                'created_at' => '2024-01-27 08:55:10',
                'updated_at' => '2024-01-27 08:55:10',
            ),
            39 =>
            array (
                'id' => 1040,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.50',
                'variacao' => '1.49',
                'id_ativo' => 1040,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            40 =>
            array (
                'id' => 1041,
                'data' => '2024-01-27',
                'valor_fechamento' => '107.54',
                'variacao' => '0.83',
                'id_ativo' => 1041,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            41 =>
            array (
                'id' => 1042,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.68',
                'variacao' => '0.70',
                'id_ativo' => 1042,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            42 =>
            array (
                'id' => 1043,
                'data' => '2024-01-27',
                'valor_fechamento' => '130.06',
                'variacao' => '1.10',
                'id_ativo' => 1043,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            43 =>
            array (
                'id' => 1044,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.17',
                'variacao' => '2.20',
                'id_ativo' => 1044,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            44 =>
            array (
                'id' => 1045,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.58',
                'variacao' => '-0.79',
                'id_ativo' => 1045,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            45 =>
            array (
                'id' => 1046,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.90',
                'variacao' => '0.00',
                'id_ativo' => 1046,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            46 =>
            array (
                'id' => 1047,
                'data' => '2024-01-27',
                'valor_fechamento' => '168.22',
                'variacao' => '-0.37',
                'id_ativo' => 1047,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            47 =>
            array (
                'id' => 1048,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.99',
                'variacao' => '-0.02',
                'id_ativo' => 1048,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            48 =>
            array (
                'id' => 1049,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.00',
                'variacao' => '0.28',
                'id_ativo' => 1049,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            49 =>
            array (
                'id' => 1050,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.01',
                'variacao' => '4.16',
                'id_ativo' => 1050,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            50 =>
            array (
                'id' => 1051,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.03',
                'variacao' => '1.41',
                'id_ativo' => 1051,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            51 =>
            array (
                'id' => 1052,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.12',
                'variacao' => '1.54',
                'id_ativo' => 1052,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            52 =>
            array (
                'id' => 1053,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.69',
                'variacao' => '2.31',
                'id_ativo' => 1053,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            53 =>
            array (
                'id' => 1054,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.53',
                'variacao' => '-0.60',
                'id_ativo' => 1054,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            54 =>
            array (
                'id' => 1055,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.08',
                'variacao' => '0.55',
                'id_ativo' => 1055,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            55 =>
            array (
                'id' => 1056,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.53',
                'variacao' => '1.12',
                'id_ativo' => 1056,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            56 =>
            array (
                'id' => 1057,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.52',
                'variacao' => '1.12',
                'id_ativo' => 1057,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            57 =>
            array (
                'id' => 1058,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.13',
                'variacao' => '-2.49',
                'id_ativo' => 1058,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            58 =>
            array (
                'id' => 1059,
                'data' => '2024-01-27',
                'valor_fechamento' => '111.94',
                'variacao' => '0.08',
                'id_ativo' => 1059,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            59 =>
            array (
                'id' => 1060,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.46',
                'variacao' => '0.57',
                'id_ativo' => 1060,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            60 =>
            array (
                'id' => 1061,
                'data' => '2024-01-27',
                'valor_fechamento' => '55.82',
                'variacao' => '0.76',
                'id_ativo' => 1061,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            61 =>
            array (
                'id' => 1062,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.04',
                'variacao' => '-1.07',
                'id_ativo' => 1062,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            62 =>
            array (
                'id' => 1063,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.30',
                'variacao' => '-0.13',
                'id_ativo' => 1063,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            63 =>
            array (
                'id' => 1064,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.63',
                'variacao' => '-0.39',
                'id_ativo' => 1064,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            64 =>
            array (
                'id' => 1065,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.01',
                'variacao' => '1.01',
                'id_ativo' => 1065,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            65 =>
            array (
                'id' => 1066,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.53',
                'variacao' => '1.44',
                'id_ativo' => 1066,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            66 =>
            array (
                'id' => 1067,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.27',
                'variacao' => '0.44',
                'id_ativo' => 1067,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            67 =>
            array (
                'id' => 1068,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.10',
                'variacao' => '-2.99',
                'id_ativo' => 1068,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            68 =>
            array (
                'id' => 1069,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.17',
                'variacao' => '-2.50',
                'id_ativo' => 1069,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            69 =>
            array (
                'id' => 1070,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.04',
                'variacao' => '0.12',
                'id_ativo' => 1070,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            70 =>
            array (
                'id' => 1071,
                'data' => '2024-01-27',
                'valor_fechamento' => '127.02',
                'variacao' => '0.28',
                'id_ativo' => 1071,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            71 =>
            array (
                'id' => 1072,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.50',
                'variacao' => '-0.55',
                'id_ativo' => 1072,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            72 =>
            array (
                'id' => 1073,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.15',
                'variacao' => '0.48',
                'id_ativo' => 1073,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            73 =>
            array (
                'id' => 1074,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.42',
                'variacao' => '1.59',
                'id_ativo' => 1074,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            74 =>
            array (
                'id' => 1075,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.72',
                'variacao' => '-3.55',
                'id_ativo' => 1075,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            75 =>
            array (
                'id' => 1076,
                'data' => '2024-01-27',
                'valor_fechamento' => '99.33',
                'variacao' => '0.62',
                'id_ativo' => 1076,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            76 =>
            array (
                'id' => 1077,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.56',
                'variacao' => '-0.90',
                'id_ativo' => 1077,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            77 =>
            array (
                'id' => 1078,
                'data' => '2024-01-27',
                'valor_fechamento' => '101.00',
                'variacao' => '0.01',
                'id_ativo' => 1078,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            78 =>
            array (
                'id' => 1079,
                'data' => '2024-01-27',
                'valor_fechamento' => '119.20',
                'variacao' => '0.08',
                'id_ativo' => 1079,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            79 =>
            array (
                'id' => 1080,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.99',
                'variacao' => '0.17',
                'id_ativo' => 1080,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            80 =>
            array (
                'id' => 1081,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.54',
                'variacao' => '-0.81',
                'id_ativo' => 1081,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            81 =>
            array (
                'id' => 1082,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.84',
                'variacao' => '-1.20',
                'id_ativo' => 1082,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            82 =>
            array (
                'id' => 1083,
                'data' => '2024-01-27',
                'valor_fechamento' => '120.68',
                'variacao' => '0.06',
                'id_ativo' => 1083,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            83 =>
            array (
                'id' => 1084,
                'data' => '2024-01-27',
                'valor_fechamento' => '181.99',
                'variacao' => '1.68',
                'id_ativo' => 1084,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            84 =>
            array (
                'id' => 1085,
                'data' => '2024-01-27',
                'valor_fechamento' => '161.92',
                'variacao' => '0.57',
                'id_ativo' => 1085,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            85 =>
            array (
                'id' => 1086,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.60',
                'variacao' => '0.30',
                'id_ativo' => 1086,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            86 =>
            array (
                'id' => 1087,
                'data' => '2024-01-27',
                'valor_fechamento' => '254.00',
                'variacao' => '-0.39',
                'id_ativo' => 1087,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            87 =>
            array (
                'id' => 1088,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.00',
                'variacao' => '13.96',
                'id_ativo' => 1088,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            88 =>
            array (
                'id' => 1089,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.50',
                'variacao' => '-6.25',
                'id_ativo' => 1089,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            89 =>
            array (
                'id' => 1090,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.17',
                'variacao' => '0.43',
                'id_ativo' => 1090,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            90 =>
            array (
                'id' => 1091,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.55',
                'variacao' => '0.00',
                'id_ativo' => 1091,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            91 =>
            array (
                'id' => 1092,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.22',
                'variacao' => '-1.75',
                'id_ativo' => 1092,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            92 =>
            array (
                'id' => 1093,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.98',
                'variacao' => '0.23',
                'id_ativo' => 1093,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            93 =>
            array (
                'id' => 1094,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.49',
                'variacao' => '3.05',
                'id_ativo' => 1094,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            94 =>
            array (
                'id' => 1095,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.45',
                'variacao' => '0.17',
                'id_ativo' => 1095,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            95 =>
            array (
                'id' => 1096,
                'data' => '2024-01-27',
                'valor_fechamento' => '106.10',
                'variacao' => '-2.57',
                'id_ativo' => 1096,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            96 =>
            array (
                'id' => 1097,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.85',
                'variacao' => '4.68',
                'id_ativo' => 1097,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            97 =>
            array (
                'id' => 1098,
                'data' => '2024-01-27',
                'valor_fechamento' => '115.00',
                'variacao' => '0.93',
                'id_ativo' => 1098,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            98 =>
            array (
                'id' => 1099,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.08',
                'variacao' => '1.99',
                'id_ativo' => 1099,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            99 =>
            array (
                'id' => 1100,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.41',
                'variacao' => '0.37',
                'id_ativo' => 1100,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            100 =>
            array (
                'id' => 1101,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.56',
                'variacao' => '-1.07',
                'id_ativo' => 1101,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            101 =>
            array (
                'id' => 1102,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.25',
                'variacao' => '0.71',
                'id_ativo' => 1102,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            102 =>
            array (
                'id' => 1103,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.13',
                'variacao' => '-1.58',
                'id_ativo' => 1103,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            103 =>
            array (
                'id' => 1104,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.67',
                'variacao' => '0.11',
                'id_ativo' => 1104,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            104 =>
            array (
                'id' => 1105,
                'data' => '2024-01-27',
                'valor_fechamento' => '106.55',
                'variacao' => '-0.08',
                'id_ativo' => 1105,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            105 =>
            array (
                'id' => 1106,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.80',
                'variacao' => '1.07',
                'id_ativo' => 1106,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            106 =>
            array (
                'id' => 1107,
                'data' => '2024-01-27',
                'valor_fechamento' => '66.15',
                'variacao' => '1.93',
                'id_ativo' => 1107,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            107 =>
            array (
                'id' => 1108,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.30',
                'variacao' => '0.00',
                'id_ativo' => 1108,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            108 =>
            array (
                'id' => 1109,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.68',
                'variacao' => '0.00',
                'id_ativo' => 1109,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            109 =>
            array (
                'id' => 1110,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.50',
                'variacao' => '-1.10',
                'id_ativo' => 1110,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            110 =>
            array (
                'id' => 1111,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.16',
                'variacao' => '-1.50',
                'id_ativo' => 1111,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            111 =>
            array (
                'id' => 1112,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.53',
                'variacao' => '0.67',
                'id_ativo' => 1112,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            112 =>
            array (
                'id' => 1113,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.00',
                'variacao' => '7.69',
                'id_ativo' => 1113,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            113 =>
            array (
                'id' => 1114,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.06',
                'variacao' => '2.42',
                'id_ativo' => 1114,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            114 =>
            array (
                'id' => 1115,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.95',
                'variacao' => '0.77',
                'id_ativo' => 1115,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            115 =>
            array (
                'id' => 1116,
                'data' => '2024-01-27',
                'valor_fechamento' => '743.35',
                'variacao' => '-7.66',
                'id_ativo' => 1116,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            116 =>
            array (
                'id' => 1117,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.19',
                'variacao' => '-0.38',
                'id_ativo' => 1117,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            117 =>
            array (
                'id' => 1118,
                'data' => '2024-01-27',
                'valor_fechamento' => '205.38',
                'variacao' => '-0.40',
                'id_ativo' => 1118,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            118 =>
            array (
                'id' => 1119,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.00',
                'variacao' => '0.72',
                'id_ativo' => 1119,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            119 =>
            array (
                'id' => 1120,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.45',
                'variacao' => '1.14',
                'id_ativo' => 1120,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            120 =>
            array (
                'id' => 1121,
                'data' => '2024-01-27',
                'valor_fechamento' => '95.50',
                'variacao' => '0.53',
                'id_ativo' => 1121,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            121 =>
            array (
                'id' => 1122,
                'data' => '2024-01-27',
                'valor_fechamento' => '522.71',
                'variacao' => '0.03',
                'id_ativo' => 1122,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            122 =>
            array (
                'id' => 1123,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.39',
                'variacao' => '0.41',
                'id_ativo' => 1123,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            123 =>
            array (
                'id' => 1124,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.10',
                'variacao' => '-0.90',
                'id_ativo' => 1124,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            124 =>
            array (
                'id' => 1125,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.84',
                'variacao' => '-1.06',
                'id_ativo' => 1125,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            125 =>
            array (
                'id' => 1126,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.19',
                'variacao' => '1.00',
                'id_ativo' => 1126,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            126 =>
            array (
                'id' => 1127,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.19',
                'variacao' => '0.78',
                'id_ativo' => 1127,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            127 =>
            array (
                'id' => 1128,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.00',
                'variacao' => '11.86',
                'id_ativo' => 1128,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            128 =>
            array (
                'id' => 1129,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.98',
                'variacao' => '0.00',
                'id_ativo' => 1129,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            129 =>
            array (
                'id' => 1130,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.85',
                'variacao' => '0.28',
                'id_ativo' => 1130,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            130 =>
            array (
                'id' => 1131,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.28',
                'variacao' => '-2.15',
                'id_ativo' => 1131,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            131 =>
            array (
                'id' => 1132,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.20',
                'variacao' => '0.48',
                'id_ativo' => 1132,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            132 =>
            array (
                'id' => 1133,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.37',
                'variacao' => '-1.12',
                'id_ativo' => 1133,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            133 =>
            array (
                'id' => 1134,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.75',
                'variacao' => '0.32',
                'id_ativo' => 1134,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            134 =>
            array (
                'id' => 1135,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.78',
                'variacao' => '15.44',
                'id_ativo' => 1135,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            135 =>
            array (
                'id' => 1136,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.43',
                'variacao' => '1.05',
                'id_ativo' => 1136,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            136 =>
            array (
                'id' => 1137,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.96',
                'variacao' => '1.64',
                'id_ativo' => 1137,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            137 =>
            array (
                'id' => 1138,
                'data' => '2024-01-27',
                'valor_fechamento' => '174.00',
                'variacao' => '-8.42',
                'id_ativo' => 1138,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            138 =>
            array (
                'id' => 1139,
                'data' => '2024-01-27',
                'valor_fechamento' => '81.80',
                'variacao' => '-0.55',
                'id_ativo' => 1139,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            139 =>
            array (
                'id' => 1140,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.16',
                'variacao' => '0.93',
                'id_ativo' => 1140,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            140 =>
            array (
                'id' => 1141,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.36',
                'variacao' => '-0.95',
                'id_ativo' => 1141,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            141 =>
            array (
                'id' => 1142,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.00',
                'variacao' => '0.00',
                'id_ativo' => 1142,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            142 =>
            array (
                'id' => 1143,
                'data' => '2024-01-27',
                'valor_fechamento' => '233.91',
                'variacao' => '2.66',
                'id_ativo' => 1143,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            143 =>
            array (
                'id' => 1144,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.04',
                'variacao' => '-1.58',
                'id_ativo' => 1144,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            144 =>
            array (
                'id' => 1145,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.68',
                'variacao' => '-1.75',
                'id_ativo' => 1145,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            145 =>
            array (
                'id' => 1146,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.20',
                'variacao' => '-2.29',
                'id_ativo' => 1146,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            146 =>
            array (
                'id' => 1147,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.20',
                'variacao' => '0.22',
                'id_ativo' => 1147,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            147 =>
            array (
                'id' => 1148,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.09',
                'variacao' => '-0.25',
                'id_ativo' => 1148,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            148 =>
            array (
                'id' => 1149,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.25',
                'variacao' => '-1.19',
                'id_ativo' => 1149,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            149 =>
            array (
                'id' => 1150,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.62',
                'variacao' => '-1.48',
                'id_ativo' => 1150,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            150 =>
            array (
                'id' => 1151,
                'data' => '2024-01-27',
                'valor_fechamento' => '194.97',
                'variacao' => '1.13',
                'id_ativo' => 1151,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            151 =>
            array (
                'id' => 1152,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.13',
                'variacao' => '-0.02',
                'id_ativo' => 1152,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            152 =>
            array (
                'id' => 1153,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.59',
                'variacao' => '0.37',
                'id_ativo' => 1153,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            153 =>
            array (
                'id' => 1154,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.50',
                'variacao' => '-0.40',
                'id_ativo' => 1154,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            154 =>
            array (
                'id' => 1155,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.77',
                'variacao' => '0.05',
                'id_ativo' => 1155,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            155 =>
            array (
                'id' => 1156,
                'data' => '2024-01-27',
                'valor_fechamento' => '150.95',
                'variacao' => '-0.15',
                'id_ativo' => 1156,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            156 =>
            array (
                'id' => 1157,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.00',
                'variacao' => '0.00',
                'id_ativo' => 1157,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            157 =>
            array (
                'id' => 1158,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.43',
                'variacao' => '-0.11',
                'id_ativo' => 1158,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            158 =>
            array (
                'id' => 1159,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.30',
                'variacao' => '-1.61',
                'id_ativo' => 1159,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            159 =>
            array (
                'id' => 1160,
                'data' => '2024-01-27',
                'valor_fechamento' => '58.26',
                'variacao' => '2.21',
                'id_ativo' => 1160,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            160 =>
            array (
                'id' => 1161,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.00',
                'variacao' => '0.00',
                'id_ativo' => 1161,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            161 =>
            array (
                'id' => 1162,
                'data' => '2024-01-27',
                'valor_fechamento' => '1094.99',
                'variacao' => '-1.09',
                'id_ativo' => 1162,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            162 =>
            array (
                'id' => 1163,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.16',
                'variacao' => '0.51',
                'id_ativo' => 1163,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            163 =>
            array (
                'id' => 1164,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.75',
                'variacao' => '-0.10',
                'id_ativo' => 1164,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            164 =>
            array (
                'id' => 1165,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.26',
                'variacao' => '-1.56',
                'id_ativo' => 1165,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            165 =>
            array (
                'id' => 1166,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.59',
                'variacao' => '-0.12',
                'id_ativo' => 1166,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            166 =>
            array (
                'id' => 1167,
                'data' => '2024-01-27',
                'valor_fechamento' => '55.92',
                'variacao' => '0.00',
                'id_ativo' => 1167,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            167 =>
            array (
                'id' => 1168,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.34',
                'variacao' => '0.48',
                'id_ativo' => 1168,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            168 =>
            array (
                'id' => 1169,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.89',
                'variacao' => '-1.61',
                'id_ativo' => 1169,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            169 =>
            array (
                'id' => 1170,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.45',
                'variacao' => '0.58',
                'id_ativo' => 1170,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            170 =>
            array (
                'id' => 1171,
                'data' => '2024-01-27',
                'valor_fechamento' => '200.05',
                'variacao' => '-0.77',
                'id_ativo' => 1171,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            171 =>
            array (
                'id' => 1172,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.00',
                'variacao' => '0.00',
                'id_ativo' => 1172,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            172 =>
            array (
                'id' => 1173,
                'data' => '2024-01-27',
                'valor_fechamento' => '195.27',
                'variacao' => '0.64',
                'id_ativo' => 1173,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            173 =>
            array (
                'id' => 1174,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.58',
                'variacao' => '-1.59',
                'id_ativo' => 1174,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            174 =>
            array (
                'id' => 1175,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.52',
                'variacao' => '-0.38',
                'id_ativo' => 1175,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            175 =>
            array (
                'id' => 1176,
                'data' => '2024-01-27',
                'valor_fechamento' => '985.47',
                'variacao' => '0.00',
                'id_ativo' => 1176,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            176 =>
            array (
                'id' => 1177,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.92',
                'variacao' => '0.24',
                'id_ativo' => 1177,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            177 =>
            array (
                'id' => 1178,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.80',
                'variacao' => '-24.28',
                'id_ativo' => 1178,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            178 =>
            array (
                'id' => 1179,
                'data' => '2024-01-27',
                'valor_fechamento' => '83.30',
                'variacao' => '0.95',
                'id_ativo' => 1179,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            179 =>
            array (
                'id' => 1180,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.06',
                'variacao' => '1.82',
                'id_ativo' => 1180,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            180 =>
            array (
                'id' => 1181,
                'data' => '2024-01-27',
                'valor_fechamento' => '115.44',
                'variacao' => '-3.90',
                'id_ativo' => 1181,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            181 =>
            array (
                'id' => 1182,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.28',
                'variacao' => '-0.29',
                'id_ativo' => 1182,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            182 =>
            array (
                'id' => 1183,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.89',
                'variacao' => '2.86',
                'id_ativo' => 1183,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            183 =>
            array (
                'id' => 1184,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.52',
                'variacao' => '2.38',
                'id_ativo' => 1184,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            184 =>
            array (
                'id' => 1185,
                'data' => '2024-01-27',
                'valor_fechamento' => '81.49',
                'variacao' => '0.63',
                'id_ativo' => 1185,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            185 =>
            array (
                'id' => 1186,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.36',
                'variacao' => '2.30',
                'id_ativo' => 1186,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            186 =>
            array (
                'id' => 1187,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.13',
                'variacao' => '-14.38',
                'id_ativo' => 1187,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            187 =>
            array (
                'id' => 1188,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.84',
                'variacao' => '-1.63',
                'id_ativo' => 1188,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            188 =>
            array (
                'id' => 1189,
                'data' => '2024-01-27',
                'valor_fechamento' => '40.46',
                'variacao' => '-0.34',
                'id_ativo' => 1189,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            189 =>
            array (
                'id' => 1190,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.20',
                'variacao' => '-0.18',
                'id_ativo' => 1190,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            190 =>
            array (
                'id' => 1191,
                'data' => '2024-01-27',
                'valor_fechamento' => '63.99',
                'variacao' => '3.56',
                'id_ativo' => 1191,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            191 =>
            array (
                'id' => 1192,
                'data' => '2024-01-27',
                'valor_fechamento' => '318.25',
                'variacao' => '1.03',
                'id_ativo' => 1192,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            192 =>
            array (
                'id' => 1193,
                'data' => '2024-01-27',
                'valor_fechamento' => '58.70',
                'variacao' => '2.12',
                'id_ativo' => 1193,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            193 =>
            array (
                'id' => 1194,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.82',
                'variacao' => '0.96',
                'id_ativo' => 1194,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            194 =>
            array (
                'id' => 1195,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.02',
                'variacao' => '-0.72',
                'id_ativo' => 1195,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            195 =>
            array (
                'id' => 1196,
                'data' => '2024-01-27',
                'valor_fechamento' => '255.75',
                'variacao' => '1.20',
                'id_ativo' => 1196,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            196 =>
            array (
                'id' => 1197,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.84',
                'variacao' => '9.71',
                'id_ativo' => 1197,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            197 =>
            array (
                'id' => 1198,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.60',
                'variacao' => '0.41',
                'id_ativo' => 1198,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            198 =>
            array (
                'id' => 1199,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.98',
                'variacao' => '-0.38',
                'id_ativo' => 1199,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            199 =>
            array (
                'id' => 1200,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.04',
                'variacao' => '-0.97',
                'id_ativo' => 1200,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            200 =>
            array (
                'id' => 1201,
                'data' => '2024-01-27',
                'valor_fechamento' => '143.48',
                'variacao' => '0.61',
                'id_ativo' => 1201,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            201 =>
            array (
                'id' => 1202,
                'data' => '2024-01-27',
                'valor_fechamento' => '342.50',
                'variacao' => '0.15',
                'id_ativo' => 1202,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            202 =>
            array (
                'id' => 1203,
                'data' => '2024-01-27',
                'valor_fechamento' => '305.06',
                'variacao' => '0.02',
                'id_ativo' => 1203,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            203 =>
            array (
                'id' => 1204,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.80',
                'variacao' => '-0.31',
                'id_ativo' => 1204,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            204 =>
            array (
                'id' => 1205,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.16',
                'variacao' => '-2.28',
                'id_ativo' => 1205,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            205 =>
            array (
                'id' => 1206,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.79',
                'variacao' => '-0.26',
                'id_ativo' => 1206,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            206 =>
            array (
                'id' => 1207,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.98',
                'variacao' => '1.06',
                'id_ativo' => 1207,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            207 =>
            array (
                'id' => 1208,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.00',
                'variacao' => '-0.37',
                'id_ativo' => 1208,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            208 =>
            array (
                'id' => 1209,
                'data' => '2024-01-27',
                'valor_fechamento' => '879.70',
                'variacao' => '-0.03',
                'id_ativo' => 1209,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            209 =>
            array (
                'id' => 1210,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.24',
                'variacao' => '-0.64',
                'id_ativo' => 1210,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            210 =>
            array (
                'id' => 1211,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.60',
                'variacao' => '-0.08',
                'id_ativo' => 1211,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            211 =>
            array (
                'id' => 1212,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.26',
                'variacao' => '1.61',
                'id_ativo' => 1212,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            212 =>
            array (
                'id' => 1213,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.51',
                'variacao' => '1.66',
                'id_ativo' => 1213,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            213 =>
            array (
                'id' => 1214,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.49',
                'variacao' => '-0.04',
                'id_ativo' => 1214,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            214 =>
            array (
                'id' => 1215,
                'data' => '2024-01-27',
                'valor_fechamento' => '53.80',
                'variacao' => '0.15',
                'id_ativo' => 1215,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            215 =>
            array (
                'id' => 1216,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.67',
                'variacao' => '-1.45',
                'id_ativo' => 1216,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            216 =>
            array (
                'id' => 1217,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.50',
                'variacao' => '-0.63',
                'id_ativo' => 1217,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            217 =>
            array (
                'id' => 1218,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.54',
                'variacao' => '-2.40',
                'id_ativo' => 1218,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            218 =>
            array (
                'id' => 1219,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.19',
                'variacao' => '0.18',
                'id_ativo' => 1219,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            219 =>
            array (
                'id' => 1220,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.30',
                'variacao' => '0.98',
                'id_ativo' => 1220,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            220 =>
            array (
                'id' => 1221,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.02',
                'variacao' => '0.91',
                'id_ativo' => 1221,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            221 =>
            array (
                'id' => 1222,
                'data' => '2024-01-27',
                'valor_fechamento' => '82.91',
                'variacao' => '0.06',
                'id_ativo' => 1222,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            222 =>
            array (
                'id' => 1223,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.85',
                'variacao' => '0.11',
                'id_ativo' => 1223,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            223 =>
            array (
                'id' => 1224,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.28',
                'variacao' => '0.97',
                'id_ativo' => 1224,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            224 =>
            array (
                'id' => 1225,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.41',
                'variacao' => '-1.36',
                'id_ativo' => 1225,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            225 =>
            array (
                'id' => 1226,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.16',
                'variacao' => '-2.29',
                'id_ativo' => 1226,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            226 =>
            array (
                'id' => 1227,
                'data' => '2024-01-27',
                'valor_fechamento' => '217.14',
                'variacao' => '-4.25',
                'id_ativo' => 1227,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            227 =>
            array (
                'id' => 1228,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.50',
                'variacao' => '-2.78',
                'id_ativo' => 1228,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            228 =>
            array (
                'id' => 1229,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.33',
                'variacao' => '0.00',
                'id_ativo' => 1229,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            229 =>
            array (
                'id' => 1230,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.46',
                'variacao' => '1.24',
                'id_ativo' => 1230,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            230 =>
            array (
                'id' => 1231,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.59',
                'variacao' => '-0.73',
                'id_ativo' => 1231,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            231 =>
            array (
                'id' => 1232,
                'data' => '2024-01-27',
                'valor_fechamento' => '144.40',
                'variacao' => '2.22',
                'id_ativo' => 1232,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            232 =>
            array (
                'id' => 1233,
                'data' => '2024-01-27',
                'valor_fechamento' => '274.59',
                'variacao' => '-0.53',
                'id_ativo' => 1233,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            233 =>
            array (
                'id' => 1234,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.47',
                'variacao' => '1.76',
                'id_ativo' => 1234,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            234 =>
            array (
                'id' => 1235,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.30',
                'variacao' => '-0.03',
                'id_ativo' => 1235,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            235 =>
            array (
                'id' => 1236,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.05',
                'variacao' => '-2.29',
                'id_ativo' => 1236,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            236 =>
            array (
                'id' => 1237,
                'data' => '2024-01-27',
                'valor_fechamento' => '135.30',
                'variacao' => '-0.56',
                'id_ativo' => 1237,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            237 =>
            array (
                'id' => 1238,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.94',
                'variacao' => '0.71',
                'id_ativo' => 1238,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            238 =>
            array (
                'id' => 1239,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.94',
                'variacao' => '0.50',
                'id_ativo' => 1239,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            239 =>
            array (
                'id' => 1240,
                'data' => '2024-01-27',
                'valor_fechamento' => '60.45',
                'variacao' => '-0.10',
                'id_ativo' => 1240,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            240 =>
            array (
                'id' => 1241,
                'data' => '2024-01-27',
                'valor_fechamento' => '63.32',
                'variacao' => '-0.36',
                'id_ativo' => 1241,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            241 =>
            array (
                'id' => 1242,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.97',
                'variacao' => '-0.02',
                'id_ativo' => 1242,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            242 =>
            array (
                'id' => 1243,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.75',
                'variacao' => '1.06',
                'id_ativo' => 1243,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            243 =>
            array (
                'id' => 1244,
                'data' => '2024-01-27',
                'valor_fechamento' => '72.17',
                'variacao' => '-1.12',
                'id_ativo' => 1244,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            244 =>
            array (
                'id' => 1245,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.16',
                'variacao' => '0.73',
                'id_ativo' => 1245,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            245 =>
            array (
                'id' => 1246,
                'data' => '2024-01-27',
                'valor_fechamento' => '53.97',
                'variacao' => '-2.23',
                'id_ativo' => 1246,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            246 =>
            array (
                'id' => 1247,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.67',
                'variacao' => '-1.20',
                'id_ativo' => 1247,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            247 =>
            array (
                'id' => 1248,
                'data' => '2024-01-27',
                'valor_fechamento' => '124.49',
                'variacao' => '-0.37',
                'id_ativo' => 1248,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            248 =>
            array (
                'id' => 1249,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.79',
                'variacao' => '0.82',
                'id_ativo' => 1249,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            249 =>
            array (
                'id' => 1250,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.97',
                'variacao' => '-0.14',
                'id_ativo' => 1250,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            250 =>
            array (
                'id' => 1251,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.10',
                'variacao' => '0.88',
                'id_ativo' => 1251,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            251 =>
            array (
                'id' => 1252,
                'data' => '2024-01-27',
                'valor_fechamento' => '197.60',
                'variacao' => '-0.95',
                'id_ativo' => 1252,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            252 =>
            array (
                'id' => 1253,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.51',
                'variacao' => '0.00',
                'id_ativo' => 1253,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            253 =>
            array (
                'id' => 1254,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.48',
                'variacao' => '0.33',
                'id_ativo' => 1254,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            254 =>
            array (
                'id' => 1255,
                'data' => '2024-01-27',
                'valor_fechamento' => '114.89',
                'variacao' => '-0.72',
                'id_ativo' => 1255,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            255 =>
            array (
                'id' => 1256,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.95',
                'variacao' => '-0.30',
                'id_ativo' => 1256,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            256 =>
            array (
                'id' => 1257,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.45',
                'variacao' => '-2.17',
                'id_ativo' => 1257,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            257 =>
            array (
                'id' => 1258,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.00',
                'variacao' => '-5.13',
                'id_ativo' => 1258,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            258 =>
            array (
                'id' => 1259,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.39',
                'variacao' => '-0.42',
                'id_ativo' => 1259,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            259 =>
            array (
                'id' => 1260,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.60',
                'variacao' => '0.00',
                'id_ativo' => 1260,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            260 =>
            array (
                'id' => 1261,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.71',
                'variacao' => '1.06',
                'id_ativo' => 1261,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            261 =>
            array (
                'id' => 1262,
                'data' => '2024-01-27',
                'valor_fechamento' => '253.82',
                'variacao' => '-0.45',
                'id_ativo' => 1262,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            262 =>
            array (
                'id' => 1263,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.52',
                'variacao' => '2.22',
                'id_ativo' => 1263,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            263 =>
            array (
                'id' => 1264,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.10',
                'variacao' => '-0.94',
                'id_ativo' => 1264,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            264 =>
            array (
                'id' => 1265,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.30',
                'variacao' => '-1.52',
                'id_ativo' => 1265,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            265 =>
            array (
                'id' => 1266,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.02',
                'variacao' => '0.55',
                'id_ativo' => 1266,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            266 =>
            array (
                'id' => 1267,
                'data' => '2024-01-27',
                'valor_fechamento' => '76.39',
                'variacao' => '0.00',
                'id_ativo' => 1267,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            267 =>
            array (
                'id' => 1268,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.60',
                'variacao' => '0.45',
                'id_ativo' => 1268,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            268 =>
            array (
                'id' => 1269,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.07',
                'variacao' => '1.66',
                'id_ativo' => 1269,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            269 =>
            array (
                'id' => 1270,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.80',
                'variacao' => '-4.45',
                'id_ativo' => 1270,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            270 =>
            array (
                'id' => 1271,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.10',
                'variacao' => '0.37',
                'id_ativo' => 1271,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            271 =>
            array (
                'id' => 1272,
                'data' => '2024-01-27',
                'valor_fechamento' => '60.80',
                'variacao' => '-1.04',
                'id_ativo' => 1272,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            272 =>
            array (
                'id' => 1273,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.89',
                'variacao' => '3.10',
                'id_ativo' => 1273,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            273 =>
            array (
                'id' => 1274,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.13',
                'variacao' => '1.19',
                'id_ativo' => 1274,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            274 =>
            array (
                'id' => 1275,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.98',
                'variacao' => '2.09',
                'id_ativo' => 1275,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            275 =>
            array (
                'id' => 1276,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.18',
                'variacao' => '0.78',
                'id_ativo' => 1276,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            276 =>
            array (
                'id' => 1277,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.18',
                'variacao' => '0.69',
                'id_ativo' => 1277,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            277 =>
            array (
                'id' => 1278,
                'data' => '2024-01-27',
                'valor_fechamento' => '527.88',
                'variacao' => '-0.50',
                'id_ativo' => 1278,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            278 =>
            array (
                'id' => 1279,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.98',
                'variacao' => '1.27',
                'id_ativo' => 1279,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            279 =>
            array (
                'id' => 1280,
                'data' => '2024-01-27',
                'valor_fechamento' => '113.71',
                'variacao' => '0.26',
                'id_ativo' => 1280,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            280 =>
            array (
                'id' => 1281,
                'data' => '2024-01-27',
                'valor_fechamento' => '65.00',
                'variacao' => '0.03',
                'id_ativo' => 1281,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            281 =>
            array (
                'id' => 1282,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.68',
                'variacao' => '0.37',
                'id_ativo' => 1282,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            282 =>
            array (
                'id' => 1283,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.10',
                'variacao' => '6.55',
                'id_ativo' => 1283,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            283 =>
            array (
                'id' => 1284,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.20',
                'variacao' => '-0.19',
                'id_ativo' => 1284,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            284 =>
            array (
                'id' => 1285,
                'data' => '2024-01-27',
                'valor_fechamento' => '192.47',
                'variacao' => '0.50',
                'id_ativo' => 1285,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            285 =>
            array (
                'id' => 1286,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.16',
                'variacao' => '6.11',
                'id_ativo' => 1286,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            286 =>
            array (
                'id' => 1287,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.22',
                'variacao' => '-1.77',
                'id_ativo' => 1287,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            287 =>
            array (
                'id' => 1288,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.89',
                'variacao' => '2.59',
                'id_ativo' => 1288,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            288 =>
            array (
                'id' => 1289,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.81',
                'variacao' => '0.72',
                'id_ativo' => 1289,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            289 =>
            array (
                'id' => 1290,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.05',
                'variacao' => '0.63',
                'id_ativo' => 1290,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            290 =>
            array (
                'id' => 1291,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.74',
                'variacao' => '-0.10',
                'id_ativo' => 1291,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            291 =>
            array (
                'id' => 1292,
                'data' => '2024-01-27',
                'valor_fechamento' => '759.00',
                'variacao' => '-2.69',
                'id_ativo' => 1292,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            292 =>
            array (
                'id' => 1293,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.81',
                'variacao' => '-0.35',
                'id_ativo' => 1293,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            293 =>
            array (
                'id' => 1294,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.36',
                'variacao' => '3.01',
                'id_ativo' => 1294,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            294 =>
            array (
                'id' => 1295,
                'data' => '2024-01-27',
                'valor_fechamento' => '255.55',
                'variacao' => '8.74',
                'id_ativo' => 1295,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            295 =>
            array (
                'id' => 1296,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.47',
                'variacao' => '2.42',
                'id_ativo' => 1296,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            296 =>
            array (
                'id' => 1297,
                'data' => '2024-01-27',
                'valor_fechamento' => '120.92',
                'variacao' => '-0.25',
                'id_ativo' => 1297,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            297 =>
            array (
                'id' => 1298,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.80',
                'variacao' => '0.78',
                'id_ativo' => 1298,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            298 =>
            array (
                'id' => 1299,
                'data' => '2024-01-27',
                'valor_fechamento' => '121.13',
                'variacao' => '0.22',
                'id_ativo' => 1299,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            299 =>
            array (
                'id' => 1300,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.21',
                'variacao' => '-7.71',
                'id_ativo' => 1300,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            300 =>
            array (
                'id' => 1301,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.86',
                'variacao' => '0.77',
                'id_ativo' => 1301,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            301 =>
            array (
                'id' => 1302,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.50',
                'variacao' => '-0.42',
                'id_ativo' => 1302,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            302 =>
            array (
                'id' => 1303,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.73',
                'variacao' => '0.07',
                'id_ativo' => 1303,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            303 =>
            array (
                'id' => 1304,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.21',
                'variacao' => '4.76',
                'id_ativo' => 1304,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            304 =>
            array (
                'id' => 1305,
                'data' => '2024-01-27',
                'valor_fechamento' => '182.52',
                'variacao' => '-2.16',
                'id_ativo' => 1305,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            305 =>
            array (
                'id' => 1306,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.29',
                'variacao' => '4.66',
                'id_ativo' => 1306,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            306 =>
            array (
                'id' => 1307,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.70',
                'variacao' => '-3.29',
                'id_ativo' => 1307,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            307 =>
            array (
                'id' => 1308,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.85',
                'variacao' => '1.37',
                'id_ativo' => 1308,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            308 =>
            array (
                'id' => 1309,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.85',
                'variacao' => '2.05',
                'id_ativo' => 1309,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            309 =>
            array (
                'id' => 1310,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.95',
                'variacao' => '2.05',
                'id_ativo' => 1310,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            310 =>
            array (
                'id' => 1311,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.50',
                'variacao' => '0.00',
                'id_ativo' => 1311,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            311 =>
            array (
                'id' => 1312,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.80',
                'variacao' => '0.36',
                'id_ativo' => 1312,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            312 =>
            array (
                'id' => 1313,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.10',
                'variacao' => '-0.70',
                'id_ativo' => 1313,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            313 =>
            array (
                'id' => 1314,
                'data' => '2024-01-27',
                'valor_fechamento' => '200.20',
                'variacao' => '-2.44',
                'id_ativo' => 1314,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            314 =>
            array (
                'id' => 1315,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.48',
                'variacao' => '2.14',
                'id_ativo' => 1315,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            315 =>
            array (
                'id' => 1316,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.30',
                'variacao' => '3.81',
                'id_ativo' => 1316,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            316 =>
            array (
                'id' => 1317,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.58',
                'variacao' => '-2.64',
                'id_ativo' => 1317,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            317 =>
            array (
                'id' => 1318,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.61',
                'variacao' => '-5.28',
                'id_ativo' => 1318,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            318 =>
            array (
                'id' => 1319,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.36',
                'variacao' => '0.34',
                'id_ativo' => 1319,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            319 =>
            array (
                'id' => 1320,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.48',
                'variacao' => '1.37',
                'id_ativo' => 1320,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            320 =>
            array (
                'id' => 1321,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.70',
                'variacao' => '-1.09',
                'id_ativo' => 1321,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            321 =>
            array (
                'id' => 1322,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.54',
                'variacao' => '-2.64',
                'id_ativo' => 1322,
                'created_at' => '2024-01-27 08:55:11',
                'updated_at' => '2024-01-27 08:55:11',
            ),
            322 =>
            array (
                'id' => 1323,
                'data' => '2024-01-27',
                'valor_fechamento' => '80.97',
                'variacao' => '2.12',
                'id_ativo' => 1323,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            323 =>
            array (
                'id' => 1324,
                'data' => '2024-01-27',
                'valor_fechamento' => '118.20',
                'variacao' => '-0.20',
                'id_ativo' => 1324,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            324 =>
            array (
                'id' => 1325,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.00',
                'variacao' => '0.00',
                'id_ativo' => 1325,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            325 =>
            array (
                'id' => 1326,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.95',
                'variacao' => '-2.45',
                'id_ativo' => 1326,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            326 =>
            array (
                'id' => 1327,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.51',
                'variacao' => '-0.21',
                'id_ativo' => 1327,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            327 =>
            array (
                'id' => 1328,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.71',
                'variacao' => '-2.73',
                'id_ativo' => 1328,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            328 =>
            array (
                'id' => 1329,
                'data' => '2024-01-27',
                'valor_fechamento' => '325.71',
                'variacao' => '0.18',
                'id_ativo' => 1329,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            329 =>
            array (
                'id' => 1330,
                'data' => '2024-01-27',
                'valor_fechamento' => '115.01',
                'variacao' => '0.02',
                'id_ativo' => 1330,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            330 =>
            array (
                'id' => 1331,
                'data' => '2024-01-27',
                'valor_fechamento' => '42.00',
                'variacao' => '6.57',
                'id_ativo' => 1331,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            331 =>
            array (
                'id' => 1332,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.50',
                'variacao' => '1.65',
                'id_ativo' => 1332,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            332 =>
            array (
                'id' => 1333,
                'data' => '2024-01-27',
                'valor_fechamento' => '132.00',
                'variacao' => '-6.46',
                'id_ativo' => 1333,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            333 =>
            array (
                'id' => 1334,
                'data' => '2024-01-27',
                'valor_fechamento' => '111.12',
                'variacao' => '-2.53',
                'id_ativo' => 1334,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            334 =>
            array (
                'id' => 1335,
                'data' => '2024-01-27',
                'valor_fechamento' => '354.20',
                'variacao' => '2.00',
                'id_ativo' => 1335,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            335 =>
            array (
                'id' => 1336,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.00',
                'variacao' => '-1.20',
                'id_ativo' => 1336,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            336 =>
            array (
                'id' => 1337,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.95',
                'variacao' => '-1.59',
                'id_ativo' => 1337,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            337 =>
            array (
                'id' => 1338,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.50',
                'variacao' => '6.90',
                'id_ativo' => 1338,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            338 =>
            array (
                'id' => 1339,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.60',
                'variacao' => '-1.73',
                'id_ativo' => 1339,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            339 =>
            array (
                'id' => 1340,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.90',
                'variacao' => '2.86',
                'id_ativo' => 1340,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            340 =>
            array (
                'id' => 1341,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.09',
                'variacao' => '0.11',
                'id_ativo' => 1341,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            341 =>
            array (
                'id' => 1342,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.73',
                'variacao' => '-0.63',
                'id_ativo' => 1342,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            342 =>
            array (
                'id' => 1343,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.41',
                'variacao' => '0.08',
                'id_ativo' => 1343,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            343 =>
            array (
                'id' => 1344,
                'data' => '2024-01-27',
                'valor_fechamento' => '83.14',
                'variacao' => '0.00',
                'id_ativo' => 1344,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            344 =>
            array (
                'id' => 1345,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.99',
                'variacao' => '0.00',
                'id_ativo' => 1345,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            345 =>
            array (
                'id' => 1346,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.41',
                'variacao' => '0.34',
                'id_ativo' => 1346,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            346 =>
            array (
                'id' => 1347,
                'data' => '2024-01-27',
                'valor_fechamento' => '108.50',
                'variacao' => '0.51',
                'id_ativo' => 1347,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            347 =>
            array (
                'id' => 1348,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.48',
                'variacao' => '5.46',
                'id_ativo' => 1348,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            348 =>
            array (
                'id' => 1349,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.56',
                'variacao' => '1.78',
                'id_ativo' => 1349,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            349 =>
            array (
                'id' => 1350,
                'data' => '2024-01-27',
                'valor_fechamento' => '1949.98',
                'variacao' => '0.00',
                'id_ativo' => 1350,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            350 =>
            array (
                'id' => 1351,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.03',
                'variacao' => '0.76',
                'id_ativo' => 1351,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            351 =>
            array (
                'id' => 1352,
                'data' => '2024-01-27',
                'valor_fechamento' => '161.28',
                'variacao' => '-5.41',
                'id_ativo' => 1352,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            352 =>
            array (
                'id' => 1353,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.82',
                'variacao' => '2.31',
                'id_ativo' => 1353,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            353 =>
            array (
                'id' => 1354,
                'data' => '2024-01-27',
                'valor_fechamento' => '70.21',
                'variacao' => '-1.00',
                'id_ativo' => 1354,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            354 =>
            array (
                'id' => 1355,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.96',
                'variacao' => '-2.06',
                'id_ativo' => 1355,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            355 =>
            array (
                'id' => 1356,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.74',
                'variacao' => '-1.47',
                'id_ativo' => 1356,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            356 =>
            array (
                'id' => 1357,
                'data' => '2024-01-27',
                'valor_fechamento' => '90.00',
                'variacao' => '-0.01',
                'id_ativo' => 1357,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            357 =>
            array (
                'id' => 1358,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.16',
                'variacao' => '-0.09',
                'id_ativo' => 1358,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            358 =>
            array (
                'id' => 1359,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.70',
                'variacao' => '-2.65',
                'id_ativo' => 1359,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            359 =>
            array (
                'id' => 1360,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.80',
                'variacao' => '-1.34',
                'id_ativo' => 1360,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            360 =>
            array (
                'id' => 1361,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.95',
                'variacao' => '0.03',
                'id_ativo' => 1361,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            361 =>
            array (
                'id' => 1362,
                'data' => '2024-01-27',
                'valor_fechamento' => '120.01',
                'variacao' => '-13.04',
                'id_ativo' => 1362,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            362 =>
            array (
                'id' => 1363,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.21',
                'variacao' => '0.26',
                'id_ativo' => 1363,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            363 =>
            array (
                'id' => 1364,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.00',
                'variacao' => '0.50',
                'id_ativo' => 1364,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            364 =>
            array (
                'id' => 1365,
                'data' => '2024-01-27',
                'valor_fechamento' => '593.00',
                'variacao' => '0.09',
                'id_ativo' => 1365,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            365 =>
            array (
                'id' => 1366,
                'data' => '2024-01-27',
                'valor_fechamento' => '53.42',
                'variacao' => '0.17',
                'id_ativo' => 1366,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            366 =>
            array (
                'id' => 1367,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.00',
                'variacao' => '0.00',
                'id_ativo' => 1367,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            367 =>
            array (
                'id' => 1368,
                'data' => '2024-01-27',
                'valor_fechamento' => '98.00',
                'variacao' => '-0.30',
                'id_ativo' => 1368,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            368 =>
            array (
                'id' => 1369,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.79',
                'variacao' => '2.51',
                'id_ativo' => 1369,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            369 =>
            array (
                'id' => 1370,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.68',
                'variacao' => '-4.63',
                'id_ativo' => 1370,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            370 =>
            array (
                'id' => 1371,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.98',
                'variacao' => '0.82',
                'id_ativo' => 1371,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            371 =>
            array (
                'id' => 1372,
                'data' => '2024-01-27',
                'valor_fechamento' => '317.53',
                'variacao' => '-1.85',
                'id_ativo' => 1372,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            372 =>
            array (
                'id' => 1373,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.33',
                'variacao' => '1.53',
                'id_ativo' => 1373,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            373 =>
            array (
                'id' => 1374,
                'data' => '2024-01-27',
                'valor_fechamento' => '415.00',
                'variacao' => '1.22',
                'id_ativo' => 1374,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            374 =>
            array (
                'id' => 1375,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.25',
                'variacao' => '-0.67',
                'id_ativo' => 1375,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            375 =>
            array (
                'id' => 1376,
                'data' => '2024-01-27',
                'valor_fechamento' => '174.78',
                'variacao' => '-0.47',
                'id_ativo' => 1376,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            376 =>
            array (
                'id' => 1377,
                'data' => '2024-01-27',
                'valor_fechamento' => '311.69',
                'variacao' => '0.65',
                'id_ativo' => 1377,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            377 =>
            array (
                'id' => 1378,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.75',
                'variacao' => '0.32',
                'id_ativo' => 1378,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            378 =>
            array (
                'id' => 1379,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.97',
                'variacao' => '16.17',
                'id_ativo' => 1379,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            379 =>
            array (
                'id' => 1380,
                'data' => '2024-01-27',
                'valor_fechamento' => '55.92',
                'variacao' => '0.58',
                'id_ativo' => 1380,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            380 =>
            array (
                'id' => 1381,
                'data' => '2024-01-27',
                'valor_fechamento' => '262.08',
                'variacao' => '0.03',
                'id_ativo' => 1381,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            381 =>
            array (
                'id' => 1382,
                'data' => '2024-01-27',
                'valor_fechamento' => '330.66',
                'variacao' => '1.21',
                'id_ativo' => 1382,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            382 =>
            array (
                'id' => 1383,
                'data' => '2024-01-27',
                'valor_fechamento' => '330.00',
                'variacao' => '3.45',
                'id_ativo' => 1383,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            383 =>
            array (
                'id' => 1384,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.48',
                'variacao' => '8.05',
                'id_ativo' => 1384,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            384 =>
            array (
                'id' => 1385,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.00',
                'variacao' => '0.00',
                'id_ativo' => 1385,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            385 =>
            array (
                'id' => 1386,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.11',
                'variacao' => '-1.67',
                'id_ativo' => 1386,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            386 =>
            array (
                'id' => 1387,
                'data' => '2024-01-27',
                'valor_fechamento' => '13.53',
                'variacao' => '-0.07',
                'id_ativo' => 1387,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            387 =>
            array (
                'id' => 1388,
                'data' => '2024-01-27',
                'valor_fechamento' => '51.25',
                'variacao' => '-0.49',
                'id_ativo' => 1388,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            388 =>
            array (
                'id' => 1389,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.25',
                'variacao' => '0.81',
                'id_ativo' => 1389,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            389 =>
            array (
                'id' => 1390,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.10',
                'variacao' => '-0.71',
                'id_ativo' => 1390,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            390 =>
            array (
                'id' => 1391,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.76',
                'variacao' => '-1.22',
                'id_ativo' => 1391,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            391 =>
            array (
                'id' => 1392,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.80',
                'variacao' => '8.63',
                'id_ativo' => 1392,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            392 =>
            array (
                'id' => 1393,
                'data' => '2024-01-27',
                'valor_fechamento' => '1004.20',
                'variacao' => '1.54',
                'id_ativo' => 1393,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            393 =>
            array (
                'id' => 1394,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.75',
                'variacao' => '1.82',
                'id_ativo' => 1394,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            394 =>
            array (
                'id' => 1395,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.18',
                'variacao' => '0.57',
                'id_ativo' => 1395,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            395 =>
            array (
                'id' => 1396,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.00',
                'variacao' => '-15.38',
                'id_ativo' => 1396,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            396 =>
            array (
                'id' => 1397,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.70',
                'variacao' => '0.42',
                'id_ativo' => 1397,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            397 =>
            array (
                'id' => 1398,
                'data' => '2024-01-27',
                'valor_fechamento' => '651.98',
                'variacao' => '-1.31',
                'id_ativo' => 1398,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            398 =>
            array (
                'id' => 1399,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.75',
                'variacao' => '-3.05',
                'id_ativo' => 1399,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            399 =>
            array (
                'id' => 1400,
                'data' => '2024-01-27',
                'valor_fechamento' => '336.50',
                'variacao' => '-3.25',
                'id_ativo' => 1400,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            400 =>
            array (
                'id' => 1401,
                'data' => '2024-01-27',
                'valor_fechamento' => '374.68',
                'variacao' => '1.35',
                'id_ativo' => 1401,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            401 =>
            array (
                'id' => 1402,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.20',
                'variacao' => '3.79',
                'id_ativo' => 1402,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            402 =>
            array (
                'id' => 1403,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.70',
                'variacao' => '-0.09',
                'id_ativo' => 1403,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            403 =>
            array (
                'id' => 1404,
                'data' => '2024-01-27',
                'valor_fechamento' => '785.00',
                'variacao' => '-0.25',
                'id_ativo' => 1404,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            404 =>
            array (
                'id' => 1405,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.99',
                'variacao' => '-1.66',
                'id_ativo' => 1405,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            405 =>
            array (
                'id' => 1406,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.00',
                'variacao' => '-14.29',
                'id_ativo' => 1406,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            406 =>
            array (
                'id' => 1407,
                'data' => '2024-01-27',
                'valor_fechamento' => '363.71',
                'variacao' => '-1.01',
                'id_ativo' => 1407,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            407 =>
            array (
                'id' => 1408,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.99',
                'variacao' => '2.89',
                'id_ativo' => 1408,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            408 =>
            array (
                'id' => 1409,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.06',
                'variacao' => '-3.74',
                'id_ativo' => 1409,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            409 =>
            array (
                'id' => 1410,
                'data' => '2024-01-27',
                'valor_fechamento' => '119.99',
                'variacao' => '0.83',
                'id_ativo' => 1410,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            410 =>
            array (
                'id' => 1411,
                'data' => '2024-01-27',
                'valor_fechamento' => '238.05',
                'variacao' => '1.57',
                'id_ativo' => 1411,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            411 =>
            array (
                'id' => 1412,
                'data' => '2024-01-27',
                'valor_fechamento' => '153.00',
                'variacao' => '1.39',
                'id_ativo' => 1412,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            412 =>
            array (
                'id' => 1413,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.95',
                'variacao' => '-1.73',
                'id_ativo' => 1413,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            413 =>
            array (
                'id' => 1414,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.11',
                'variacao' => '0.40',
                'id_ativo' => 1414,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            414 =>
            array (
                'id' => 1415,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.60',
                'variacao' => '0.06',
                'id_ativo' => 1415,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            415 =>
            array (
                'id' => 1416,
                'data' => '2024-01-27',
                'valor_fechamento' => '678.00',
                'variacao' => '2.73',
                'id_ativo' => 1416,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            416 =>
            array (
                'id' => 1417,
                'data' => '2024-01-27',
                'valor_fechamento' => '918.00',
                'variacao' => '-2.96',
                'id_ativo' => 1417,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            417 =>
            array (
                'id' => 1418,
                'data' => '2024-01-27',
                'valor_fechamento' => '2113.00',
                'variacao' => '-0.31',
                'id_ativo' => 1418,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            418 =>
            array (
                'id' => 1419,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.71',
                'variacao' => '-0.20',
                'id_ativo' => 1419,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            419 =>
            array (
                'id' => 1420,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.20',
                'variacao' => '0.01',
                'id_ativo' => 1420,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            420 =>
            array (
                'id' => 1421,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.89',
                'variacao' => '-4.24',
                'id_ativo' => 1421,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            421 =>
            array (
                'id' => 1422,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.76',
                'variacao' => '2.27',
                'id_ativo' => 1422,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            422 =>
            array (
                'id' => 1423,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.44',
                'variacao' => '-2.55',
                'id_ativo' => 1423,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            423 =>
            array (
                'id' => 1424,
                'data' => '2024-01-27',
                'valor_fechamento' => '42.88',
                'variacao' => '-0.74',
                'id_ativo' => 1424,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            424 =>
            array (
                'id' => 1425,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.51',
                'variacao' => '0.80',
                'id_ativo' => 1425,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            425 =>
            array (
                'id' => 1426,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.36',
                'variacao' => '-0.86',
                'id_ativo' => 1426,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            426 =>
            array (
                'id' => 1427,
                'data' => '2024-01-27',
                'valor_fechamento' => '95.67',
                'variacao' => '-2.38',
                'id_ativo' => 1427,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            427 =>
            array (
                'id' => 1428,
                'data' => '2024-01-27',
                'valor_fechamento' => '136.20',
                'variacao' => '4.46',
                'id_ativo' => 1428,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            428 =>
            array (
                'id' => 1429,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.94',
                'variacao' => '0.54',
                'id_ativo' => 1429,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            429 =>
            array (
                'id' => 1430,
                'data' => '2024-01-27',
                'valor_fechamento' => '783.12',
                'variacao' => '5.36',
                'id_ativo' => 1430,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            430 =>
            array (
                'id' => 1431,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.80',
                'variacao' => '1.35',
                'id_ativo' => 1431,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            431 =>
            array (
                'id' => 1432,
                'data' => '2024-01-27',
                'valor_fechamento' => '44.88',
                'variacao' => '1.06',
                'id_ativo' => 1432,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            432 =>
            array (
                'id' => 1433,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.39',
                'variacao' => '-1.53',
                'id_ativo' => 1433,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            433 =>
            array (
                'id' => 1434,
                'data' => '2024-01-27',
                'valor_fechamento' => '118.04',
                'variacao' => '-2.45',
                'id_ativo' => 1434,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            434 =>
            array (
                'id' => 1435,
                'data' => '2024-01-27',
                'valor_fechamento' => '271.10',
                'variacao' => '0.00',
                'id_ativo' => 1435,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            435 =>
            array (
                'id' => 1436,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.55',
                'variacao' => '-0.38',
                'id_ativo' => 1436,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            436 =>
            array (
                'id' => 1437,
                'data' => '2024-01-27',
                'valor_fechamento' => '1000.00',
                'variacao' => '0.00',
                'id_ativo' => 1437,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            437 =>
            array (
                'id' => 1438,
                'data' => '2024-01-27',
                'valor_fechamento' => '479.60',
                'variacao' => '2.04',
                'id_ativo' => 1438,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            438 =>
            array (
                'id' => 1439,
                'data' => '2024-01-27',
                'valor_fechamento' => '173.21',
                'variacao' => '0.78',
                'id_ativo' => 1439,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            439 =>
            array (
                'id' => 1440,
                'data' => '2024-01-27',
                'valor_fechamento' => '800.00',
                'variacao' => '0.00',
                'id_ativo' => 1440,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            440 =>
            array (
                'id' => 1441,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.74',
                'variacao' => '0.09',
                'id_ativo' => 1441,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            441 =>
            array (
                'id' => 1442,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.30',
                'variacao' => '6.48',
                'id_ativo' => 1442,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            442 =>
            array (
                'id' => 1443,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.61',
                'variacao' => '-2.03',
                'id_ativo' => 1443,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            443 =>
            array (
                'id' => 1444,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.40',
                'variacao' => '1.82',
                'id_ativo' => 1444,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            444 =>
            array (
                'id' => 1445,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.50',
                'variacao' => '-2.46',
                'id_ativo' => 1445,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            445 =>
            array (
                'id' => 1446,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.42',
                'variacao' => '0.10',
                'id_ativo' => 1446,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            446 =>
            array (
                'id' => 1447,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.41',
                'variacao' => '2.50',
                'id_ativo' => 1447,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            447 =>
            array (
                'id' => 1448,
                'data' => '2024-01-27',
                'valor_fechamento' => '137.51',
                'variacao' => '0.01',
                'id_ativo' => 1448,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            448 =>
            array (
                'id' => 1449,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.70',
                'variacao' => '0.75',
                'id_ativo' => 1449,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            449 =>
            array (
                'id' => 1450,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.70',
                'variacao' => '0.00',
                'id_ativo' => 1450,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            450 =>
            array (
                'id' => 1451,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.27',
                'variacao' => '0.57',
                'id_ativo' => 1451,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            451 =>
            array (
                'id' => 1452,
                'data' => '2024-01-27',
                'valor_fechamento' => '468.96',
                'variacao' => '-1.89',
                'id_ativo' => 1452,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            452 =>
            array (
                'id' => 1453,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.66',
                'variacao' => '2.08',
                'id_ativo' => 1453,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            453 =>
            array (
                'id' => 1454,
                'data' => '2024-01-27',
                'valor_fechamento' => '187.91',
                'variacao' => '-0.10',
                'id_ativo' => 1454,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            454 =>
            array (
                'id' => 1455,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.02',
                'variacao' => '-0.24',
                'id_ativo' => 1455,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            455 =>
            array (
                'id' => 1456,
                'data' => '2024-01-27',
                'valor_fechamento' => '87.75',
                'variacao' => '-0.91',
                'id_ativo' => 1456,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            456 =>
            array (
                'id' => 1457,
                'data' => '2024-01-27',
                'valor_fechamento' => '30.69',
                'variacao' => '-0.10',
                'id_ativo' => 1457,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            457 =>
            array (
                'id' => 1458,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.22',
                'variacao' => '-0.14',
                'id_ativo' => 1458,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            458 =>
            array (
                'id' => 1459,
                'data' => '2024-01-27',
                'valor_fechamento' => '66.32',
                'variacao' => '0.90',
                'id_ativo' => 1459,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            459 =>
            array (
                'id' => 1460,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.72',
                'variacao' => '0.10',
                'id_ativo' => 1460,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            460 =>
            array (
                'id' => 1461,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.24',
                'variacao' => '-3.03',
                'id_ativo' => 1461,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            461 =>
            array (
                'id' => 1462,
                'data' => '2024-01-27',
                'valor_fechamento' => '62.79',
                'variacao' => '-0.54',
                'id_ativo' => 1462,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            462 =>
            array (
                'id' => 1463,
                'data' => '2024-01-27',
                'valor_fechamento' => '208.54',
                'variacao' => '-0.20',
                'id_ativo' => 1463,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            463 =>
            array (
                'id' => 1464,
                'data' => '2024-01-27',
                'valor_fechamento' => '36.00',
                'variacao' => '0.56',
                'id_ativo' => 1464,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            464 =>
            array (
                'id' => 1465,
                'data' => '2024-01-27',
                'valor_fechamento' => '94.78',
                'variacao' => '0.00',
                'id_ativo' => 1465,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            465 =>
            array (
                'id' => 1466,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.65',
                'variacao' => '0.95',
                'id_ativo' => 1466,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            466 =>
            array (
                'id' => 1467,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.12',
                'variacao' => '0.39',
                'id_ativo' => 1467,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            467 =>
            array (
                'id' => 1468,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.97',
                'variacao' => '0.04',
                'id_ativo' => 1468,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            468 =>
            array (
                'id' => 1469,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.97',
                'variacao' => '0.17',
                'id_ativo' => 1469,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            469 =>
            array (
                'id' => 1470,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.30',
                'variacao' => '4.03',
                'id_ativo' => 1470,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            470 =>
            array (
                'id' => 1471,
                'data' => '2024-01-27',
                'valor_fechamento' => '73.60',
                'variacao' => '-2.86',
                'id_ativo' => 1471,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            471 =>
            array (
                'id' => 1472,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.50',
                'variacao' => '-3.30',
                'id_ativo' => 1472,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            472 =>
            array (
                'id' => 1473,
                'data' => '2024-01-27',
                'valor_fechamento' => '478.50',
                'variacao' => '-2.55',
                'id_ativo' => 1473,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            473 =>
            array (
                'id' => 1474,
                'data' => '2024-01-27',
                'valor_fechamento' => '65.00',
                'variacao' => '0.00',
                'id_ativo' => 1474,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            474 =>
            array (
                'id' => 1475,
                'data' => '2024-01-27',
                'valor_fechamento' => '308.45',
                'variacao' => '-1.19',
                'id_ativo' => 1475,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            475 =>
            array (
                'id' => 1476,
                'data' => '2024-01-27',
                'valor_fechamento' => '446.00',
                'variacao' => '7.69',
                'id_ativo' => 1476,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            476 =>
            array (
                'id' => 1477,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.49',
                'variacao' => '13.20',
                'id_ativo' => 1477,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            477 =>
            array (
                'id' => 1478,
                'data' => '2024-01-27',
                'valor_fechamento' => '75.76',
                'variacao' => '1.81',
                'id_ativo' => 1478,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            478 =>
            array (
                'id' => 1479,
                'data' => '2024-01-27',
                'valor_fechamento' => '174.78',
                'variacao' => '1.80',
                'id_ativo' => 1479,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            479 =>
            array (
                'id' => 1480,
                'data' => '2024-01-27',
                'valor_fechamento' => '24.06',
                'variacao' => '8.97',
                'id_ativo' => 1480,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            480 =>
            array (
                'id' => 1481,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.91',
                'variacao' => '-0.34',
                'id_ativo' => 1481,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            481 =>
            array (
                'id' => 1482,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.85',
                'variacao' => '-0.78',
                'id_ativo' => 1482,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            482 =>
            array (
                'id' => 1483,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.71',
                'variacao' => '-0.12',
                'id_ativo' => 1483,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            483 =>
            array (
                'id' => 1484,
                'data' => '2024-01-27',
                'valor_fechamento' => '42.12',
                'variacao' => '3.03',
                'id_ativo' => 1484,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            484 =>
            array (
                'id' => 1485,
                'data' => '2024-01-27',
                'valor_fechamento' => '126.38',
                'variacao' => '0.60',
                'id_ativo' => 1485,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            485 =>
            array (
                'id' => 1486,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.16',
                'variacao' => '-2.88',
                'id_ativo' => 1486,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            486 =>
            array (
                'id' => 1487,
                'data' => '2024-01-27',
                'valor_fechamento' => '588.90',
                'variacao' => '1.85',
                'id_ativo' => 1487,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            487 =>
            array (
                'id' => 1488,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.00',
                'variacao' => '11.61',
                'id_ativo' => 1488,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            488 =>
            array (
                'id' => 1489,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.27',
                'variacao' => '1.36',
                'id_ativo' => 1489,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            489 =>
            array (
                'id' => 1490,
                'data' => '2024-01-27',
                'valor_fechamento' => '95.60',
                'variacao' => '-2.25',
                'id_ativo' => 1490,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            490 =>
            array (
                'id' => 1491,
                'data' => '2024-01-27',
                'valor_fechamento' => '53.07',
                'variacao' => '-0.02',
                'id_ativo' => 1491,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            491 =>
            array (
                'id' => 1492,
                'data' => '2024-01-27',
                'valor_fechamento' => '171.02',
                'variacao' => '0.34',
                'id_ativo' => 1492,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            492 =>
            array (
                'id' => 1493,
                'data' => '2024-01-27',
                'valor_fechamento' => '182.18',
                'variacao' => '-0.23',
                'id_ativo' => 1493,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            493 =>
            array (
                'id' => 1494,
                'data' => '2024-01-27',
                'valor_fechamento' => '300.14',
                'variacao' => '1.06',
                'id_ativo' => 1494,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            494 =>
            array (
                'id' => 1495,
                'data' => '2024-01-27',
                'valor_fechamento' => '50.85',
                'variacao' => '-2.02',
                'id_ativo' => 1495,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            495 =>
            array (
                'id' => 1496,
                'data' => '2024-01-27',
                'valor_fechamento' => '31.20',
                'variacao' => '0.00',
                'id_ativo' => 1496,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            496 =>
            array (
                'id' => 1497,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.90',
                'variacao' => '0.57',
                'id_ativo' => 1497,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            497 =>
            array (
                'id' => 1498,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.70',
                'variacao' => '0.64',
                'id_ativo' => 1498,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            498 =>
            array (
                'id' => 1499,
                'data' => '2024-01-27',
                'valor_fechamento' => '41.00',
                'variacao' => '1.21',
                'id_ativo' => 1499,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            499 =>
            array (
                'id' => 1500,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.12',
                'variacao' => '0.00',
                'id_ativo' => 1500,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
        ));
        DB::table('historico_ativos')->insert(array (
            0 =>
            array (
                'id' => 1501,
                'data' => '2024-01-27',
                'valor_fechamento' => '66.67',
                'variacao' => '0.00',
                'id_ativo' => 1501,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            1 =>
            array (
                'id' => 1502,
                'data' => '2024-01-27',
                'valor_fechamento' => '26.94',
                'variacao' => '1.20',
                'id_ativo' => 1502,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            2 =>
            array (
                'id' => 1503,
                'data' => '2024-01-27',
                'valor_fechamento' => '163.35',
                'variacao' => '1.07',
                'id_ativo' => 1503,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            3 =>
            array (
                'id' => 1504,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.84',
                'variacao' => '0.00',
                'id_ativo' => 1504,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            4 =>
            array (
                'id' => 1505,
                'data' => '2024-01-27',
                'valor_fechamento' => '79.95',
                'variacao' => '0.00',
                'id_ativo' => 1505,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            5 =>
            array (
                'id' => 1506,
                'data' => '2024-01-27',
                'valor_fechamento' => '191.33',
                'variacao' => '0.00',
                'id_ativo' => 1506,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            6 =>
            array (
                'id' => 1507,
                'data' => '2024-01-27',
                'valor_fechamento' => '318.40',
                'variacao' => '0.00',
                'id_ativo' => 1507,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            7 =>
            array (
                'id' => 1508,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.03',
                'variacao' => '0.78',
                'id_ativo' => 1508,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            8 =>
            array (
                'id' => 1509,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.70',
                'variacao' => '2.43',
                'id_ativo' => 1509,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            9 =>
            array (
                'id' => 1510,
                'data' => '2024-01-27',
                'valor_fechamento' => '111.17',
                'variacao' => '-0.12',
                'id_ativo' => 1510,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            10 =>
            array (
                'id' => 1511,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.38',
                'variacao' => '-2.87',
                'id_ativo' => 1511,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            11 =>
            array (
                'id' => 1512,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.88',
                'variacao' => '3.80',
                'id_ativo' => 1512,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            12 =>
            array (
                'id' => 1513,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.64',
                'variacao' => '1.76',
                'id_ativo' => 1513,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            13 =>
            array (
                'id' => 1514,
                'data' => '2024-01-27',
                'valor_fechamento' => '132.86',
                'variacao' => '0.43',
                'id_ativo' => 1514,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            14 =>
            array (
                'id' => 1515,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.01',
                'variacao' => '-6.46',
                'id_ativo' => 1515,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            15 =>
            array (
                'id' => 1516,
                'data' => '2024-01-27',
                'valor_fechamento' => '213.84',
                'variacao' => '-0.46',
                'id_ativo' => 1516,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            16 =>
            array (
                'id' => 1517,
                'data' => '2024-01-27',
                'valor_fechamento' => '57.65',
                'variacao' => '0.02',
                'id_ativo' => 1517,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            17 =>
            array (
                'id' => 1518,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.88',
                'variacao' => '3.37',
                'id_ativo' => 1518,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            18 =>
            array (
                'id' => 1519,
                'data' => '2024-01-27',
                'valor_fechamento' => '390.00',
                'variacao' => '-2.64',
                'id_ativo' => 1519,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            19 =>
            array (
                'id' => 1520,
                'data' => '2024-01-27',
                'valor_fechamento' => '79.29',
                'variacao' => '-3.26',
                'id_ativo' => 1520,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            20 =>
            array (
                'id' => 1521,
                'data' => '2024-01-27',
                'valor_fechamento' => '307.83',
                'variacao' => '0.20',
                'id_ativo' => 1521,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            21 =>
            array (
                'id' => 1522,
                'data' => '2024-01-27',
                'valor_fechamento' => '42.48',
                'variacao' => '2.02',
                'id_ativo' => 1522,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            22 =>
            array (
                'id' => 1523,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.67',
                'variacao' => '-0.13',
                'id_ativo' => 1523,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            23 =>
            array (
                'id' => 1524,
                'data' => '2024-01-27',
                'valor_fechamento' => '64.76',
                'variacao' => '1.03',
                'id_ativo' => 1524,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            24 =>
            array (
                'id' => 1525,
                'data' => '2024-01-27',
                'valor_fechamento' => '147.16',
                'variacao' => '0.62',
                'id_ativo' => 1525,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            25 =>
            array (
                'id' => 1526,
                'data' => '2024-01-27',
                'valor_fechamento' => '1058.00',
                'variacao' => '0.00',
                'id_ativo' => 1526,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            26 =>
            array (
                'id' => 1527,
                'data' => '2024-01-27',
                'valor_fechamento' => '194.00',
                'variacao' => '1.04',
                'id_ativo' => 1527,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            27 =>
            array (
                'id' => 1528,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.25',
                'variacao' => '2.29',
                'id_ativo' => 1528,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            28 =>
            array (
                'id' => 1529,
                'data' => '2024-01-27',
                'valor_fechamento' => '260.01',
                'variacao' => '-1.51',
                'id_ativo' => 1529,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            29 =>
            array (
                'id' => 1530,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.80',
                'variacao' => '6.25',
                'id_ativo' => 1530,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            30 =>
            array (
                'id' => 1531,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.35',
                'variacao' => '-0.13',
                'id_ativo' => 1531,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            31 =>
            array (
                'id' => 1532,
                'data' => '2024-01-27',
                'valor_fechamento' => '56.49',
                'variacao' => '0.00',
                'id_ativo' => 1532,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            32 =>
            array (
                'id' => 1533,
                'data' => '2024-01-27',
                'valor_fechamento' => '46.05',
                'variacao' => '1.21',
                'id_ativo' => 1533,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            33 =>
            array (
                'id' => 1534,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.88',
                'variacao' => '5.75',
                'id_ativo' => 1534,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            34 =>
            array (
                'id' => 1535,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.99',
                'variacao' => '1.51',
                'id_ativo' => 1535,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            35 =>
            array (
                'id' => 1536,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.06',
                'variacao' => '3.31',
                'id_ativo' => 1536,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            36 =>
            array (
                'id' => 1537,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.22',
                'variacao' => '2.22',
                'id_ativo' => 1537,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            37 =>
            array (
                'id' => 1538,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.25',
                'variacao' => '1.13',
                'id_ativo' => 1538,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            38 =>
            array (
                'id' => 1539,
                'data' => '2024-01-27',
                'valor_fechamento' => '92.12',
                'variacao' => '-0.01',
                'id_ativo' => 1539,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            39 =>
            array (
                'id' => 1540,
                'data' => '2024-01-27',
                'valor_fechamento' => '133.00',
                'variacao' => '-2.38',
                'id_ativo' => 1540,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            40 =>
            array (
                'id' => 1541,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.20',
                'variacao' => '-3.28',
                'id_ativo' => 1541,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            41 =>
            array (
                'id' => 1542,
                'data' => '2024-01-27',
                'valor_fechamento' => '184.50',
                'variacao' => '1.28',
                'id_ativo' => 1542,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            42 =>
            array (
                'id' => 1543,
                'data' => '2024-01-27',
                'valor_fechamento' => '235.20',
                'variacao' => '2.93',
                'id_ativo' => 1543,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            43 =>
            array (
                'id' => 1544,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.55',
                'variacao' => '-0.09',
                'id_ativo' => 1544,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            44 =>
            array (
                'id' => 1545,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.38',
                'variacao' => '4.56',
                'id_ativo' => 1545,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            45 =>
            array (
                'id' => 1546,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.29',
                'variacao' => '1.90',
                'id_ativo' => 1546,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            46 =>
            array (
                'id' => 1547,
                'data' => '2024-01-27',
                'valor_fechamento' => '130.86',
                'variacao' => '0.34',
                'id_ativo' => 1547,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            47 =>
            array (
                'id' => 1548,
                'data' => '2024-01-27',
                'valor_fechamento' => '360.00',
                'variacao' => '-0.11',
                'id_ativo' => 1548,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            48 =>
            array (
                'id' => 1549,
                'data' => '2024-01-27',
                'valor_fechamento' => '58.90',
                'variacao' => '0.00',
                'id_ativo' => 1549,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            49 =>
            array (
                'id' => 1550,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.70',
                'variacao' => '0.79',
                'id_ativo' => 1550,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            50 =>
            array (
                'id' => 1551,
                'data' => '2024-01-27',
                'valor_fechamento' => '144.30',
                'variacao' => '-1.03',
                'id_ativo' => 1551,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            51 =>
            array (
                'id' => 1552,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.60',
                'variacao' => '-1.82',
                'id_ativo' => 1552,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            52 =>
            array (
                'id' => 1553,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.99',
                'variacao' => '14.90',
                'id_ativo' => 1553,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            53 =>
            array (
                'id' => 1554,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.50',
                'variacao' => '7.72',
                'id_ativo' => 1554,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            54 =>
            array (
                'id' => 1555,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.75',
                'variacao' => '0.09',
                'id_ativo' => 1555,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            55 =>
            array (
                'id' => 1556,
                'data' => '2024-01-27',
                'valor_fechamento' => '97.97',
                'variacao' => '0.00',
                'id_ativo' => 1556,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            56 =>
            array (
                'id' => 1557,
                'data' => '2024-01-27',
                'valor_fechamento' => '454.48',
                'variacao' => '-1.10',
                'id_ativo' => 1557,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            57 =>
            array (
                'id' => 1558,
                'data' => '2024-01-27',
                'valor_fechamento' => '59.52',
                'variacao' => '0.98',
                'id_ativo' => 1558,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            58 =>
            array (
                'id' => 1559,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.99',
                'variacao' => '1.03',
                'id_ativo' => 1559,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            59 =>
            array (
                'id' => 1560,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.15',
                'variacao' => '1.22',
                'id_ativo' => 1560,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            60 =>
            array (
                'id' => 1561,
                'data' => '2024-01-27',
                'valor_fechamento' => '64.99',
                'variacao' => '22.16',
                'id_ativo' => 1561,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            61 =>
            array (
                'id' => 1562,
                'data' => '2024-01-27',
                'valor_fechamento' => '1100.00',
                'variacao' => '1.85',
                'id_ativo' => 1562,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            62 =>
            array (
                'id' => 1563,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.23',
                'variacao' => '0.00',
                'id_ativo' => 1563,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            63 =>
            array (
                'id' => 1564,
                'data' => '2024-01-27',
                'valor_fechamento' => '470.94',
                'variacao' => '0.20',
                'id_ativo' => 1564,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            64 =>
            array (
                'id' => 1565,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.45',
                'variacao' => '0.00',
                'id_ativo' => 1565,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            65 =>
            array (
                'id' => 1566,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.98',
                'variacao' => '-0.01',
                'id_ativo' => 1566,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            66 =>
            array (
                'id' => 1567,
                'data' => '2024-01-27',
                'valor_fechamento' => '85.36',
                'variacao' => '0.09',
                'id_ativo' => 1567,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            67 =>
            array (
                'id' => 1568,
                'data' => '2024-01-27',
                'valor_fechamento' => '228.00',
                'variacao' => '0.00',
                'id_ativo' => 1568,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            68 =>
            array (
                'id' => 1569,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.72',
                'variacao' => '-1.50',
                'id_ativo' => 1569,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            69 =>
            array (
                'id' => 1570,
                'data' => '2024-01-27',
                'valor_fechamento' => '201.60',
                'variacao' => '4.46',
                'id_ativo' => 1570,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            70 =>
            array (
                'id' => 1571,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.65',
                'variacao' => '0.00',
                'id_ativo' => 1571,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            71 =>
            array (
                'id' => 1572,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.46',
                'variacao' => '-0.10',
                'id_ativo' => 1572,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            72 =>
            array (
                'id' => 1573,
                'data' => '2024-01-27',
                'valor_fechamento' => '67.00',
                'variacao' => '-1.47',
                'id_ativo' => 1573,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            73 =>
            array (
                'id' => 1574,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.29',
                'variacao' => '0.24',
                'id_ativo' => 1574,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            74 =>
            array (
                'id' => 1575,
                'data' => '2024-01-27',
                'valor_fechamento' => '42.40',
                'variacao' => '-0.38',
                'id_ativo' => 1575,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            75 =>
            array (
                'id' => 1576,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.21',
                'variacao' => '-0.71',
                'id_ativo' => 1576,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            76 =>
            array (
                'id' => 1577,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.24',
                'variacao' => '-0.21',
                'id_ativo' => 1577,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            77 =>
            array (
                'id' => 1578,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.16',
                'variacao' => '-1.42',
                'id_ativo' => 1578,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            78 =>
            array (
                'id' => 1579,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.50',
                'variacao' => '-0.74',
                'id_ativo' => 1579,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            79 =>
            array (
                'id' => 1580,
                'data' => '2024-01-27',
                'valor_fechamento' => '994.20',
                'variacao' => '-0.08',
                'id_ativo' => 1580,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            80 =>
            array (
                'id' => 1581,
                'data' => '2024-01-27',
                'valor_fechamento' => '472.00',
                'variacao' => '2.83',
                'id_ativo' => 1581,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            81 =>
            array (
                'id' => 1582,
                'data' => '2024-01-27',
                'valor_fechamento' => '33.50',
                'variacao' => '-3.18',
                'id_ativo' => 1582,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            82 =>
            array (
                'id' => 1583,
                'data' => '2024-01-27',
                'valor_fechamento' => '86.80',
                'variacao' => '-1.36',
                'id_ativo' => 1583,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            83 =>
            array (
                'id' => 1584,
                'data' => '2024-01-27',
                'valor_fechamento' => '148.80',
                'variacao' => '1.25',
                'id_ativo' => 1584,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            84 =>
            array (
                'id' => 1585,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.22',
                'variacao' => '-0.20',
                'id_ativo' => 1585,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            85 =>
            array (
                'id' => 1586,
                'data' => '2024-01-27',
                'valor_fechamento' => '45.35',
                'variacao' => '-2.37',
                'id_ativo' => 1586,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            86 =>
            array (
                'id' => 1587,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.12',
                'variacao' => '1.84',
                'id_ativo' => 1587,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            87 =>
            array (
                'id' => 1588,
                'data' => '2024-01-27',
                'valor_fechamento' => '60.70',
                'variacao' => '0.17',
                'id_ativo' => 1588,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            88 =>
            array (
                'id' => 1589,
                'data' => '2024-01-27',
                'valor_fechamento' => '113.06',
                'variacao' => '0.61',
                'id_ativo' => 1589,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            89 =>
            array (
                'id' => 1590,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.00',
                'variacao' => '0.00',
                'id_ativo' => 1590,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            90 =>
            array (
                'id' => 1591,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.76',
                'variacao' => '0.39',
                'id_ativo' => 1591,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            91 =>
            array (
                'id' => 1592,
                'data' => '2024-01-27',
                'valor_fechamento' => '637.43',
                'variacao' => '-0.40',
                'id_ativo' => 1592,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            92 =>
            array (
                'id' => 1593,
                'data' => '2024-01-27',
                'valor_fechamento' => '116.04',
                'variacao' => '0.53',
                'id_ativo' => 1593,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            93 =>
            array (
                'id' => 1594,
                'data' => '2024-01-27',
                'valor_fechamento' => '464.00',
                'variacao' => '1.09',
                'id_ativo' => 1594,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            94 =>
            array (
                'id' => 1595,
                'data' => '2024-01-27',
                'valor_fechamento' => '64.20',
                'variacao' => '1.61',
                'id_ativo' => 1595,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            95 =>
            array (
                'id' => 1596,
                'data' => '2024-01-27',
                'valor_fechamento' => '417.40',
                'variacao' => '0.50',
                'id_ativo' => 1596,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            96 =>
            array (
                'id' => 1597,
                'data' => '2024-01-27',
                'valor_fechamento' => '47.00',
                'variacao' => '1.73',
                'id_ativo' => 1597,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            97 =>
            array (
                'id' => 1598,
                'data' => '2024-01-27',
                'valor_fechamento' => '35.65',
                'variacao' => '1.13',
                'id_ativo' => 1598,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            98 =>
            array (
                'id' => 1599,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.20',
                'variacao' => '1.37',
                'id_ativo' => 1599,
                'created_at' => '2024-01-27 08:55:12',
                'updated_at' => '2024-01-27 08:55:12',
            ),
            99 =>
            array (
                'id' => 1600,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.17',
                'variacao' => '-5.80',
                'id_ativo' => 1600,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            100 =>
            array (
                'id' => 1601,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.60',
                'variacao' => '1.12',
                'id_ativo' => 1601,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            101 =>
            array (
                'id' => 1602,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.02',
                'variacao' => '-1.46',
                'id_ativo' => 1602,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            102 =>
            array (
                'id' => 1603,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.19',
                'variacao' => '3.42',
                'id_ativo' => 1603,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            103 =>
            array (
                'id' => 1604,
                'data' => '2024-01-27',
                'valor_fechamento' => '146.40',
                'variacao' => '2.22',
                'id_ativo' => 1604,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            104 =>
            array (
                'id' => 1605,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.80',
                'variacao' => '-0.19',
                'id_ativo' => 1605,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            105 =>
            array (
                'id' => 1606,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.95',
                'variacao' => '1.94',
                'id_ativo' => 1606,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            106 =>
            array (
                'id' => 1607,
                'data' => '2024-01-27',
                'valor_fechamento' => '29.04',
                'variacao' => '-2.02',
                'id_ativo' => 1607,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            107 =>
            array (
                'id' => 1608,
                'data' => '2024-01-27',
                'valor_fechamento' => '169.00',
                'variacao' => '4.37',
                'id_ativo' => 1608,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            108 =>
            array (
                'id' => 1609,
                'data' => '2024-01-27',
                'valor_fechamento' => '294.99',
                'variacao' => '-1.01',
                'id_ativo' => 1609,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            109 =>
            array (
                'id' => 1610,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.05',
                'variacao' => '-28.55',
                'id_ativo' => 1610,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            110 =>
            array (
                'id' => 1611,
                'data' => '2024-01-27',
                'valor_fechamento' => '23.90',
                'variacao' => '0.00',
                'id_ativo' => 1611,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            111 =>
            array (
                'id' => 1612,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.08',
                'variacao' => '-2.50',
                'id_ativo' => 1612,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            112 =>
            array (
                'id' => 1613,
                'data' => '2024-01-27',
                'valor_fechamento' => '70.21',
                'variacao' => '1.46',
                'id_ativo' => 1613,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            113 =>
            array (
                'id' => 1614,
                'data' => '2024-01-27',
                'valor_fechamento' => '18.24',
                'variacao' => '-0.65',
                'id_ativo' => 1614,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            114 =>
            array (
                'id' => 1615,
                'data' => '2024-01-27',
                'valor_fechamento' => '77.04',
                'variacao' => '0.00',
                'id_ativo' => 1615,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            115 =>
            array (
                'id' => 1616,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.41',
                'variacao' => '2.93',
                'id_ativo' => 1616,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            116 =>
            array (
                'id' => 1617,
                'data' => '2024-01-27',
                'valor_fechamento' => '11.74',
                'variacao' => '3.80',
                'id_ativo' => 1617,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            117 =>
            array (
                'id' => 1618,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.70',
                'variacao' => '0.13',
                'id_ativo' => 1618,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            118 =>
            array (
                'id' => 1619,
                'data' => '2024-01-27',
                'valor_fechamento' => '34.62',
                'variacao' => '2.00',
                'id_ativo' => 1619,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            119 =>
            array (
                'id' => 1620,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.70',
                'variacao' => '-0.28',
                'id_ativo' => 1620,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            120 =>
            array (
                'id' => 1621,
                'data' => '2024-01-27',
                'valor_fechamento' => '110.00',
                'variacao' => '0.00',
                'id_ativo' => 1621,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            121 =>
            array (
                'id' => 1622,
                'data' => '2024-01-27',
                'valor_fechamento' => '381.42',
                'variacao' => '-1.69',
                'id_ativo' => 1622,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            122 =>
            array (
                'id' => 1623,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.38',
                'variacao' => '1.20',
                'id_ativo' => 1623,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            123 =>
            array (
                'id' => 1624,
                'data' => '2024-01-27',
                'valor_fechamento' => '100.00',
                'variacao' => '0.01',
                'id_ativo' => 1624,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            124 =>
            array (
                'id' => 1625,
                'data' => '2024-01-27',
                'valor_fechamento' => '74.58',
                'variacao' => '0.49',
                'id_ativo' => 1625,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            125 =>
            array (
                'id' => 1626,
                'data' => '2024-01-27',
                'valor_fechamento' => '32.58',
                'variacao' => '-0.46',
                'id_ativo' => 1626,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            126 =>
            array (
                'id' => 1627,
                'data' => '2024-01-27',
                'valor_fechamento' => '91.26',
                'variacao' => '2.32',
                'id_ativo' => 1627,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            127 =>
            array (
                'id' => 1628,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.43',
                'variacao' => '1.95',
                'id_ativo' => 1628,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            128 =>
            array (
                'id' => 1629,
                'data' => '2024-01-27',
                'valor_fechamento' => '96.90',
                'variacao' => '0.94',
                'id_ativo' => 1629,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            129 =>
            array (
                'id' => 1630,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.45',
                'variacao' => '0.04',
                'id_ativo' => 1630,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            130 =>
            array (
                'id' => 1631,
                'data' => '2024-01-27',
                'valor_fechamento' => '2118.89',
                'variacao' => '0.00',
                'id_ativo' => 1631,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            131 =>
            array (
                'id' => 1632,
                'data' => '2024-01-27',
                'valor_fechamento' => '52.40',
                'variacao' => '-0.57',
                'id_ativo' => 1632,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            132 =>
            array (
                'id' => 1633,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.04',
                'variacao' => '-0.98',
                'id_ativo' => 1633,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            133 =>
            array (
                'id' => 1634,
                'data' => '2024-01-27',
                'valor_fechamento' => '296.67',
                'variacao' => '1.84',
                'id_ativo' => 1634,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            134 =>
            array (
                'id' => 1635,
                'data' => '2024-01-27',
                'valor_fechamento' => '243.60',
                'variacao' => '-0.67',
                'id_ativo' => 1635,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            135 =>
            array (
                'id' => 1636,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.30',
                'variacao' => '0.04',
                'id_ativo' => 1636,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            136 =>
            array (
                'id' => 1637,
                'data' => '2024-01-27',
                'valor_fechamento' => '568.29',
                'variacao' => '-0.27',
                'id_ativo' => 1637,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            137 =>
            array (
                'id' => 1638,
                'data' => '2024-01-27',
                'valor_fechamento' => '20.78',
                'variacao' => '-1.52',
                'id_ativo' => 1638,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            138 =>
            array (
                'id' => 1639,
                'data' => '2024-01-27',
                'valor_fechamento' => '102.25',
                'variacao' => '0.25',
                'id_ativo' => 1639,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            139 =>
            array (
                'id' => 1640,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.90',
                'variacao' => '-0.73',
                'id_ativo' => 1640,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            140 =>
            array (
                'id' => 1641,
                'data' => '2024-01-27',
                'valor_fechamento' => '16.70',
                'variacao' => '-0.54',
                'id_ativo' => 1641,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            141 =>
            array (
                'id' => 1642,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.00',
                'variacao' => '3.39',
                'id_ativo' => 1642,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            142 =>
            array (
                'id' => 1643,
                'data' => '2024-01-27',
                'valor_fechamento' => '101.86',
                'variacao' => '-1.58',
                'id_ativo' => 1643,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            143 =>
            array (
                'id' => 1644,
                'data' => '2024-01-27',
                'valor_fechamento' => '71.82',
                'variacao' => '0.98',
                'id_ativo' => 1644,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            144 =>
            array (
                'id' => 1645,
                'data' => '2024-01-27',
                'valor_fechamento' => '358.84',
                'variacao' => '1.11',
                'id_ativo' => 1645,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            145 =>
            array (
                'id' => 1646,
                'data' => '2024-01-27',
                'valor_fechamento' => '162.23',
                'variacao' => '2.01',
                'id_ativo' => 1646,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            146 =>
            array (
                'id' => 1647,
                'data' => '2024-01-27',
                'valor_fechamento' => '110.55',
                'variacao' => '0.70',
                'id_ativo' => 1647,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            147 =>
            array (
                'id' => 1648,
                'data' => '2024-01-27',
                'valor_fechamento' => '282.50',
                'variacao' => '0.29',
                'id_ativo' => 1648,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            148 =>
            array (
                'id' => 1649,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.35',
                'variacao' => '1.48',
                'id_ativo' => 1649,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            149 =>
            array (
                'id' => 1650,
                'data' => '2024-01-27',
                'valor_fechamento' => '145.92',
                'variacao' => '0.00',
                'id_ativo' => 1650,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            150 =>
            array (
                'id' => 1651,
                'data' => '2024-01-27',
                'valor_fechamento' => '384.93',
                'variacao' => '4.35',
                'id_ativo' => 1651,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            151 =>
            array (
                'id' => 1652,
                'data' => '2024-01-27',
                'valor_fechamento' => '184.86',
                'variacao' => '0.79',
                'id_ativo' => 1652,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            152 =>
            array (
                'id' => 1653,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.01',
                'variacao' => '-0.37',
                'id_ativo' => 1653,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            153 =>
            array (
                'id' => 1654,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.15',
                'variacao' => '-7.10',
                'id_ativo' => 1654,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            154 =>
            array (
                'id' => 1655,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.52',
                'variacao' => '-1.11',
                'id_ativo' => 1655,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            155 =>
            array (
                'id' => 1656,
                'data' => '2024-01-27',
                'valor_fechamento' => '61.96',
                'variacao' => '0.85',
                'id_ativo' => 1656,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            156 =>
            array (
                'id' => 1657,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.69',
                'variacao' => '6.50',
                'id_ativo' => 1657,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            157 =>
            array (
                'id' => 1658,
                'data' => '2024-01-27',
                'valor_fechamento' => '37.56',
                'variacao' => '-0.63',
                'id_ativo' => 1658,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            158 =>
            array (
                'id' => 1659,
                'data' => '2024-01-27',
                'valor_fechamento' => '121.00',
                'variacao' => '1.68',
                'id_ativo' => 1659,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            159 =>
            array (
                'id' => 1660,
                'data' => '2024-01-27',
                'valor_fechamento' => '69.50',
                'variacao' => '-0.70',
                'id_ativo' => 1660,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            160 =>
            array (
                'id' => 1661,
                'data' => '2024-01-27',
                'valor_fechamento' => '38.56',
                'variacao' => '0.16',
                'id_ativo' => 1661,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            161 =>
            array (
                'id' => 1662,
                'data' => '2024-01-27',
                'valor_fechamento' => '689.99',
                'variacao' => '-7.72',
                'id_ativo' => 1662,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            162 =>
            array (
                'id' => 1663,
                'data' => '2024-01-27',
                'valor_fechamento' => '49.90',
                'variacao' => '-1.52',
                'id_ativo' => 1663,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            163 =>
            array (
                'id' => 1664,
                'data' => '2024-01-27',
                'valor_fechamento' => '135.24',
                'variacao' => '1.79',
                'id_ativo' => 1664,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            164 =>
            array (
                'id' => 1665,
                'data' => '2024-01-27',
                'valor_fechamento' => '205114.78',
                'variacao' => '2409.04',
                'id_ativo' => 1665,
                'created_at' => '2024-01-27 08:55:13',
                'updated_at' => '2024-01-27 08:55:13',
            ),
            165 =>
            array (
                'id' => 1666,
                'data' => '2024-01-27',
                'valor_fechamento' => '11137.64',
                'variacao' => '86.59',
                'id_ativo' => 1666,
                'created_at' => '2024-01-27 08:55:14',
                'updated_at' => '2024-01-27 08:55:14',
            ),
            166 =>
            array (
                'id' => 1667,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.37',
                'variacao' => '-0.01',
                'id_ativo' => 1667,
                'created_at' => '2024-01-27 08:55:14',
                'updated_at' => '2024-01-27 08:55:14',
            ),
            167 =>
            array (
                'id' => 1668,
                'data' => '2024-01-27',
                'valor_fechamento' => '1494.05',
                'variacao' => '5.08',
                'id_ativo' => 1668,
                'created_at' => '2024-01-27 08:55:14',
                'updated_at' => '2024-01-27 08:55:14',
            ),
            168 =>
            array (
                'id' => 1669,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.92',
                'variacao' => '0.00',
                'id_ativo' => 1669,
                'created_at' => '2024-01-27 08:55:15',
                'updated_at' => '2024-01-27 08:55:15',
            ),
            169 =>
            array (
                'id' => 1670,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.60',
                'variacao' => '0.04',
                'id_ativo' => 1670,
                'created_at' => '2024-01-27 08:55:15',
                'updated_at' => '2024-01-27 08:55:15',
            ),
            170 =>
            array (
                'id' => 1671,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1671,
                'created_at' => '2024-01-27 08:55:15',
                'updated_at' => '2024-01-27 08:55:15',
            ),
            171 =>
            array (
                'id' => 1672,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.39',
                'variacao' => '0.00',
                'id_ativo' => 1672,
                'created_at' => '2024-01-27 08:55:16',
                'updated_at' => '2024-01-27 08:55:16',
            ),
            172 =>
            array (
                'id' => 1673,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.44',
                'variacao' => '0.00',
                'id_ativo' => 1673,
                'created_at' => '2024-01-27 08:55:16',
                'updated_at' => '2024-01-27 08:55:16',
            ),
            173 =>
            array (
                'id' => 1674,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.92',
                'variacao' => '0.00',
                'id_ativo' => 1674,
                'created_at' => '2024-01-27 08:55:16',
                'updated_at' => '2024-01-27 08:55:16',
            ),
            174 =>
            array (
                'id' => 1675,
                'data' => '2024-01-27',
                'valor_fechamento' => '122.33',
                'variacao' => '-7.58',
                'id_ativo' => 1675,
                'created_at' => '2024-01-27 08:55:17',
                'updated_at' => '2024-01-27 08:55:17',
            ),
            175 =>
            array (
                'id' => 1676,
                'data' => '2024-01-27',
                'valor_fechamento' => '72.27',
                'variacao' => '0.21',
                'id_ativo' => 1676,
                'created_at' => '2024-01-27 08:55:17',
                'updated_at' => '2024-01-27 08:55:17',
            ),
            176 =>
            array (
                'id' => 1677,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1677,
                'created_at' => '2024-01-27 08:55:17',
                'updated_at' => '2024-01-27 08:55:17',
            ),
            177 =>
            array (
                'id' => 1678,
                'data' => '2024-01-27',
                'valor_fechamento' => '1179.38',
                'variacao' => '0.14',
                'id_ativo' => 1678,
                'created_at' => '2024-01-27 08:55:18',
                'updated_at' => '2024-01-27 08:55:18',
            ),
            178 =>
            array (
                'id' => 1679,
                'data' => '2024-01-27',
                'valor_fechamento' => '329.48',
                'variacao' => '1.08',
                'id_ativo' => 1679,
                'created_at' => '2024-01-27 08:55:18',
                'updated_at' => '2024-01-27 08:55:18',
            ),
            179 =>
            array (
                'id' => 1680,
                'data' => '2024-01-27',
                'valor_fechamento' => '70.02',
                'variacao' => '0.38',
                'id_ativo' => 1680,
                'created_at' => '2024-01-27 08:55:18',
                'updated_at' => '2024-01-27 08:55:18',
            ),
            180 =>
            array (
                'id' => 1681,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.05',
                'variacao' => '-6.10',
                'id_ativo' => 1681,
                'created_at' => '2024-01-27 08:55:18',
                'updated_at' => '2024-01-27 08:55:18',
            ),
            181 =>
            array (
                'id' => 1682,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.76',
                'variacao' => '0.07',
                'id_ativo' => 1682,
                'created_at' => '2024-01-27 08:55:19',
                'updated_at' => '2024-01-27 08:55:19',
            ),
            182 =>
            array (
                'id' => 1683,
                'data' => '2024-01-27',
                'valor_fechamento' => '158.87',
                'variacao' => '0.20',
                'id_ativo' => 1683,
                'created_at' => '2024-01-27 08:55:19',
                'updated_at' => '2024-01-27 08:55:19',
            ),
            183 =>
            array (
                'id' => 1684,
                'data' => '2024-01-27',
                'valor_fechamento' => '117.47',
                'variacao' => '-0.50',
                'id_ativo' => 1684,
                'created_at' => '2024-01-27 08:55:19',
                'updated_at' => '2024-01-27 08:55:19',
            ),
            184 =>
            array (
                'id' => 1685,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.57',
                'variacao' => '0.01',
                'id_ativo' => 1685,
                'created_at' => '2024-01-27 08:55:20',
                'updated_at' => '2024-01-27 08:55:20',
            ),
            185 =>
            array (
                'id' => 1686,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.14',
                'variacao' => '0.00',
                'id_ativo' => 1686,
                'created_at' => '2024-01-27 08:55:20',
                'updated_at' => '2024-01-27 08:55:20',
            ),
            186 =>
            array (
                'id' => 1687,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.83',
                'variacao' => '0.66',
                'id_ativo' => 1687,
                'created_at' => '2024-01-27 08:55:20',
                'updated_at' => '2024-01-27 08:55:20',
            ),
            187 =>
            array (
                'id' => 1688,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.90',
                'variacao' => '0.06',
                'id_ativo' => 1688,
                'created_at' => '2024-01-27 08:55:21',
                'updated_at' => '2024-01-27 08:55:21',
            ),
            188 =>
            array (
                'id' => 1689,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.56',
                'variacao' => '0.00',
                'id_ativo' => 1689,
                'created_at' => '2024-01-27 08:55:21',
                'updated_at' => '2024-01-27 08:55:21',
            ),
            189 =>
            array (
                'id' => 1690,
                'data' => '2024-01-27',
                'valor_fechamento' => '788.37',
                'variacao' => '2.71',
                'id_ativo' => 1690,
                'created_at' => '2024-01-27 08:55:21',
                'updated_at' => '2024-01-27 08:55:21',
            ),
            190 =>
            array (
                'id' => 1691,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.82',
                'variacao' => '0.10',
                'id_ativo' => 1691,
                'created_at' => '2024-01-27 08:55:22',
                'updated_at' => '2024-01-27 08:55:22',
            ),
            191 =>
            array (
                'id' => 1692,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.44',
                'variacao' => '-0.01',
                'id_ativo' => 1692,
                'created_at' => '2024-01-27 08:55:22',
                'updated_at' => '2024-01-27 08:55:22',
            ),
            192 =>
            array (
                'id' => 1693,
                'data' => '2024-01-27',
                'valor_fechamento' => '448.17',
                'variacao' => '3.33',
                'id_ativo' => 1693,
                'created_at' => '2024-01-27 08:55:22',
                'updated_at' => '2024-01-27 08:55:22',
            ),
            193 =>
            array (
                'id' => 1694,
                'data' => '2024-01-27',
                'valor_fechamento' => '106.66',
                'variacao' => '-3.07',
                'id_ativo' => 1694,
                'created_at' => '2024-01-27 08:55:23',
                'updated_at' => '2024-01-27 08:55:23',
            ),
            194 =>
            array (
                'id' => 1695,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.07',
                'variacao' => '0.00',
                'id_ativo' => 1695,
                'created_at' => '2024-01-27 08:55:23',
                'updated_at' => '2024-01-27 08:55:23',
            ),
            195 =>
            array (
                'id' => 1696,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.40',
                'variacao' => '0.01',
                'id_ativo' => 1696,
                'created_at' => '2024-01-27 08:55:23',
                'updated_at' => '2024-01-27 08:55:23',
            ),
            196 =>
            array (
                'id' => 1697,
                'data' => '2024-01-27',
                'valor_fechamento' => '54.00',
                'variacao' => '0.53',
                'id_ativo' => 1697,
                'created_at' => '2024-01-27 08:55:24',
                'updated_at' => '2024-01-27 08:55:24',
            ),
            197 =>
            array (
                'id' => 1698,
                'data' => '2024-01-27',
                'valor_fechamento' => '355.69',
                'variacao' => '11.24',
                'id_ativo' => 1698,
                'created_at' => '2024-01-27 08:55:24',
                'updated_at' => '2024-01-27 08:55:24',
            ),
            198 =>
            array (
                'id' => 1699,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.82',
                'variacao' => '0.01',
                'id_ativo' => 1699,
                'created_at' => '2024-01-27 08:55:24',
                'updated_at' => '2024-01-27 08:55:24',
            ),
            199 =>
            array (
                'id' => 1700,
                'data' => '2024-01-27',
                'valor_fechamento' => '9931.72',
                'variacao' => '-298.57',
                'id_ativo' => 1700,
                'created_at' => '2024-01-27 08:55:25',
                'updated_at' => '2024-01-27 08:55:25',
            ),
            200 =>
            array (
                'id' => 1701,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.75',
                'variacao' => '0.01',
                'id_ativo' => 1701,
                'created_at' => '2024-01-27 08:55:25',
                'updated_at' => '2024-01-27 08:55:25',
            ),
            201 =>
            array (
                'id' => 1702,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1702,
                'created_at' => '2024-01-27 08:55:25',
                'updated_at' => '2024-01-27 08:55:25',
            ),
            202 =>
            array (
                'id' => 1703,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1703,
                'created_at' => '2024-01-27 08:55:26',
                'updated_at' => '2024-01-27 08:55:26',
            ),
            203 =>
            array (
                'id' => 1704,
                'data' => '2024-01-27',
                'valor_fechamento' => '255.23',
                'variacao' => '4.30',
                'id_ativo' => 1704,
                'created_at' => '2024-01-27 08:55:26',
                'updated_at' => '2024-01-27 08:55:26',
            ),
            204 =>
            array (
                'id' => 1705,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.99',
                'variacao' => '0.11',
                'id_ativo' => 1705,
                'created_at' => '2024-01-27 08:55:26',
                'updated_at' => '2024-01-27 08:55:26',
            ),
            205 =>
            array (
                'id' => 1706,
                'data' => '2024-01-27',
                'valor_fechamento' => '186.60',
                'variacao' => '0.08',
                'id_ativo' => 1706,
                'created_at' => '2024-01-27 08:55:27',
                'updated_at' => '2024-01-27 08:55:27',
            ),
            206 =>
            array (
                'id' => 1707,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.24',
                'variacao' => '0.00',
                'id_ativo' => 1707,
                'created_at' => '2024-01-27 08:55:27',
                'updated_at' => '2024-01-27 08:55:27',
            ),
            207 =>
            array (
                'id' => 1708,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1708,
                'created_at' => '2024-01-27 08:55:27',
                'updated_at' => '2024-01-27 08:55:27',
            ),
            208 =>
            array (
                'id' => 1709,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.36',
                'variacao' => '0.01',
                'id_ativo' => 1709,
                'created_at' => '2024-01-27 08:55:28',
                'updated_at' => '2024-01-27 08:55:28',
            ),
            209 =>
            array (
                'id' => 1710,
                'data' => '2024-01-27',
                'valor_fechamento' => '135.99',
                'variacao' => '0.06',
                'id_ativo' => 1710,
                'created_at' => '2024-01-27 08:55:28',
                'updated_at' => '2024-01-27 08:55:28',
            ),
            210 =>
            array (
                'id' => 1711,
                'data' => '2024-01-27',
                'valor_fechamento' => '104.76',
                'variacao' => '34.87',
                'id_ativo' => 1711,
                'created_at' => '2024-01-27 08:55:28',
                'updated_at' => '2024-01-27 08:55:28',
            ),
            211 =>
            array (
                'id' => 1712,
                'data' => '2024-01-27',
                'valor_fechamento' => '534.43',
                'variacao' => '5.38',
                'id_ativo' => 1712,
                'created_at' => '2024-01-27 08:55:28',
                'updated_at' => '2024-01-27 08:55:28',
            ),
            212 =>
            array (
                'id' => 1713,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1713,
                'created_at' => '2024-01-27 08:55:29',
                'updated_at' => '2024-01-27 08:55:29',
            ),
            213 =>
            array (
                'id' => 1714,
                'data' => '2024-01-27',
                'valor_fechamento' => '166.76',
                'variacao' => '7.90',
                'id_ativo' => 1714,
                'created_at' => '2024-01-27 08:55:29',
                'updated_at' => '2024-01-27 08:55:29',
            ),
            214 =>
            array (
                'id' => 1715,
                'data' => '2024-01-27',
                'valor_fechamento' => '21.08',
                'variacao' => '-0.13',
                'id_ativo' => 1715,
                'created_at' => '2024-01-27 08:55:29',
                'updated_at' => '2024-01-27 08:55:29',
            ),
            215 =>
            array (
                'id' => 1716,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.52',
                'variacao' => '-0.02',
                'id_ativo' => 1716,
                'created_at' => '2024-01-27 08:55:30',
                'updated_at' => '2024-01-27 08:55:30',
            ),
            216 =>
            array (
                'id' => 1717,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1717,
                'created_at' => '2024-01-27 08:55:30',
                'updated_at' => '2024-01-27 08:55:30',
            ),
            217 =>
            array (
                'id' => 1718,
                'data' => '2024-01-27',
                'valor_fechamento' => '111.10',
                'variacao' => '-0.74',
                'id_ativo' => 1718,
                'created_at' => '2024-01-27 08:55:30',
                'updated_at' => '2024-01-27 08:55:30',
            ),
            218 =>
            array (
                'id' => 1719,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.49',
                'variacao' => '0.00',
                'id_ativo' => 1719,
                'created_at' => '2024-01-27 08:55:31',
                'updated_at' => '2024-01-27 08:55:31',
            ),
            219 =>
            array (
                'id' => 1720,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.41',
                'variacao' => '0.02',
                'id_ativo' => 1720,
                'created_at' => '2024-01-27 08:55:31',
                'updated_at' => '2024-01-27 08:55:31',
            ),
            220 =>
            array (
                'id' => 1721,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.20',
                'variacao' => '-0.01',
                'id_ativo' => 1721,
                'created_at' => '2024-01-27 08:55:31',
                'updated_at' => '2024-01-27 08:55:31',
            ),
            221 =>
            array (
                'id' => 1722,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1722,
                'created_at' => '2024-01-27 08:55:32',
                'updated_at' => '2024-01-27 08:55:32',
            ),
            222 =>
            array (
                'id' => 1723,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.19',
                'variacao' => '-0.01',
                'id_ativo' => 1723,
                'created_at' => '2024-01-27 08:55:32',
                'updated_at' => '2024-01-27 08:55:32',
            ),
            223 =>
            array (
                'id' => 1724,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.21',
                'variacao' => '0.00',
                'id_ativo' => 1724,
                'created_at' => '2024-01-27 08:55:32',
                'updated_at' => '2024-01-27 08:55:32',
            ),
            224 =>
            array (
                'id' => 1725,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.22',
                'variacao' => '0.01',
                'id_ativo' => 1725,
                'created_at' => '2024-01-27 08:55:33',
                'updated_at' => '2024-01-27 08:55:33',
            ),
            225 =>
            array (
                'id' => 1726,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.37',
                'variacao' => '-0.04',
                'id_ativo' => 1726,
                'created_at' => '2024-01-27 08:55:33',
                'updated_at' => '2024-01-27 08:55:33',
            ),
            226 =>
            array (
                'id' => 1727,
                'data' => '2024-01-27',
                'valor_fechamento' => '43.62',
                'variacao' => '-0.15',
                'id_ativo' => 1727,
                'created_at' => '2024-01-27 08:55:33',
                'updated_at' => '2024-01-27 08:55:33',
            ),
            227 =>
            array (
                'id' => 1728,
                'data' => '2024-01-27',
                'valor_fechamento' => '118.72',
                'variacao' => '8.62',
                'id_ativo' => 1728,
                'created_at' => '2024-01-27 08:55:34',
                'updated_at' => '2024-01-27 08:55:34',
            ),
            228 =>
            array (
                'id' => 1729,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.85',
                'variacao' => '0.04',
                'id_ativo' => 1729,
                'created_at' => '2024-01-27 08:55:34',
                'updated_at' => '2024-01-27 08:55:34',
            ),
            229 =>
            array (
                'id' => 1730,
                'data' => '2024-01-27',
                'valor_fechamento' => '35489.46',
                'variacao' => '148.90',
                'id_ativo' => 1730,
                'created_at' => '2024-01-27 08:55:34',
                'updated_at' => '2024-01-27 08:55:34',
            ),
            230 =>
            array (
                'id' => 1731,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.90',
                'variacao' => '0.01',
                'id_ativo' => 1731,
                'created_at' => '2024-01-27 08:55:35',
                'updated_at' => '2024-01-27 08:55:35',
            ),
            231 =>
            array (
                'id' => 1732,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.93',
                'variacao' => '-0.01',
                'id_ativo' => 1732,
                'created_at' => '2024-01-27 08:55:35',
                'updated_at' => '2024-01-27 08:55:35',
            ),
            232 =>
            array (
                'id' => 1733,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.10',
                'variacao' => '0.00',
                'id_ativo' => 1733,
                'created_at' => '2024-01-27 08:55:35',
                'updated_at' => '2024-01-27 08:55:35',
            ),
            233 =>
            array (
                'id' => 1734,
                'data' => '2024-01-27',
                'valor_fechamento' => '14.40',
                'variacao' => '0.23',
                'id_ativo' => 1734,
                'created_at' => '2024-01-27 08:55:36',
                'updated_at' => '2024-01-27 08:55:36',
            ),
            234 =>
            array (
                'id' => 1735,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.09',
                'variacao' => '0.00',
                'id_ativo' => 1735,
                'created_at' => '2024-01-27 08:55:36',
                'updated_at' => '2024-01-27 08:55:36',
            ),
            235 =>
            array (
                'id' => 1736,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.23',
                'variacao' => '-0.01',
                'id_ativo' => 1736,
                'created_at' => '2024-01-27 08:55:36',
                'updated_at' => '2024-01-27 08:55:36',
            ),
            236 =>
            array (
                'id' => 1737,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.12',
                'variacao' => '0.02',
                'id_ativo' => 1737,
                'created_at' => '2024-01-27 08:55:37',
                'updated_at' => '2024-01-27 08:55:37',
            ),
            237 =>
            array (
                'id' => 1738,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.02',
                'variacao' => '0.03',
                'id_ativo' => 1738,
                'created_at' => '2024-01-27 08:55:37',
                'updated_at' => '2024-01-27 08:55:37',
            ),
            238 =>
            array (
                'id' => 1739,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1739,
                'created_at' => '2024-01-27 08:55:37',
                'updated_at' => '2024-01-27 08:55:37',
            ),
            239 =>
            array (
                'id' => 1740,
                'data' => '2024-01-27',
                'valor_fechamento' => '39.20',
                'variacao' => '-0.22',
                'id_ativo' => 1740,
                'created_at' => '2024-01-27 08:55:38',
                'updated_at' => '2024-01-27 08:55:38',
            ),
            240 =>
            array (
                'id' => 1741,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.39',
                'variacao' => '0.01',
                'id_ativo' => 1741,
                'created_at' => '2024-01-27 08:55:38',
                'updated_at' => '2024-01-27 08:55:38',
            ),
            241 =>
            array (
                'id' => 1742,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1742,
                'created_at' => '2024-01-27 08:55:38',
                'updated_at' => '2024-01-27 08:55:38',
            ),
            242 =>
            array (
                'id' => 1743,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.15',
                'variacao' => '0.00',
                'id_ativo' => 1743,
                'created_at' => '2024-01-27 08:55:39',
                'updated_at' => '2024-01-27 08:55:39',
            ),
            243 =>
            array (
                'id' => 1744,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.27',
                'variacao' => '0.03',
                'id_ativo' => 1744,
                'created_at' => '2024-01-27 08:55:39',
                'updated_at' => '2024-01-27 08:55:39',
            ),
            244 =>
            array (
                'id' => 1745,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.92',
                'variacao' => '0.28',
                'id_ativo' => 1745,
                'created_at' => '2024-01-27 08:55:39',
                'updated_at' => '2024-01-27 08:55:39',
            ),
            245 =>
            array (
                'id' => 1746,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.10',
                'variacao' => '0.00',
                'id_ativo' => 1746,
                'created_at' => '2024-01-27 08:55:39',
                'updated_at' => '2024-01-27 08:55:39',
            ),
            246 =>
            array (
                'id' => 1747,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.30',
                'variacao' => '0.02',
                'id_ativo' => 1747,
                'created_at' => '2024-01-27 08:55:40',
                'updated_at' => '2024-01-27 08:55:40',
            ),
            247 =>
            array (
                'id' => 1748,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1748,
                'created_at' => '2024-01-27 08:55:40',
                'updated_at' => '2024-01-27 08:55:40',
            ),
            248 =>
            array (
                'id' => 1749,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.21',
                'variacao' => '0.01',
                'id_ativo' => 1749,
                'created_at' => '2024-01-27 08:55:40',
                'updated_at' => '2024-01-27 08:55:40',
            ),
            249 =>
            array (
                'id' => 1750,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.62',
                'variacao' => '0.01',
                'id_ativo' => 1750,
                'created_at' => '2024-01-27 08:55:41',
                'updated_at' => '2024-01-27 08:55:41',
            ),
            250 =>
            array (
                'id' => 1751,
                'data' => '2024-01-27',
                'valor_fechamento' => '25.13',
                'variacao' => '-1.42',
                'id_ativo' => 1751,
                'created_at' => '2024-01-27 08:55:41',
                'updated_at' => '2024-01-27 08:55:41',
            ),
            251 =>
            array (
                'id' => 1752,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.12',
                'variacao' => '0.00',
                'id_ativo' => 1752,
                'created_at' => '2024-01-27 08:55:41',
                'updated_at' => '2024-01-27 08:55:41',
            ),
            252 =>
            array (
                'id' => 1753,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.21',
                'variacao' => '0.00',
                'id_ativo' => 1753,
                'created_at' => '2024-01-27 08:55:42',
                'updated_at' => '2024-01-27 08:55:42',
            ),
            253 =>
            array (
                'id' => 1754,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.17',
                'variacao' => '0.00',
                'id_ativo' => 1754,
                'created_at' => '2024-01-27 08:55:42',
                'updated_at' => '2024-01-27 08:55:42',
            ),
            254 =>
            array (
                'id' => 1755,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.56',
                'variacao' => '0.00',
                'id_ativo' => 1755,
                'created_at' => '2024-01-27 08:55:42',
                'updated_at' => '2024-01-27 08:55:42',
            ),
            255 =>
            array (
                'id' => 1756,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.21',
                'variacao' => '0.00',
                'id_ativo' => 1756,
                'created_at' => '2024-01-27 08:55:43',
                'updated_at' => '2024-01-27 08:55:43',
            ),
            256 =>
            array (
                'id' => 1757,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1757,
                'created_at' => '2024-01-27 08:55:43',
                'updated_at' => '2024-01-27 08:55:43',
            ),
            257 =>
            array (
                'id' => 1758,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.18',
                'variacao' => '0.09',
                'id_ativo' => 1758,
                'created_at' => '2024-01-27 08:55:43',
                'updated_at' => '2024-01-27 08:55:43',
            ),
            258 =>
            array (
                'id' => 1759,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.50',
                'variacao' => '0.03',
                'id_ativo' => 1759,
                'created_at' => '2024-01-27 08:55:44',
                'updated_at' => '2024-01-27 08:55:44',
            ),
            259 =>
            array (
                'id' => 1760,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1760,
                'created_at' => '2024-01-27 08:55:44',
                'updated_at' => '2024-01-27 08:55:44',
            ),
            260 =>
            array (
                'id' => 1761,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.29',
                'variacao' => '-0.01',
                'id_ativo' => 1761,
                'created_at' => '2024-01-27 08:55:44',
                'updated_at' => '2024-01-27 08:55:44',
            ),
            261 =>
            array (
                'id' => 1762,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.97',
                'variacao' => '0.02',
                'id_ativo' => 1762,
                'created_at' => '2024-01-27 08:55:45',
                'updated_at' => '2024-01-27 08:55:45',
            ),
            262 =>
            array (
                'id' => 1763,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.88',
                'variacao' => '-0.17',
                'id_ativo' => 1763,
                'created_at' => '2024-01-27 08:55:45',
                'updated_at' => '2024-01-27 08:55:45',
            ),
            263 =>
            array (
                'id' => 1764,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.45',
                'variacao' => '0.02',
                'id_ativo' => 1764,
                'created_at' => '2024-01-27 08:55:45',
                'updated_at' => '2024-01-27 08:55:45',
            ),
            264 =>
            array (
                'id' => 1765,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.06',
                'variacao' => '0.04',
                'id_ativo' => 1765,
                'created_at' => '2024-01-27 08:55:46',
                'updated_at' => '2024-01-27 08:55:46',
            ),
            265 =>
            array (
                'id' => 1766,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.99',
                'variacao' => '0.16',
                'id_ativo' => 1766,
                'created_at' => '2024-01-27 08:55:46',
                'updated_at' => '2024-01-27 08:55:46',
            ),
            266 =>
            array (
                'id' => 1767,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.26',
                'variacao' => '-0.01',
                'id_ativo' => 1767,
                'created_at' => '2024-01-27 08:55:46',
                'updated_at' => '2024-01-27 08:55:46',
            ),
            267 =>
            array (
                'id' => 1768,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1768,
                'created_at' => '2024-01-27 08:55:47',
                'updated_at' => '2024-01-27 08:55:47',
            ),
            268 =>
            array (
                'id' => 1769,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.01',
                'variacao' => '0.06',
                'id_ativo' => 1769,
                'created_at' => '2024-01-27 08:55:47',
                'updated_at' => '2024-01-27 08:55:47',
            ),
            269 =>
            array (
                'id' => 1770,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1770,
                'created_at' => '2024-01-27 08:55:47',
                'updated_at' => '2024-01-27 08:55:47',
            ),
            270 =>
            array (
                'id' => 1771,
                'data' => '2024-01-27',
                'valor_fechamento' => '1042.81',
                'variacao' => '21.36',
                'id_ativo' => 1771,
                'created_at' => '2024-01-27 08:55:48',
                'updated_at' => '2024-01-27 08:55:48',
            ),
            271 =>
            array (
                'id' => 1772,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.06',
                'variacao' => '0.00',
                'id_ativo' => 1772,
                'created_at' => '2024-01-27 08:55:48',
                'updated_at' => '2024-01-27 08:55:48',
            ),
            272 =>
            array (
                'id' => 1773,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1773,
                'created_at' => '2024-01-27 08:55:48',
                'updated_at' => '2024-01-27 08:55:48',
            ),
            273 =>
            array (
                'id' => 1774,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.27',
                'variacao' => '0.01',
                'id_ativo' => 1774,
                'created_at' => '2024-01-27 08:55:49',
                'updated_at' => '2024-01-27 08:55:49',
            ),
            274 =>
            array (
                'id' => 1775,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.53',
                'variacao' => '-0.31',
                'id_ativo' => 1775,
                'created_at' => '2024-01-27 08:55:49',
                'updated_at' => '2024-01-27 08:55:49',
            ),
            275 =>
            array (
                'id' => 1776,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.03',
                'variacao' => '0.00',
                'id_ativo' => 1776,
                'created_at' => '2024-01-27 08:55:49',
                'updated_at' => '2024-01-27 08:55:49',
            ),
            276 =>
            array (
                'id' => 1777,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.09',
                'variacao' => '0.00',
                'id_ativo' => 1777,
                'created_at' => '2024-01-27 08:55:49',
                'updated_at' => '2024-01-27 08:55:49',
            ),
            277 =>
            array (
                'id' => 1778,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.20',
                'variacao' => '0.00',
                'id_ativo' => 1778,
                'created_at' => '2024-01-27 08:55:50',
                'updated_at' => '2024-01-27 08:55:50',
            ),
            278 =>
            array (
                'id' => 1779,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.03',
                'variacao' => '0.03',
                'id_ativo' => 1779,
                'created_at' => '2024-01-27 08:55:50',
                'updated_at' => '2024-01-27 08:55:50',
            ),
            279 =>
            array (
                'id' => 1780,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.15',
                'variacao' => '0.06',
                'id_ativo' => 1780,
                'created_at' => '2024-01-27 08:55:50',
                'updated_at' => '2024-01-27 08:55:50',
            ),
            280 =>
            array (
                'id' => 1781,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.27',
                'variacao' => '0.00',
                'id_ativo' => 1781,
                'created_at' => '2024-01-27 08:55:51',
                'updated_at' => '2024-01-27 08:55:51',
            ),
            281 =>
            array (
                'id' => 1782,
                'data' => '2024-01-27',
                'valor_fechamento' => '10.22',
                'variacao' => '-0.11',
                'id_ativo' => 1782,
                'created_at' => '2024-01-27 08:55:51',
                'updated_at' => '2024-01-27 08:55:51',
            ),
            282 =>
            array (
                'id' => 1783,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.53',
                'variacao' => '0.00',
                'id_ativo' => 1783,
                'created_at' => '2024-01-27 08:55:51',
                'updated_at' => '2024-01-27 08:55:51',
            ),
            283 =>
            array (
                'id' => 1784,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.04',
                'variacao' => '-0.17',
                'id_ativo' => 1784,
                'created_at' => '2024-01-27 08:55:52',
                'updated_at' => '2024-01-27 08:55:52',
            ),
            284 =>
            array (
                'id' => 1785,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.30',
                'variacao' => '0.00',
                'id_ativo' => 1785,
                'created_at' => '2024-01-27 08:55:52',
                'updated_at' => '2024-01-27 08:55:52',
            ),
            285 =>
            array (
                'id' => 1786,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.47',
                'variacao' => '0.00',
                'id_ativo' => 1786,
                'created_at' => '2024-01-27 08:55:52',
                'updated_at' => '2024-01-27 08:55:52',
            ),
            286 =>
            array (
                'id' => 1787,
                'data' => '2024-01-27',
                'valor_fechamento' => '9.14',
                'variacao' => '0.25',
                'id_ativo' => 1787,
                'created_at' => '2024-01-27 08:55:53',
                'updated_at' => '2024-01-27 08:55:53',
            ),
            287 =>
            array (
                'id' => 1788,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.43',
                'variacao' => '0.01',
                'id_ativo' => 1788,
                'created_at' => '2024-01-27 08:55:53',
                'updated_at' => '2024-01-27 08:55:53',
            ),
            288 =>
            array (
                'id' => 1789,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.47',
                'variacao' => '-0.01',
                'id_ativo' => 1789,
                'created_at' => '2024-01-27 08:55:53',
                'updated_at' => '2024-01-27 08:55:53',
            ),
            289 =>
            array (
                'id' => 1790,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1790,
                'created_at' => '2024-01-27 08:55:54',
                'updated_at' => '2024-01-27 08:55:54',
            ),
            290 =>
            array (
                'id' => 1791,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.56',
                'variacao' => '0.00',
                'id_ativo' => 1791,
                'created_at' => '2024-01-27 08:55:54',
                'updated_at' => '2024-01-27 08:55:54',
            ),
            291 =>
            array (
                'id' => 1792,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.09',
                'variacao' => '0.01',
                'id_ativo' => 1792,
                'created_at' => '2024-01-27 08:55:54',
                'updated_at' => '2024-01-27 08:55:54',
            ),
            292 =>
            array (
                'id' => 1793,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.66',
                'variacao' => '0.05',
                'id_ativo' => 1793,
                'created_at' => '2024-01-27 08:55:55',
                'updated_at' => '2024-01-27 08:55:55',
            ),
            293 =>
            array (
                'id' => 1794,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.42',
                'variacao' => '0.00',
                'id_ativo' => 1794,
                'created_at' => '2024-01-27 08:55:55',
                'updated_at' => '2024-01-27 08:55:55',
            ),
            294 =>
            array (
                'id' => 1795,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.51',
                'variacao' => '0.00',
                'id_ativo' => 1795,
                'created_at' => '2024-01-27 08:55:55',
                'updated_at' => '2024-01-27 08:55:55',
            ),
            295 =>
            array (
                'id' => 1796,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.11',
                'variacao' => '0.00',
                'id_ativo' => 1796,
                'created_at' => '2024-01-27 08:55:56',
                'updated_at' => '2024-01-27 08:55:56',
            ),
            296 =>
            array (
                'id' => 1797,
                'data' => '2024-01-27',
                'valor_fechamento' => '93.85',
                'variacao' => '6.15',
                'id_ativo' => 1797,
                'created_at' => '2024-01-27 08:55:56',
                'updated_at' => '2024-01-27 08:55:56',
            ),
            297 =>
            array (
                'id' => 1798,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.05',
                'variacao' => '0.00',
                'id_ativo' => 1798,
                'created_at' => '2024-01-27 08:55:56',
                'updated_at' => '2024-01-27 08:55:56',
            ),
            298 =>
            array (
                'id' => 1799,
                'data' => '2024-01-27',
                'valor_fechamento' => '28.26',
                'variacao' => '0.20',
                'id_ativo' => 1799,
                'created_at' => '2024-01-27 08:55:57',
                'updated_at' => '2024-01-27 08:55:57',
            ),
            299 =>
            array (
                'id' => 1800,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1800,
                'created_at' => '2024-01-27 08:55:57',
                'updated_at' => '2024-01-27 08:55:57',
            ),
            300 =>
            array (
                'id' => 1801,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.95',
                'variacao' => '0.05',
                'id_ativo' => 1801,
                'created_at' => '2024-01-27 08:55:57',
                'updated_at' => '2024-01-27 08:55:57',
            ),
            301 =>
            array (
                'id' => 1802,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.39',
                'variacao' => '0.12',
                'id_ativo' => 1802,
                'created_at' => '2024-01-27 08:55:58',
                'updated_at' => '2024-01-27 08:55:58',
            ),
            302 =>
            array (
                'id' => 1803,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.87',
                'variacao' => '0.02',
                'id_ativo' => 1803,
                'created_at' => '2024-01-27 08:55:58',
                'updated_at' => '2024-01-27 08:55:58',
            ),
            303 =>
            array (
                'id' => 1804,
                'data' => '2024-01-27',
                'valor_fechamento' => '4.18',
                'variacao' => '-0.27',
                'id_ativo' => 1804,
                'created_at' => '2024-01-27 08:55:58',
                'updated_at' => '2024-01-27 08:55:58',
            ),
            304 =>
            array (
                'id' => 1805,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1805,
                'created_at' => '2024-01-27 08:55:58',
                'updated_at' => '2024-01-27 08:55:58',
            ),
            305 =>
            array (
                'id' => 1806,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.05',
                'variacao' => '0.03',
                'id_ativo' => 1806,
                'created_at' => '2024-01-27 08:55:59',
                'updated_at' => '2024-01-27 08:55:59',
            ),
            306 =>
            array (
                'id' => 1807,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.03',
                'variacao' => '0.00',
                'id_ativo' => 1807,
                'created_at' => '2024-01-27 08:55:59',
                'updated_at' => '2024-01-27 08:55:59',
            ),
            307 =>
            array (
                'id' => 1808,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.18',
                'variacao' => '0.00',
                'id_ativo' => 1808,
                'created_at' => '2024-01-27 08:55:59',
                'updated_at' => '2024-01-27 08:55:59',
            ),
            308 =>
            array (
                'id' => 1809,
                'data' => '2024-01-27',
                'valor_fechamento' => '60.28',
                'variacao' => '0.21',
                'id_ativo' => 1809,
                'created_at' => '2024-01-27 08:56:00',
                'updated_at' => '2024-01-27 08:56:00',
            ),
            309 =>
            array (
                'id' => 1810,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.59',
                'variacao' => '0.01',
                'id_ativo' => 1810,
                'created_at' => '2024-01-27 08:56:00',
                'updated_at' => '2024-01-27 08:56:00',
            ),
            310 =>
            array (
                'id' => 1811,
                'data' => '2024-01-27',
                'valor_fechamento' => '12.81',
                'variacao' => '0.18',
                'id_ativo' => 1811,
                'created_at' => '2024-01-27 08:56:00',
                'updated_at' => '2024-01-27 08:56:00',
            ),
            311 =>
            array (
                'id' => 1812,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.18',
                'variacao' => '-0.01',
                'id_ativo' => 1812,
                'created_at' => '2024-01-27 08:56:01',
                'updated_at' => '2024-01-27 08:56:01',
            ),
            312 =>
            array (
                'id' => 1813,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.25',
                'variacao' => '0.02',
                'id_ativo' => 1813,
                'created_at' => '2024-01-27 08:56:01',
                'updated_at' => '2024-01-27 08:56:01',
            ),
            313 =>
            array (
                'id' => 1814,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.18',
                'variacao' => '0.01',
                'id_ativo' => 1814,
                'created_at' => '2024-01-27 08:56:01',
                'updated_at' => '2024-01-27 08:56:01',
            ),
            314 =>
            array (
                'id' => 1815,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.14',
                'variacao' => '0.01',
                'id_ativo' => 1815,
                'created_at' => '2024-01-27 08:56:02',
                'updated_at' => '2024-01-27 08:56:02',
            ),
            315 =>
            array (
                'id' => 1816,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1816,
                'created_at' => '2024-01-27 08:56:02',
                'updated_at' => '2024-01-27 08:56:02',
            ),
            316 =>
            array (
                'id' => 1817,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.56',
                'variacao' => '0.00',
                'id_ativo' => 1817,
                'created_at' => '2024-01-27 08:56:02',
                'updated_at' => '2024-01-27 08:56:02',
            ),
            317 =>
            array (
                'id' => 1818,
                'data' => '2024-01-27',
                'valor_fechamento' => '5.04',
                'variacao' => '0.03',
                'id_ativo' => 1818,
                'created_at' => '2024-01-27 08:56:03',
                'updated_at' => '2024-01-27 08:56:03',
            ),
            318 =>
            array (
                'id' => 1819,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.12',
                'variacao' => '0.00',
                'id_ativo' => 1819,
                'created_at' => '2024-01-27 08:56:03',
                'updated_at' => '2024-01-27 08:56:03',
            ),
            319 =>
            array (
                'id' => 1820,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1820,
                'created_at' => '2024-01-27 08:56:03',
                'updated_at' => '2024-01-27 08:56:03',
            ),
            320 =>
            array (
                'id' => 1821,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.13',
                'variacao' => '0.00',
                'id_ativo' => 1821,
                'created_at' => '2024-01-27 08:56:04',
                'updated_at' => '2024-01-27 08:56:04',
            ),
            321 =>
            array (
                'id' => 1822,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1822,
                'created_at' => '2024-01-27 08:56:04',
                'updated_at' => '2024-01-27 08:56:04',
            ),
            322 =>
            array (
                'id' => 1823,
                'data' => '2024-01-27',
                'valor_fechamento' => '27.73',
                'variacao' => '0.06',
                'id_ativo' => 1823,
                'created_at' => '2024-01-27 08:56:04',
                'updated_at' => '2024-01-27 08:56:04',
            ),
            323 =>
            array (
                'id' => 1824,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.19',
                'variacao' => '-0.01',
                'id_ativo' => 1824,
                'created_at' => '2024-01-27 08:56:05',
                'updated_at' => '2024-01-27 08:56:05',
            ),
            324 =>
            array (
                'id' => 1825,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.73',
                'variacao' => '-0.01',
                'id_ativo' => 1825,
                'created_at' => '2024-01-27 08:56:05',
                'updated_at' => '2024-01-27 08:56:05',
            ),
            325 =>
            array (
                'id' => 1826,
                'data' => '2024-01-27',
                'valor_fechamento' => '204856.97',
                'variacao' => '-37.87',
                'id_ativo' => 1826,
                'created_at' => '2024-01-27 08:56:05',
                'updated_at' => '2024-01-27 08:56:05',
            ),
            326 =>
            array (
                'id' => 1827,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.96',
                'variacao' => '0.22',
                'id_ativo' => 1827,
                'created_at' => '2024-01-27 08:56:06',
                'updated_at' => '2024-01-27 08:56:06',
            ),
            327 =>
            array (
                'id' => 1828,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1828,
                'created_at' => '2024-01-27 08:56:06',
                'updated_at' => '2024-01-27 08:56:06',
            ),
            328 =>
            array (
                'id' => 1829,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.57',
                'variacao' => '0.06',
                'id_ativo' => 1829,
                'created_at' => '2024-01-27 08:56:06',
                'updated_at' => '2024-01-27 08:56:06',
            ),
            329 =>
            array (
                'id' => 1830,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.01',
                'id_ativo' => 1830,
                'created_at' => '2024-01-27 08:56:07',
                'updated_at' => '2024-01-27 08:56:07',
            ),
            330 =>
            array (
                'id' => 1831,
                'data' => '2024-01-27',
                'valor_fechamento' => '8.06',
                'variacao' => '0.04',
                'id_ativo' => 1831,
                'created_at' => '2024-01-27 08:56:07',
                'updated_at' => '2024-01-27 08:56:07',
            ),
            331 =>
            array (
                'id' => 1832,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1832,
                'created_at' => '2024-01-27 08:56:07',
                'updated_at' => '2024-01-27 08:56:07',
            ),
            332 =>
            array (
                'id' => 1833,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1833,
                'created_at' => '2024-01-27 08:56:08',
                'updated_at' => '2024-01-27 08:56:08',
            ),
            333 =>
            array (
                'id' => 1834,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1834,
                'created_at' => '2024-01-27 08:56:08',
                'updated_at' => '2024-01-27 08:56:08',
            ),
            334 =>
            array (
                'id' => 1835,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1835,
                'created_at' => '2024-01-27 08:56:08',
                'updated_at' => '2024-01-27 08:56:08',
            ),
            335 =>
            array (
                'id' => 1836,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.14',
                'variacao' => '0.01',
                'id_ativo' => 1836,
                'created_at' => '2024-01-27 08:56:09',
                'updated_at' => '2024-01-27 08:56:09',
            ),
            336 =>
            array (
                'id' => 1837,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.59',
                'variacao' => '0.06',
                'id_ativo' => 1837,
                'created_at' => '2024-01-27 08:56:09',
                'updated_at' => '2024-01-27 08:56:09',
            ),
            337 =>
            array (
                'id' => 1838,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.58',
                'variacao' => '0.00',
                'id_ativo' => 1838,
                'created_at' => '2024-01-27 08:56:09',
                'updated_at' => '2024-01-27 08:56:09',
            ),
            338 =>
            array (
                'id' => 1839,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1839,
                'created_at' => '2024-01-27 08:56:10',
                'updated_at' => '2024-01-27 08:56:10',
            ),
            339 =>
            array (
                'id' => 1840,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.06',
                'variacao' => '0.00',
                'id_ativo' => 1840,
                'created_at' => '2024-01-27 08:56:10',
                'updated_at' => '2024-01-27 08:56:10',
            ),
            340 =>
            array (
                'id' => 1841,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1841,
                'created_at' => '2024-01-27 08:56:10',
                'updated_at' => '2024-01-27 08:56:10',
            ),
            341 =>
            array (
                'id' => 1842,
                'data' => '2024-01-27',
                'valor_fechamento' => '17.18',
                'variacao' => '-0.32',
                'id_ativo' => 1842,
                'created_at' => '2024-01-27 08:56:10',
                'updated_at' => '2024-01-27 08:56:10',
            ),
            342 =>
            array (
                'id' => 1843,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.87',
                'variacao' => '0.01',
                'id_ativo' => 1843,
                'created_at' => '2024-01-27 08:56:11',
                'updated_at' => '2024-01-27 08:56:11',
            ),
            343 =>
            array (
                'id' => 1844,
                'data' => '2024-01-27',
                'valor_fechamento' => '19.25',
                'variacao' => '0.10',
                'id_ativo' => 1844,
                'created_at' => '2024-01-27 08:56:11',
                'updated_at' => '2024-01-27 08:56:11',
            ),
            344 =>
            array (
                'id' => 1845,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1845,
                'created_at' => '2024-01-27 08:56:11',
                'updated_at' => '2024-01-27 08:56:11',
            ),
            345 =>
            array (
                'id' => 1846,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.48',
                'variacao' => '0.02',
                'id_ativo' => 1846,
                'created_at' => '2024-01-27 08:56:12',
                'updated_at' => '2024-01-27 08:56:12',
            ),
            346 =>
            array (
                'id' => 1847,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.56',
                'variacao' => '0.00',
                'id_ativo' => 1847,
                'created_at' => '2024-01-27 08:56:12',
                'updated_at' => '2024-01-27 08:56:12',
            ),
            347 =>
            array (
                'id' => 1848,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.16',
                'variacao' => '0.02',
                'id_ativo' => 1848,
                'created_at' => '2024-01-27 08:56:12',
                'updated_at' => '2024-01-27 08:56:12',
            ),
            348 =>
            array (
                'id' => 1849,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1849,
                'created_at' => '2024-01-27 08:56:13',
                'updated_at' => '2024-01-27 08:56:13',
            ),
            349 =>
            array (
                'id' => 1850,
                'data' => '2024-01-27',
                'valor_fechamento' => '6.97',
                'variacao' => '0.29',
                'id_ativo' => 1850,
                'created_at' => '2024-01-27 08:56:13',
                'updated_at' => '2024-01-27 08:56:13',
            ),
            350 =>
            array (
                'id' => 1851,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1851,
                'created_at' => '2024-01-27 08:56:13',
                'updated_at' => '2024-01-27 08:56:13',
            ),
            351 =>
            array (
                'id' => 1852,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.50',
                'variacao' => '-0.02',
                'id_ativo' => 1852,
                'created_at' => '2024-01-27 08:56:14',
                'updated_at' => '2024-01-27 08:56:14',
            ),
            352 =>
            array (
                'id' => 1853,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.61',
                'variacao' => '0.04',
                'id_ativo' => 1853,
                'created_at' => '2024-01-27 08:56:14',
                'updated_at' => '2024-01-27 08:56:14',
            ),
            353 =>
            array (
                'id' => 1854,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.15',
                'variacao' => '0.00',
                'id_ativo' => 1854,
                'created_at' => '2024-01-27 08:56:14',
                'updated_at' => '2024-01-27 08:56:14',
            ),
            354 =>
            array (
                'id' => 1855,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.45',
                'variacao' => '0.02',
                'id_ativo' => 1855,
                'created_at' => '2024-01-27 08:56:15',
                'updated_at' => '2024-01-27 08:56:15',
            ),
            355 =>
            array (
                'id' => 1856,
                'data' => '2024-01-27',
                'valor_fechamento' => '336.16',
                'variacao' => '131.67',
                'id_ativo' => 1856,
                'created_at' => '2024-01-27 08:56:15',
                'updated_at' => '2024-01-27 08:56:15',
            ),
            356 =>
            array (
                'id' => 1857,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1857,
                'created_at' => '2024-01-27 08:56:15',
                'updated_at' => '2024-01-27 08:56:15',
            ),
            357 =>
            array (
                'id' => 1858,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.35',
                'variacao' => '0.25',
                'id_ativo' => 1858,
                'created_at' => '2024-01-27 08:56:16',
                'updated_at' => '2024-01-27 08:56:16',
            ),
            358 =>
            array (
                'id' => 1859,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1859,
                'created_at' => '2024-01-27 08:56:16',
                'updated_at' => '2024-01-27 08:56:16',
            ),
            359 =>
            array (
                'id' => 1860,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.10',
                'variacao' => '0.00',
                'id_ativo' => 1860,
                'created_at' => '2024-01-27 08:56:16',
                'updated_at' => '2024-01-27 08:56:16',
            ),
            360 =>
            array (
                'id' => 1861,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1861,
                'created_at' => '2024-01-27 08:56:17',
                'updated_at' => '2024-01-27 08:56:17',
            ),
            361 =>
            array (
                'id' => 1862,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.39',
                'variacao' => '-0.08',
                'id_ativo' => 1862,
                'created_at' => '2024-01-27 08:56:17',
                'updated_at' => '2024-01-27 08:56:17',
            ),
            362 =>
            array (
                'id' => 1863,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1863,
                'created_at' => '2024-01-27 08:56:17',
                'updated_at' => '2024-01-27 08:56:17',
            ),
            363 =>
            array (
                'id' => 1864,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.08',
                'variacao' => '0.00',
                'id_ativo' => 1864,
                'created_at' => '2024-01-27 08:56:18',
                'updated_at' => '2024-01-27 08:56:18',
            ),
            364 =>
            array (
                'id' => 1865,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1865,
                'created_at' => '2024-01-27 08:56:18',
                'updated_at' => '2024-01-27 08:56:18',
            ),
            365 =>
            array (
                'id' => 1866,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.67',
                'variacao' => '-0.03',
                'id_ativo' => 1866,
                'created_at' => '2024-01-27 08:56:18',
                'updated_at' => '2024-01-27 08:56:18',
            ),
            366 =>
            array (
                'id' => 1867,
                'data' => '2024-01-27',
                'valor_fechamento' => '22.79',
                'variacao' => '1.07',
                'id_ativo' => 1867,
                'created_at' => '2024-01-27 08:56:18',
                'updated_at' => '2024-01-27 08:56:18',
            ),
            367 =>
            array (
                'id' => 1868,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.12',
                'variacao' => '0.06',
                'id_ativo' => 1868,
                'created_at' => '2024-01-27 08:56:19',
                'updated_at' => '2024-01-27 08:56:19',
            ),
            368 =>
            array (
                'id' => 1869,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.48',
                'variacao' => '0.00',
                'id_ativo' => 1869,
                'created_at' => '2024-01-27 08:56:19',
                'updated_at' => '2024-01-27 08:56:19',
            ),
            369 =>
            array (
                'id' => 1870,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1870,
                'created_at' => '2024-01-27 08:56:19',
                'updated_at' => '2024-01-27 08:56:19',
            ),
            370 =>
            array (
                'id' => 1871,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1871,
                'created_at' => '2024-01-27 08:56:20',
                'updated_at' => '2024-01-27 08:56:20',
            ),
            371 =>
            array (
                'id' => 1872,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1872,
                'created_at' => '2024-01-27 08:56:20',
                'updated_at' => '2024-01-27 08:56:20',
            ),
            372 =>
            array (
                'id' => 1873,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1873,
                'created_at' => '2024-01-27 08:56:20',
                'updated_at' => '2024-01-27 08:56:20',
            ),
            373 =>
            array (
                'id' => 1874,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1874,
                'created_at' => '2024-01-27 08:56:21',
                'updated_at' => '2024-01-27 08:56:21',
            ),
            374 =>
            array (
                'id' => 1875,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1875,
                'created_at' => '2024-01-27 08:56:21',
                'updated_at' => '2024-01-27 08:56:21',
            ),
            375 =>
            array (
                'id' => 1876,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.18',
                'variacao' => '0.01',
                'id_ativo' => 1876,
                'created_at' => '2024-01-27 08:56:21',
                'updated_at' => '2024-01-27 08:56:21',
            ),
            376 =>
            array (
                'id' => 1877,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.78',
                'variacao' => '-0.03',
                'id_ativo' => 1877,
                'created_at' => '2024-01-27 08:56:22',
                'updated_at' => '2024-01-27 08:56:22',
            ),
            377 =>
            array (
                'id' => 1878,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.22',
                'variacao' => '0.00',
                'id_ativo' => 1878,
                'created_at' => '2024-01-27 08:56:22',
                'updated_at' => '2024-01-27 08:56:22',
            ),
            378 =>
            array (
                'id' => 1879,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1879,
                'created_at' => '2024-01-27 08:56:22',
                'updated_at' => '2024-01-27 08:56:22',
            ),
            379 =>
            array (
                'id' => 1880,
                'data' => '2024-01-27',
                'valor_fechamento' => '105.86',
                'variacao' => '-6.60',
                'id_ativo' => 1880,
                'created_at' => '2024-01-27 08:56:23',
                'updated_at' => '2024-01-27 08:56:23',
            ),
            380 =>
            array (
                'id' => 1881,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.10',
                'variacao' => '0.00',
                'id_ativo' => 1881,
                'created_at' => '2024-01-27 08:56:23',
                'updated_at' => '2024-01-27 08:56:23',
            ),
            381 =>
            array (
                'id' => 1882,
                'data' => '2024-01-27',
                'valor_fechamento' => '7.95',
                'variacao' => '-0.71',
                'id_ativo' => 1882,
                'created_at' => '2024-01-27 08:56:23',
                'updated_at' => '2024-01-27 08:56:23',
            ),
            382 =>
            array (
                'id' => 1883,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.34',
                'variacao' => '0.00',
                'id_ativo' => 1883,
                'created_at' => '2024-01-27 08:56:24',
                'updated_at' => '2024-01-27 08:56:24',
            ),
            383 =>
            array (
                'id' => 1884,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1884,
                'created_at' => '2024-01-27 08:56:24',
                'updated_at' => '2024-01-27 08:56:24',
            ),
            384 =>
            array (
                'id' => 1885,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.64',
                'variacao' => '0.72',
                'id_ativo' => 1885,
                'created_at' => '2024-01-27 08:56:24',
                'updated_at' => '2024-01-27 08:56:24',
            ),
            385 =>
            array (
                'id' => 1886,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1886,
                'created_at' => '2024-01-27 08:56:25',
                'updated_at' => '2024-01-27 08:56:25',
            ),
            386 =>
            array (
                'id' => 1887,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.27',
                'variacao' => '0.00',
                'id_ativo' => 1887,
                'created_at' => '2024-01-27 08:56:25',
                'updated_at' => '2024-01-27 08:56:25',
            ),
            387 =>
            array (
                'id' => 1888,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.46',
                'variacao' => '0.02',
                'id_ativo' => 1888,
                'created_at' => '2024-01-27 08:56:25',
                'updated_at' => '2024-01-27 08:56:25',
            ),
            388 =>
            array (
                'id' => 1889,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.03',
                'variacao' => '0.00',
                'id_ativo' => 1889,
                'created_at' => '2024-01-27 08:56:26',
                'updated_at' => '2024-01-27 08:56:26',
            ),
            389 =>
            array (
                'id' => 1890,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.07',
                'variacao' => '0.00',
                'id_ativo' => 1890,
                'created_at' => '2024-01-27 08:56:26',
                'updated_at' => '2024-01-27 08:56:26',
            ),
            390 =>
            array (
                'id' => 1891,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.13',
                'variacao' => '-0.01',
                'id_ativo' => 1891,
                'created_at' => '2024-01-27 08:56:26',
                'updated_at' => '2024-01-27 08:56:26',
            ),
            391 =>
            array (
                'id' => 1892,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.75',
                'variacao' => '0.06',
                'id_ativo' => 1892,
                'created_at' => '2024-01-27 08:56:27',
                'updated_at' => '2024-01-27 08:56:27',
            ),
            392 =>
            array (
                'id' => 1893,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1893,
                'created_at' => '2024-01-27 08:56:27',
                'updated_at' => '2024-01-27 08:56:27',
            ),
            393 =>
            array (
                'id' => 1894,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1894,
                'created_at' => '2024-01-27 08:56:27',
                'updated_at' => '2024-01-27 08:56:27',
            ),
            394 =>
            array (
                'id' => 1895,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1895,
                'created_at' => '2024-01-27 08:56:27',
                'updated_at' => '2024-01-27 08:56:27',
            ),
            395 =>
            array (
                'id' => 1896,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.85',
                'variacao' => '-0.02',
                'id_ativo' => 1896,
                'created_at' => '2024-01-27 08:56:28',
                'updated_at' => '2024-01-27 08:56:28',
            ),
            396 =>
            array (
                'id' => 1897,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.13',
                'variacao' => '0.01',
                'id_ativo' => 1897,
                'created_at' => '2024-01-27 08:56:28',
                'updated_at' => '2024-01-27 08:56:28',
            ),
            397 =>
            array (
                'id' => 1898,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1898,
                'created_at' => '2024-01-27 08:56:28',
                'updated_at' => '2024-01-27 08:56:28',
            ),
            398 =>
            array (
                'id' => 1899,
                'data' => '2024-01-27',
                'valor_fechamento' => '48.70',
                'variacao' => '1.71',
                'id_ativo' => 1899,
                'created_at' => '2024-01-27 08:56:29',
                'updated_at' => '2024-01-27 08:56:29',
            ),
            399 =>
            array (
                'id' => 1900,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.07',
                'variacao' => '0.00',
                'id_ativo' => 1900,
                'created_at' => '2024-01-27 08:56:29',
                'updated_at' => '2024-01-27 08:56:29',
            ),
            400 =>
            array (
                'id' => 1901,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1901,
                'created_at' => '2024-01-27 08:56:29',
                'updated_at' => '2024-01-27 08:56:29',
            ),
            401 =>
            array (
                'id' => 1902,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1902,
                'created_at' => '2024-01-27 08:56:30',
                'updated_at' => '2024-01-27 08:56:30',
            ),
            402 =>
            array (
                'id' => 1903,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.42',
                'variacao' => '0.01',
                'id_ativo' => 1903,
                'created_at' => '2024-01-27 08:56:30',
                'updated_at' => '2024-01-27 08:56:30',
            ),
            403 =>
            array (
                'id' => 1904,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.17',
                'variacao' => '0.00',
                'id_ativo' => 1904,
                'created_at' => '2024-01-27 08:56:30',
                'updated_at' => '2024-01-27 08:56:30',
            ),
            404 =>
            array (
                'id' => 1905,
                'data' => '2024-01-27',
                'valor_fechamento' => '3.40',
                'variacao' => '0.00',
                'id_ativo' => 1905,
                'created_at' => '2024-01-27 08:56:31',
                'updated_at' => '2024-01-27 08:56:31',
            ),
            405 =>
            array (
                'id' => 1906,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1906,
                'created_at' => '2024-01-27 08:56:31',
                'updated_at' => '2024-01-27 08:56:31',
            ),
            406 =>
            array (
                'id' => 1907,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.08',
                'variacao' => '0.00',
                'id_ativo' => 1907,
                'created_at' => '2024-01-27 08:56:31',
                'updated_at' => '2024-01-27 08:56:31',
            ),
            407 =>
            array (
                'id' => 1908,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.91',
                'variacao' => '-0.03',
                'id_ativo' => 1908,
                'created_at' => '2024-01-27 08:56:32',
                'updated_at' => '2024-01-27 08:56:32',
            ),
            408 =>
            array (
                'id' => 1909,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1909,
                'created_at' => '2024-01-27 08:56:32',
                'updated_at' => '2024-01-27 08:56:32',
            ),
            409 =>
            array (
                'id' => 1910,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1910,
                'created_at' => '2024-01-27 08:56:32',
                'updated_at' => '2024-01-27 08:56:32',
            ),
            410 =>
            array (
                'id' => 1911,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.29',
                'variacao' => '0.00',
                'id_ativo' => 1911,
                'created_at' => '2024-01-27 08:56:33',
                'updated_at' => '2024-01-27 08:56:33',
            ),
            411 =>
            array (
                'id' => 1912,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.35',
                'variacao' => '0.00',
                'id_ativo' => 1912,
                'created_at' => '2024-01-27 08:56:33',
                'updated_at' => '2024-01-27 08:56:33',
            ),
            412 =>
            array (
                'id' => 1913,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1913,
                'created_at' => '2024-01-27 08:56:33',
                'updated_at' => '2024-01-27 08:56:33',
            ),
            413 =>
            array (
                'id' => 1914,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1914,
                'created_at' => '2024-01-27 08:56:34',
                'updated_at' => '2024-01-27 08:56:34',
            ),
            414 =>
            array (
                'id' => 1915,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1915,
                'created_at' => '2024-01-27 08:56:34',
                'updated_at' => '2024-01-27 08:56:34',
            ),
            415 =>
            array (
                'id' => 1916,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1916,
                'created_at' => '2024-01-27 08:56:34',
                'updated_at' => '2024-01-27 08:56:34',
            ),
            416 =>
            array (
                'id' => 1917,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1917,
                'created_at' => '2024-01-27 08:56:35',
                'updated_at' => '2024-01-27 08:56:35',
            ),
            417 =>
            array (
                'id' => 1918,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1918,
                'created_at' => '2024-01-27 08:56:35',
                'updated_at' => '2024-01-27 08:56:35',
            ),
            418 =>
            array (
                'id' => 1919,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.10',
                'variacao' => '0.00',
                'id_ativo' => 1919,
                'created_at' => '2024-01-27 08:56:35',
                'updated_at' => '2024-01-27 08:56:35',
            ),
            419 =>
            array (
                'id' => 1920,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1920,
                'created_at' => '2024-01-27 08:56:36',
                'updated_at' => '2024-01-27 08:56:36',
            ),
            420 =>
            array (
                'id' => 1921,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1921,
                'created_at' => '2024-01-27 08:56:36',
                'updated_at' => '2024-01-27 08:56:36',
            ),
            421 =>
            array (
                'id' => 1922,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.33',
                'variacao' => '0.00',
                'id_ativo' => 1922,
                'created_at' => '2024-01-27 08:56:36',
                'updated_at' => '2024-01-27 08:56:36',
            ),
            422 =>
            array (
                'id' => 1923,
                'data' => '2024-01-27',
                'valor_fechamento' => '2.67',
                'variacao' => '0.10',
                'id_ativo' => 1923,
                'created_at' => '2024-01-27 08:56:37',
                'updated_at' => '2024-01-27 08:56:37',
            ),
            423 =>
            array (
                'id' => 1924,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1924,
                'created_at' => '2024-01-27 08:56:37',
                'updated_at' => '2024-01-27 08:56:37',
            ),
            424 =>
            array (
                'id' => 1925,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.25',
                'variacao' => '-0.01',
                'id_ativo' => 1925,
                'created_at' => '2024-01-27 08:56:37',
                'updated_at' => '2024-01-27 08:56:37',
            ),
            425 =>
            array (
                'id' => 1926,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.11',
                'variacao' => '0.00',
                'id_ativo' => 1926,
                'created_at' => '2024-01-27 08:56:38',
                'updated_at' => '2024-01-27 08:56:38',
            ),
            426 =>
            array (
                'id' => 1927,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.26',
                'variacao' => '0.00',
                'id_ativo' => 1927,
                'created_at' => '2024-01-27 08:56:38',
                'updated_at' => '2024-01-27 08:56:38',
            ),
            427 =>
            array (
                'id' => 1928,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.12',
                'variacao' => '-0.03',
                'id_ativo' => 1928,
                'created_at' => '2024-01-27 08:56:38',
                'updated_at' => '2024-01-27 08:56:38',
            ),
            428 =>
            array (
                'id' => 1929,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1929,
                'created_at' => '2024-01-27 08:56:39',
                'updated_at' => '2024-01-27 08:56:39',
            ),
            429 =>
            array (
                'id' => 1930,
                'data' => '2024-01-27',
                'valor_fechamento' => '15.74',
                'variacao' => '-0.60',
                'id_ativo' => 1930,
                'created_at' => '2024-01-27 08:56:39',
                'updated_at' => '2024-01-27 08:56:39',
            ),
            430 =>
            array (
                'id' => 1931,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1931,
                'created_at' => '2024-01-27 08:56:39',
                'updated_at' => '2024-01-27 08:56:39',
            ),
            431 =>
            array (
                'id' => 1932,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.03',
                'variacao' => '-0.01',
                'id_ativo' => 1932,
                'created_at' => '2024-01-27 08:56:39',
                'updated_at' => '2024-01-27 08:56:39',
            ),
            432 =>
            array (
                'id' => 1933,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.03',
                'variacao' => '0.00',
                'id_ativo' => 1933,
                'created_at' => '2024-01-27 08:56:40',
                'updated_at' => '2024-01-27 08:56:40',
            ),
            433 =>
            array (
                'id' => 1934,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1934,
                'created_at' => '2024-01-27 08:56:40',
                'updated_at' => '2024-01-27 08:56:40',
            ),
            434 =>
            array (
                'id' => 1935,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1935,
                'created_at' => '2024-01-27 08:56:40',
                'updated_at' => '2024-01-27 08:56:40',
            ),
            435 =>
            array (
                'id' => 1936,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1936,
                'created_at' => '2024-01-27 08:56:41',
                'updated_at' => '2024-01-27 08:56:41',
            ),
            436 =>
            array (
                'id' => 1937,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1937,
                'created_at' => '2024-01-27 08:56:41',
                'updated_at' => '2024-01-27 08:56:41',
            ),
            437 =>
            array (
                'id' => 1938,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.03',
                'variacao' => '0.00',
                'id_ativo' => 1938,
                'created_at' => '2024-01-27 08:56:41',
                'updated_at' => '2024-01-27 08:56:41',
            ),
            438 =>
            array (
                'id' => 1939,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.04',
                'variacao' => '0.00',
                'id_ativo' => 1939,
                'created_at' => '2024-01-27 08:56:42',
                'updated_at' => '2024-01-27 08:56:42',
            ),
            439 =>
            array (
                'id' => 1940,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1940,
                'created_at' => '2024-01-27 08:56:42',
                'updated_at' => '2024-01-27 08:56:42',
            ),
            440 =>
            array (
                'id' => 1941,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1941,
                'created_at' => '2024-01-27 08:56:42',
                'updated_at' => '2024-01-27 08:56:42',
            ),
            441 =>
            array (
                'id' => 1942,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1942,
                'created_at' => '2024-01-27 08:56:43',
                'updated_at' => '2024-01-27 08:56:43',
            ),
            442 =>
            array (
                'id' => 1943,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.52',
                'variacao' => '-0.01',
                'id_ativo' => 1943,
                'created_at' => '2024-01-27 08:56:43',
                'updated_at' => '2024-01-27 08:56:43',
            ),
            443 =>
            array (
                'id' => 1944,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.05',
                'variacao' => '0.00',
                'id_ativo' => 1944,
                'created_at' => '2024-01-27 08:56:43',
                'updated_at' => '2024-01-27 08:56:43',
            ),
            444 =>
            array (
                'id' => 1945,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1945,
                'created_at' => '2024-01-27 08:56:44',
                'updated_at' => '2024-01-27 08:56:44',
            ),
            445 =>
            array (
                'id' => 1946,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1946,
                'created_at' => '2024-01-27 08:56:44',
                'updated_at' => '2024-01-27 08:56:44',
            ),
            446 =>
            array (
                'id' => 1947,
                'data' => '2024-01-27',
                'valor_fechamento' => '1.24',
                'variacao' => '0.02',
                'id_ativo' => 1947,
                'created_at' => '2024-01-27 08:56:44',
                'updated_at' => '2024-01-27 08:56:44',
            ),
            447 =>
            array (
                'id' => 1948,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1948,
                'created_at' => '2024-01-27 08:56:45',
                'updated_at' => '2024-01-27 08:56:45',
            ),
            448 =>
            array (
                'id' => 1949,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.12',
                'variacao' => '0.01',
                'id_ativo' => 1949,
                'created_at' => '2024-01-27 08:56:45',
                'updated_at' => '2024-01-27 08:56:45',
            ),
            449 =>
            array (
                'id' => 1950,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1950,
                'created_at' => '2024-01-27 08:56:45',
                'updated_at' => '2024-01-27 08:56:45',
            ),
            450 =>
            array (
                'id' => 1951,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.37',
                'variacao' => '0.00',
                'id_ativo' => 1951,
                'created_at' => '2024-01-27 08:56:46',
                'updated_at' => '2024-01-27 08:56:46',
            ),
            451 =>
            array (
                'id' => 1952,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.06',
                'variacao' => '0.00',
                'id_ativo' => 1952,
                'created_at' => '2024-01-27 08:56:46',
                'updated_at' => '2024-01-27 08:56:46',
            ),
            452 =>
            array (
                'id' => 1953,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1953,
                'created_at' => '2024-01-27 08:56:46',
                'updated_at' => '2024-01-27 08:56:46',
            ),
            453 =>
            array (
                'id' => 1954,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1954,
                'created_at' => '2024-01-27 08:56:47',
                'updated_at' => '2024-01-27 08:56:47',
            ),
            454 =>
            array (
                'id' => 1955,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1955,
                'created_at' => '2024-01-27 08:56:47',
                'updated_at' => '2024-01-27 08:56:47',
            ),
            455 =>
            array (
                'id' => 1956,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.21',
                'variacao' => '0.05',
                'id_ativo' => 1956,
                'created_at' => '2024-01-27 08:56:47',
                'updated_at' => '2024-01-27 08:56:47',
            ),
            456 =>
            array (
                'id' => 1957,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.19',
                'variacao' => '0.00',
                'id_ativo' => 1957,
                'created_at' => '2024-01-27 08:56:48',
                'updated_at' => '2024-01-27 08:56:48',
            ),
            457 =>
            array (
                'id' => 1958,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1958,
                'created_at' => '2024-01-27 08:56:48',
                'updated_at' => '2024-01-27 08:56:48',
            ),
            458 =>
            array (
                'id' => 1959,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.18',
                'variacao' => '0.00',
                'id_ativo' => 1959,
                'created_at' => '2024-01-27 08:56:48',
                'updated_at' => '2024-01-27 08:56:48',
            ),
            459 =>
            array (
                'id' => 1960,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.02',
                'variacao' => '0.00',
                'id_ativo' => 1960,
                'created_at' => '2024-01-27 08:56:48',
                'updated_at' => '2024-01-27 08:56:48',
            ),
            460 =>
            array (
                'id' => 1961,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.07',
                'variacao' => '0.00',
                'id_ativo' => 1961,
                'created_at' => '2024-01-27 08:56:49',
                'updated_at' => '2024-01-27 08:56:49',
            ),
            461 =>
            array (
                'id' => 1962,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.24',
                'variacao' => '0.00',
                'id_ativo' => 1962,
                'created_at' => '2024-01-27 08:56:49',
                'updated_at' => '2024-01-27 08:56:49',
            ),
            462 =>
            array (
                'id' => 1963,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.01',
                'variacao' => '0.00',
                'id_ativo' => 1963,
                'created_at' => '2024-01-27 08:56:49',
                'updated_at' => '2024-01-27 08:56:49',
            ),
            463 =>
            array (
                'id' => 1964,
                'data' => '2024-01-27',
                'valor_fechamento' => '0.00',
                'variacao' => '0.00',
                'id_ativo' => 1964,
                'created_at' => '2024-01-27 08:56:50',
                'updated_at' => '2024-01-27 08:56:50',
            ),
        ));


    }
}
