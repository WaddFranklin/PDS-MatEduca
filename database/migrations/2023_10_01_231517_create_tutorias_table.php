<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Horario;
use App\Models\TutoriaStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Horario::class);
            $table->foreignIdFor(TutoriaStatus::class);
            $table->foreignId('aluno_id');
            $table->foreignId('tutor_id');
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutorias');
    }
};
