<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('usuario_tipos')->insert([
            ['descricao' => 'ADMIN', 'ativo' => true],
            ['descricao' => 'ALUNO', 'ativo' => true],
            ['descricao' => 'TUTOR', 'ativo' => true],
            ['descricao' => 'RESPONSÁVEL', 'ativo' => true],
        ]);
    }
}
