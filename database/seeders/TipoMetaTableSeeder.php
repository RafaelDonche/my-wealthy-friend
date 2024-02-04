<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_metas')->insert([
            ['nome' => 'Ações'],
            ['nome' => "FII's"],
            ['nome' => 'Criptos']
        ]);
    }
}
