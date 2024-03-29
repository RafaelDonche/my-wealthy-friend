<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(TipoAtivoTableSeeder::class);
        $this->call(SegmentoAtivoTableSeeder::class);
        $this->call(TipoMetaTableSeeder::class);
        $this->call(AtivosTableSeeder::class);
        $this->call(HistoricoAtivosTableSeeder::class);
    }
}
