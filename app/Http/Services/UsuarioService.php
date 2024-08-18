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

    public function login(array $credentials)
    {
        $user = $this->usuarioRepository->findByEmailAndPassword($credentials['email'], $credentials['senha']);

        if ($user) {
            return [
                'success' => true,
                'message' => 'Login realizado com sucesso!',
                'user' => $user,
            ];
        }

        return [
            'success' => false,
            'message' => 'Email ou senha incorretos.',
        ];
    }
}