<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(Request $request){
        return response()->json(["status"=>True]);
    }
}
