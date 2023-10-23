<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function retornarImagem(Request $request)
    {
        $data = $request->all();
        $caminhoCompleto = storage_path('app/public/' . $data['url']);

        if (file_exists($caminhoCompleto)) {
            return response()->file($caminhoCompleto);
        } else {
            abort(404);
        }
    }
}