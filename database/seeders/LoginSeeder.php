<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('logins')->insert([
            ['login' => 'iof@ic.ufal.br', 'senha' => '123456', 'ativo' => true],
            ['login' => 'wfsn@ic.ufal.br', 'senha' => '123456', 'ativo' => true],
            ['login' => 'cexb@ic.ufal.br', 'senha' => '123456', 'ativo' => true],
            ['login' => 'rfc@ic.ufal.br', 'senha' => '123456', 'ativo' => true],
            ['login' => 'mvf2@cin.ufpe.br', 'senha' => '123456', 'ativo' => true],
        ]);
    }
}
