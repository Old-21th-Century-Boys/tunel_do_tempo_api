<?php

namespace App\Http\Repositories;
use App\Models\historias;

class HistoriasRepository
{
    public function store(array $data)
    {
        $historia = new historias();
        $historia->titulo = $data['titulo'];
        $historia->descricao = $data['descricao'];
        $historia->path = $data['path'];
        $historia->nomeMembros = $data['nomeMembros'];
        $historia->save();
        return $historia;
    }
    
}