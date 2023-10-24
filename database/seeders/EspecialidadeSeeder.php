<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('especialidades')->insert([
            ['descricao' => 'ÁLGEBRA', 'ativo' => true],
            ['descricao' => 'GEOMETRIA', 'ativo' => true],
            ['descricao' => 'ESTATÍSTICA', 'ativo' => true],
            ['descricao' => 'MATRIZES E DETERMINANTES', 'ativo' => true],
            ['descricao' => 'TRIGONOMETRIA', 'ativo' => true],
        ]);
    }
}
