<?php

namespace App\Http\Repositories;
use App\Models\historiasParalelas;

class HistoriasParalelasRepository
{
    public function store(array $data, int $fotoId, int $videoId)
    {
        $historiasParalelas = new historiasParalelas();
        $historiasParalelas->titulo = $data['titulo'];
        $historiasParalelas->path = $data['path'];
        $historiasParalelas->IdMembros = $data['IdMembros'];
        $historiasParalelas->fotoId = $fotoId;
        $historiasParalelas->videoId = $videoId;
        $historiasParalelas->save();
        return $historiasParalelas;
    }

    public function index()
    {
        return historiasParalelas::all();
    }

    public function show(int $id)
    {
        return historiasParalelas::find($id);
    }

    public function update(int $id, array $data)
    {
        $historiasParalelas = historiasParalelas::find($id);
        $historiasParalelas->titulo = $data['titulo'] ?? $historiasParalelas->titulo;
        $historiasParalelas->path = $data['path'] ?? $historiasParalelas->path;
        $historiasParalelas->IdMembros = $data['IdMembros'] ?? $historiasParalelas->IdMembros;
        $historiasParalelas->fotoId = $data['fotoId'] ?? $historiasParalelas->fotoId;
        $historiasParalelas->videoId = $data['videoId'] ?? $historiasParalelas->videoId;
        $historiasParalelas->save();
        return $historiasParalelas;
    }

    public function destroy(int $id)
    {
        $historiasParalelas = historiasParalelas::find($id);
        $historiasParalelas->delete();
    }

    
}