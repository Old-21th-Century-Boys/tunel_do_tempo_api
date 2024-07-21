<?php

namespace App\Http\Repositories;

use App\Models\usuarios;

class UsuariosRepository
{
    public function store(array $data)
    {
        $usuario = new usuarios();
        $usuario->nome = $data['nome'];
        $usuario->email = $data['email'];
        $usuario->senha = $data['senha'];
        $usuario->uuid = $data['uuid'];
        $usuario->save();
        return $usuario;
    }

    public function index()
    {
        return usuarios::all();
    }

    public function show(int $id)
    {
        return usuarios::find($id);
    }

    public function update(int $id, array $data)
    {
        $usuario = usuarios::find($id);
        $usuario->nome = $data['nome'];
        $usuario->email = $data['email'];
        $usuario->senha = $data['senha'];
        $usuario->uuid = $data['uuid'];
        $usuario->save();
        return $usuario;
    }

    public function destroy(int $id)
    {
        $usuario = usuarios::find($id);
        $usuario->delete();
    }
    
}