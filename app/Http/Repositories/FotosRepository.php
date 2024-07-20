<?php

namespace App\Http\Repositories;
use App\Models\fotos;

class FotosRepository
{
    public function store(array $data)
    {
        $foto = new Fotos();
        $foto->titulo = $data['titulo'];
        $foto->path = $data['path'];
        $foto->nomeMembros = $data['nomeMembros'];
        $foto->anoFoto = $data['anoFoto'];
        $foto->save();
        return $foto;
    }

    public function index()
    {
        return Fotos::all();
    }

    public function show($id)
    {
        return Fotos::find($id);
    }

    public function update(array $data, $id)
    {
        $foto = Fotos::find($id);
        $foto->titulo = $data['titulo'];
        $foto->path = $data['path'];
        $foto->nomeMembros = $data['nomeMembros'];
        $foto->anoFoto = $data['anoFoto'];
        $foto->save();
        return $foto;
    }

    public function delete($id)
    {
        $foto = Fotos::find($id);
        $foto->delete();
    }

    public function getFotosByYear($year)
    {
        return Fotos::where('anoFoto', $year)->get();
    }
}