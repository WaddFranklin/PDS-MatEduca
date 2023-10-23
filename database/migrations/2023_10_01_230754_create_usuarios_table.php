<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Login;
use App\Models\UsuarioTipo;
use App\Models\Telefone;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            #$table->foreignId('login_id')->constrained(
            #    'logins',
            #    'id'
            #);
            $table->foreignId('usuario_tipo_id')->constrained(
                'usuario_tipos',
                'id'
            );
            #$table->foreignId('usuario_id')->constrained(
            #    'telefones',
            #    'id'
            #);
            $table->string('nome', 255);
            $table->string('sobrenome', 255);
            $table->string('experiencia', 255);
            $table->string('foto_perfil_path', 255);
            $table->string('foto_capa_path', 255);
            $table->string('titulo', 255);
            $table->string('senha', 16);
            $table->text('bio');
            $table->text('curriculo');
            #$table->date('data_nascimento');
            $table->string('email', 128);
            #$table->string('cpf', 11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
