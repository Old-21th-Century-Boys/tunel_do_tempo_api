<?php

namespace App\Http\Controllers;

use App\Http\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $usuarioService = new UsuarioService();
        $usuario = $usuarioService->store($data);
        return response()->json($usuario);
    }
}
