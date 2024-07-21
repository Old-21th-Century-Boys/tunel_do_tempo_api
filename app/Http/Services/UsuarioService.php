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
    
    public function index()
    {
        return $this->usuarioRepository->index();
    }

    public function show(int $id)
    {
        return $this->usuarioRepository->show($id);
    }

    public function update(int $id, array $data)
    {
        return $this->usuarioRepository->update($id, $data);
    }

    public function destroy(int $id)
    {
        return $this->usuarioRepository->destroy($id);
    }

    
}