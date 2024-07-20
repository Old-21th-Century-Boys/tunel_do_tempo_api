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
    
}