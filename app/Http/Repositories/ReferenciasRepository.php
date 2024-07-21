<?php

namespace App\Http\Repositories;
use App\Models\referencias;

class ReferenciasRepository
{
    public function store(array $data, int $fotoId, int $videoId)
    {
        $referencia = new referencias();
        $referencia->titulo = $data['titulo'];
        $referencia->path = $data['path'];
        $referencia->IdMembros = $data['IdMembros'];
        $referencia->videoId = $videoId;
        $referencia->fotoId = $fotoId;
        $referencia->save();
        return $referencia;
    }
    
    public function index()
    {
        return referencias::all();
    }

    public function show(int $id)
    {
        return referencias::find($id);
    }

    public function update(int $id, array $data)
    {
        $referencia = referencias::find($id);
        $referencia->titulo = $data['titulo'] ?? $referencia->titulo;
        $referencia->path = $data['path'] ?? $referencia->path;
        $referencia->IdMembros = $data['IdMembros'] ?? $referencia->IdMembros;
        $referencia->videoId = $data['videoId'] ?? $referencia->videoId;
        $referencia->fotoId = $data['fotoId'] ?? $referencia->fotoId;
        $referencia->save();
        return $referencia;
    }

    public function destroy(int $id)
    {
        $referencia = referencias::find($id);
        $referencia->delete();
    }

}