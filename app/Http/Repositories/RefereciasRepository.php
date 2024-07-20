<?php

namespace App\Http\Repositories;
use App\Models\referencias;

class ReferenciasRepository
{
    public function store(array $data)
    {
        $referencia = new referencias();
        $referencia->titulo = $data['titulo'];
        $referencia->path = $data['path'];
        $referencia->nomeMembros = $data['nomeMembros'];
        $referencia->videoPath = $data['videoPath'];
        $referencia->fotoPath = $data['fotoPath'];
        $referencia->save();
        return $referencia;
    }
    
}