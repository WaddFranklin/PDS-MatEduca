<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario_especialidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained(
                'usuarios',
                'id'
            );
            $table->foreignId('especialidade_id')->constrained(
                'especialidades',
                'id'
            );
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_especialidades');
    }
};
