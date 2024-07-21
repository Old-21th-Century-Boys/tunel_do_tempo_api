<?php

namespace App\Http\Repositories;
use App\Models\fotos;

class FotosRepository
{
    public function index()
    {
        return fotos::all();
    }

    public function show(int $id)
    {
        return fotos::find($id);
    }

    public function store(array $data)
    {
        $foto = new Fotos();
        $foto->titulo = $data['titulo'];
        $foto->path = $data['path'];
        $foto->IdMembros = $data['IdMembros'];
        $foto->anoFoto = $data['anoFoto'];
        $foto->save();
        return $foto;
    }

    public function update(int $id, array $data)
    {
        $foto = fotos::find($id);
        $foto->titulo = $data['titulo'] ?? $foto->titulo;
        $foto->path = $data['path'] ?? $foto->path;
        $foto->IdMembros = $data['IdMembros'] ?? $foto->IdMembros;
        $foto->anoFoto = $data['anoFoto'] ?? $foto->anoFoto;
        $foto->save();
        return $foto;
    }

    public function destroy(int $id)
    {
        $foto = fotos::find($id);
        $foto->delete();
    }

    public function getFotosByYear($year)
    {
        return fotos::where('anoFoto', 'LIKE', "%$year%")->get();
    }

    public function getFotosByMemberId($id)
    {
        return fotos::where('IdMembros', 'LIKE', "%$id%")->get();
    }

}