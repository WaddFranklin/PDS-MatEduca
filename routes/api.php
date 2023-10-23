<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\usersController;
use App\Http\Controllers\Users\TutorController;
use App\Http\Controllers\Users\SpecialityController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TutoriaController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', [usersController::class, "index"]);

Route::post('/tutor', [TutorController::class, "index"]);

Route::get('/tutores', [TutorController::class, "getTutores"]);

Route::get('/especialidades', [TutorController::class, "getTutoresSpeciality"]);

Route::get('/especialidadesNomes', [TutorController::class, "getTutoresSpecialityNames"]);

Route::get('/horarios', [TutorController::class, "getHorarios"]);

Route::get('/status', [TutorController::class, "getTutoriaStatus"]);

Route::post('/imagem', [ImageController::class, "retornarImagem"]);

Route::post('/tutoria', [TutoriaController::class, "index"]);

Route::get('/assuntos', [TutoriaController::class, "getSubjects"]);

Route::post('/getTutorias', [TutoriaController::class, "getTutoria"]);

Route::post('/tutorBYID', [TutorController::class, "getTutoresByID"]);

Route::get('/getTutoriaStatus', [TutoriaController::class, "getTutoriaStatus"]);

Route::post('/tutorias/{id}', [TutoriaController::class, "updateTutoria"]);
