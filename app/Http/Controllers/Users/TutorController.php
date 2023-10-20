<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\UsuarioEspecialidade;
use App\Models\Especialidade;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        try {
            $usuario = new Usuario();
            #$usuario->login_id = 1;
            $usuario->nome = $data['nome'];
            $usuario->sobrenome = $data['sobrenome'];

            $usuario->foto_perfil_path = $data['foto_perfil_path']->store("imagesUser", 'public');
            $usuario->foto_capa_path = $data['foto_capa_path']->store("imagesUser", 'public');
            $usuario->titulo = $data['titulo'];
            $usuario->bio = $data['bio'];
            $usuario->curriculo = $data['curriculo'];
            $usuario->senha = $data['senha'];
            $usuario->email = $data['email'];
            $usuario->experiencia = $data['experiencia'];
            $usuario->usuario_tipo_id = $data['usuario_tipo_id'];
            
            $usuario->save();

            $new_id = $usuario->id;

            $specilidades = Especialidade::all();

            
            foreach ($specilidades as $specilidade) {
                foreach ($data['speciality'] as $nome) {
                    // Verifica se o nome corresponde ao usuário
                    if ($specilidade["descricao"] === $nome) {
                        $especialidade_usuario = new UsuarioEspecialidade();
                        $especialidade_usuario->usuario_id = $usuario["id"];
                        $especialidade_usuario->especialidade_id = $specilidade["id"];
                        $especialidade_usuario->ativo = true; 
                        $especialidade_usuario->save();

                    }
                }
            }

            if(array_key_exists('horarioDia', $data))
            {
                foreach ($data['horarioDia'] as $item) {
                    $temp_horario = new Horario();
                    $temp_horario->usuario_id = $usuario["id"];
                    $temp_horario->data = $item['day'];
                    $temp_horario->hora = $item['hour'];
                    $temp_horario->ativo = true;
    
                    $temp_horario->save();
                }
            }

            if(array_key_exists('horarioTarde', $data))
            {
                foreach ($data['horarioTarde'] as $item) {
                    $temp_horario = new Horario();
                    $temp_horario->usuario_id = $usuario["id"];
                    $temp_horario->data = $item['day'];
                    $temp_horario->hora = $item['hour'];
                    $temp_horario->ativo = true;
    
                    $temp_horario->save();
                }
            }

            if(array_key_exists('horarioNoite', $data)){
                foreach ($data['horarioNoite'] as $item) {
                    $temp_horario = new Horario();
                    $temp_horario->usuario_id = $usuario["id"];
                    $temp_horario->data = $item['day'];
                    $temp_horario->hora = $item['hour'];
                    $temp_horario->ativo = true;
    
                    $temp_horario->save();
                }
            }

            #$usuario->data_nascimento = "2002-01-5";
            #$usuario->cpf = "12345657966";

            return response()->json([
                'message' => 'Usuário criado com sucesso',
                'data' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Erro ao salvar o usuário: ' . $e->getMessage()
            ], 200); // Você pode ajustar o código de status HTTP conforme necessário
        }

    }

    public function getTutores(Request $request)
    {
        $tutores = DB::table('usuarios')->where('usuario_tipo_id', 3)->get()->toArray();

        return response()->json([
            'message' => 'Tutores recuperados com sucesso',
            'data' => $tutores
        ]);
    }

    public function getTutoresSpeciality(Request $request)
    {
        $specilidades = UsuarioEspecialidade::all()->toArray();

        return response()->json([
            'message' => 'Tutores recuperados com sucesso',
            'data' => $specilidades
        ]);
    }

    public function getTutoresSpecialityNames(Request $request)
    {
        $specilidades = Especialidade::all()->toArray();

        return response()->json([
            'message' => 'Especialidades recuperadas com sucesso',
            'data' => $specilidades
        ]);
    }

    public function getHorarios(Request $request)
    {
        $horarios = Horario::all()->toArray();

        return response()->json([
            'message' => 'Horários recuperados com sucesso',
            'data' => $horarios
        ]);
    }
}
