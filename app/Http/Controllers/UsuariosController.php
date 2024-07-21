<?php

namespace App\Http\Controllers;

use App\Http\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    

    public function index()
    {
        try {
            $usuarioService = new UsuarioService();
            $usuarios = $usuarioService->index();
            return response()->json($usuarios, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar usuarios!'], 400);
        }
    }

    public function store(Request $request)
    {
        try{
            $data = $request->all();
            $usuarioService = new UsuarioService();
            $usuario = $usuarioService->store($data);
            return response()->json($usuario);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao cadastrar usuario!'], 400);
        
        }
    }
    
    public function show(int $id)
    {
        try {
            $usuarioService = new UsuarioService();
            $usuario = $usuarioService->show($id);
            return response()->json($usuario, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar usuario!'], 400);
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            $data = $request->all();
            $usuarioService = new UsuarioService();
            $usuario = $usuarioService->update($id, $data);
            return response()->json($usuario, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar usuario!'], 400);
        }
    }

    public function destroy(int $id)
    {
        try {
            $usuarioService = new UsuarioService();
            $usuarioService->destroy($id);
            return response()->json(['message' => 'Usuario deletado com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao deletar usuario!'], 400);
        }
    }

    
}
