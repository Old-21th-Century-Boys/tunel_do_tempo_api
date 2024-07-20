<?php

namespace App\Http\Services;

use App\Http\Repositories\UsuariosRepository as RepositoriesUsuarioRepository;

class UsuarioService
{
    private $usuarioRepository;
    
    public function __construct()
    {
        $this->usuarioRepository = new RepositoriesUsuarioRepository();
    }
    
    public function store(array $data)
    {
        return $this->usuarioRepository->store($data);
    }
    
}