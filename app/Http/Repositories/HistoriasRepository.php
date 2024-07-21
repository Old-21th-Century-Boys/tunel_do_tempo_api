<?php

namespace App\Http\Repositories;
use App\Models\historias;

class HistoriasRepository
{
    public function index()
    {
        return historias::all();
    }

    public function show(int $id)
    {
        return historias::find($id);
    }

    public function update(int $id, array $data)
    {
        $historia = historias::find($id);
        $historia->titulo = $data['titulo'];
        $historia->path = $data['path'];
        $historia->IdMembros = $data['IdMembros'];
        $historia->fotoId = $data['fotoId'];
        $historia->videoId = $data['videoId'];
        $historia->save();
        return $historia;
    }

    public function destroy(int $id)
    {
        $historia = historias::find($id);
        $historia->delete();
    }
    
    public function store(array $data, int $fotoId, int $videoId)
    {
        $historia = new historias();
        $historia->titulo = $data['titulo'];
        $historia->path = $data['path'];
        $historia->IdMembros = $data['IdMembros'];
        $historia->fotoId = $fotoId;
        $historia->videoId = $videoId;
        $historia->save();
        return $historia;
    }
    
}