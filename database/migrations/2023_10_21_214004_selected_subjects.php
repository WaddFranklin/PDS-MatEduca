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
        Schema::create('selected_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('assunto_selecionado', 255);
            $table->string('nota', 255);
            $table->foreignId('aluno_id')->constrained(
                'usuarios',
                'id'
            );
            $table->foreignId('tutor_id')->constrained(
                'usuarios',
                'id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selected_subjects');
    }
};
