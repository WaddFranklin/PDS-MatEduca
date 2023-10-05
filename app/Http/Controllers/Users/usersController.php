<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        $email = $data['email'];
        $password = $data['password'];
        
        return response()->json([
            "email"=>$email,
            "password"=>$password
        ]);
    }
}
