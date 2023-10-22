<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Horario;
use App\Models\TutoriaStatus;
use App\Models\SelectedSubject;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('horario_id')->constrained(
                'horarios',
                'id'
            );
            $table->foreignId('tutoria_status_id')->constrained(
                'tutoria_statuses',
                'id'
            );
            $table->foreignId('aluno_id')->constrained(
                'usuarios',
                'id'
            );
            $table->foreignId('tutor_id')->constrained(
                'usuarios',
                'id'
            );
            $table->string('maiores_dificuldades', 255);

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
