<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Models\Tutoria;
use App\Models\SelectedSubject;
use App\Models\TutoriaStatus;


class TutoriaController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        try {
            $tutoria = new Tutoria();

            $tutoria->horario_id = $data['horario_id'];
            $tutoria->aluno_id = $data['aluno_id'];
            $tutoria->tutor_id = $data['tutor_id'];

            $tutoria->maiores_dificuldades = $data['maiores_dificuldades'];
            $tutoria->tutoria_status_id = $data['tutoria_status_id'];
            $tutoria->ativo = TRUE;
            
            
            foreach ($data['notas_Assuntos'] as $item) {
                $subject = new SelectedSubject();
                $subject->assunto_selecionado = $item['assunto'];
                $subject->nota = $item['nota'];

                $subject->aluno_id = $data['aluno_id'];
                $subject->tutor_id = $data['tutor_id'];
                
                $subject->save();
            }

            $tutoria->save();

            return response()->json([
                'message' => 'Tutoria marcada com sucesso',
                'data' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Erro ao marcar tutoria: ' . $e->getMessage()
            ], 200); // Você pode ajustar o código de status HTTP conforme necessário
        }

    }

    public function getSubjects(Request $request)
    {
        $subjects = SelectedSubject::all()->toArray();

        return response()->json([
            'message' => 'Assuntos recuperados com sucesso',
            'data' => $subjects
        ]);
    }

    public function getTutoria(Request $request)
    {
        $data = $request->all();
        $id = $data["id"];
        $type = $data["type"];
    
        $tutorias = Tutoria::where($type, $id)->get()->toArray();
    
        return response()->json([
            'message' => 'Tutorias recuperadas com sucesso',
            'data' => $tutorias
        ]);
    }

    public function getTutoriaStatus(Request $request)
    {
    
        $tutoriaStatus = TutoriaStatus::all()->toArray();
    
        return response()->json([
            'message' => 'Tutorias recuperadas com sucesso',
            'data' => $tutoriaStatus
        ]);
    }
}

