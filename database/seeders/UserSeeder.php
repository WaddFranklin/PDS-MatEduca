<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Usuario::create([
            "nome" => "Luiz",
            "sobrenome" => "Felipe",
            "email" => "test@test.com",
            "foto_perfil_path" => "",
            "foto_capa_path" => "",
            "titulo" => '',
            "experiencia" => '',
            "bio" => '',
            "curriculo" => '',
            "senha" => "123456",
            "usuario_tipo_id" => 2,
        ]);
    }
}
