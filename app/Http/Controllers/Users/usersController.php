<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\UsuarioTipo;

class usersController extends Controller
{
    public function index(Request $request)
    {
        // Obtenha os dados do formulário ou da solicitação
        $data = $request->all();
        
        try {
            // Crie uma instância do modelo Usuario e atribua os valores aos campos
            $usuario = new Usuario();
            #$usuario->login_id = 1;
            $usuario->nome = "Luiz";
            $usuario->sobrenome = "Felipe";
            $usuario->email = $data['email'];
            $usuario->foto_perfil_path = "";
            $usuario->foto_capa_path = "";
            $usuario->titulo = '';
            $usuario->experiencia = '';
            $usuario->bio = '';
            $usuario->curriculo = '';
            $usuario->senha = $data['senha'];


            $usuario->usuario_tipo_id = 2;
    
            // Salve o usuário no banco de dados
            $usuario->save();
    
            return response()->json([
                'message' => 'Usuário criado com sucesso',
                'data' => $usuario
            ]);
        } catch (QueryException $e) {
            // Captura qualquer exceção que possa ocorrer durante a operação de salvar
            return response()->json([
                'error' => 'Erro ao salvar o usuário: ' . $e->getMessage()
            ], 200); // Você pode ajustar o código de status HTTP conforme necessário
        }

    }
}




