<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutoriaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('tutoria_statuses')->insert([
            ['descricao' => 'EM ANALISE', 'ativo' => true],
            ['descricao' => 'AGENDADA', 'ativo' => true],
            ['descricao' => 'RECUSADA', 'ativo' => true],
            ['descricao' => 'CANCELADA', 'ativo' => true],
            ['descricao' => 'REALIZADA', 'ativo' => true],
        ]);
    }
}
