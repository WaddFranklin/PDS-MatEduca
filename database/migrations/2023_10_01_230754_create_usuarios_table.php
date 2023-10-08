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
            $table->foreignIdFor(Login::class);
            $table->foreignIdFor(UsuarioTipo::class);
            $table->foreignIdFor(Telefone::class);
            $table->string('nome', 255);
            $table->date('data_nascimento');
            $table->string('email', 128);
            $table->string('cpf', 11);
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
