<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1, 'name' => 'Rafael', 'cpf' => '01373055081', 'email' => 'rafael.donche@estudante.ifms.edu.br', 'password' => Hash::make('123456'),
                'ativo' => 1, 'email_verified_at' => '2023-12-20 20:47:11', 'created_at' => '2023-12-20 20:42:10', 'updated_at' => '2023-12-20 20:42:10'
            ]
        ]);
    }
}
