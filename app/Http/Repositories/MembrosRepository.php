<?php

namespace App\Http\Repositories;
use App\Models\membros;

class MembrosRepository
{
    public function store(array $data, int $fotoId)
    {
        $membro = new membros();
        $membro->nome = $data['name'];
        $membro->email = $data['email'];
        $membro->aniversario = $data['aniversario'];
        $membro->fotoId = $fotoId;
        $membro->fotoId = $fotoId;
        $membro->save();

        return $membro;
    }

    public function index()
    {
        return membros::all();
    }

    public function show(int $id)
    {
        return membros::find($id);
    }

    public function update(int $id, array $data)
    {
        $membro = membros::find($id);
        $membro->nome = $data['name'] ?? $membro->nome;
        $membro->email = $data['email'] ?? $membro->email;
        $membro->aniversario = $data['aniversario'] ?? $membro->aniversario;
        $membro->save();
        return $membro;
    }

    public function destroy(int $id)
    {
        $membro = membros::find($id);
        $membro->delete();
    }

    public function count()
    {
        $membros = new membros();
        return $membros->count();
    }
}