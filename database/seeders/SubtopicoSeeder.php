<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubtopicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('subtopicos')->insert([
            ['especialidade_id' => 1, 'descricao' => 'Equações do 1o Grau', 'ativo' => true],
            ['especialidade_id' => 1, 'descricao' => 'Equações do 2o Grau', 'ativo' => true],
            ['especialidade_id' => 1, 'descricao' => 'Sistema de Equações', 'ativo' => true],
            ['especialidade_id' => 1, 'descricao' => 'Funções e Gráficos', 'ativo' => true],
            ['especialidade_id' => 2, 'descricao' => 'Geometria Plana', 'ativo' => true],
            ['especialidade_id' => 2, 'descricao' => 'Geometria Espacial', 'ativo' => true],
            ['especialidade_id' => 2, 'descricao' => 'Geometria Analítica', 'ativo' => true],
            ['especialidade_id' => 2, 'descricao' => 'Teorema de Pitágoras', 'ativo' => true],
            ['especialidade_id' => 3, 'descricao' => 'Estatística Descritiva', 'ativo' => true],
            ['especialidade_id' => 3, 'descricao' => 'Probabilidade', 'ativo' => true],
            ['especialidade_id' => 3, 'descricao' => 'Inferência Estatística', 'ativo' => true],
            ['especialidade_id' => 3, 'descricao' => 'Análise de Regressão', 'ativo' => true],
            ['especialidade_id' => 3, 'descricao' => 'Estatística Multivalorada', 'ativo' => true],
            ['especialidade_id' => 4, 'descricao' => 'Operações com Matrizes', 'ativo' => true],
            ['especialidade_id' => 4, 'descricao' => 'Determinantes e Regra de Cramer', 'ativo' => true],
            ['especialidade_id' => 4, 'descricao' => 'Matrizes Inversas', 'ativo' => true],
        ]);
    }
}
