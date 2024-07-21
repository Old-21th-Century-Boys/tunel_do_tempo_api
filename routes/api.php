<?php

use App\Http\Controllers\FotosController;
use App\Http\Controllers\HistoriasController;
use App\Http\Controllers\HistoriasParalelasController;
use App\Http\Controllers\MembrosController;
use App\Http\Controllers\ReferenciasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VideosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('/membros', [MembrosController::class, 'index']);
Route::post('/membros', [MembrosController::class, 'store']);
Route::get('/membros/{id}', [MembrosController::class, 'show']);
Route::put('/membros/{id}', [MembrosController::class, 'update']);
Route::delete('/membros/{id}', [MembrosController::class, 'destroy']);

Route::get('/videos', [VideosController::class, 'index']);
Route::post('/videos', [VideosController::class, 'store']);
Route::get('/videos/{id}', [VideosController::class, 'show']);
Route::put('/videos/{id}', [VideosController::class, 'update']);
Route::delete('/videos/{id}', [VideosController::class, 'destroy']);
Route::get('/videos/{year}', [VideosController::class, 'getVideosByYear']);
Route::get('/videos/membro/{id}', [VideosController::class, 'getVideosByMemberId']);//Mudar

Route::get('/fotos', [FotosController::class, 'index']);
Route::post('/fotos', [FotosController::class, 'store']);
Route::get('/fotos/{id}', [FotosController::class, 'show']);
Route::put('/fotos/{id}', [FotosController::class, 'update']);
Route::delete('/fotos/{id}', [FotosController::class, 'destroy']);
Route::get('/fotos/{year}', [FotosController::class, 'getFotosByYear']);
Route::get('/fotos/membro/{id}', [FotosController::class, 'getFotosByMemberId']);//Mudar

Route::get('/historias', [HistoriasController::class, 'index']);
Route::post('/historias', [HistoriasController::class, 'store']);
Route::get('/historias/{id}', [HistoriasController::class, 'show']);
Route::put('/historias/{id}', [HistoriasController::class, 'update']);
Route::delete('/historias/{id}', [HistoriasController::class, 'destroy']);

Route::get('/historiasParalelas', [HistoriasParalelasController::class, 'historiasParalelas']);
Route::post('/historiasParalelas', [HistoriasParalelasController::class, 'store']);
Route::get('/historiasParalelas/{id}', [HistoriasParalelasController::class, 'show']);
Route::put('/historiasParalelas/{id}', [HistoriasParalelasController::class, 'update']);
Route::delete('/historiasParalelas/{id}', [HistoriasParalelasController::class, 'destroy']);

Route::get('/referencias', [ReferenciasController::class, 'referencias']);
Route::post('/referencias', [ReferenciasController::class, 'store']);
Route::get('/referencias/{id}', [ReferenciasController::class, 'show']);
Route::put('/referencias/{id}', [ReferenciasController::class, 'update']);
Route::delete('/referencias/{id}', [ReferenciasController::class, 'destroy']);

Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::post('/usuarios', [UsuariosController::class, 'store']);
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);
Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);
