<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
       
        try {
            // Busque o usuário com o email fornecido
            $usuario = Usuario::where('email', $data['email'])->first();

            // Verifique se o usuário existe e se a senha corresponde
            if ($usuario && $data['senha'] == $usuario->senha) {
                return response()->json([
                    'message' => 'Usuário encontrado com sucesso',
                    'data' => $usuario
                ]);
            } else {
                // Usuário não encontrado ou senha incorreta
                return response()->json([
                    'error' => 'Credenciais inválidas'
                ], 401);
            }
        } catch (QueryException $e) {
            return response()->json([
                'error' => 'Erro ao buscar o usuário: ' . $e->getMessage()
            ], 500); 
        }
    }
}