<?php

namespace App\Http\Repositories;
use App\Models\membros;

class MembrosRepository
{
    public function index()
    {
        return membros::all();
    }

    public function show($id)
    {
        return membros::find($id);
    }

    public function update(array $data, $id)
    {
        $membro = membros::find($id);
        $membro->nome = $data['name'];
        $membro->email = $data['email'];
        $membro->aniversario = $data['aniversario'];
        $membro->save();
        return $membro;
    }

    public function store(array $data)
    {
        $membro = new membros();
        $membro->nome = $data['name'];
        $membro->email = $data['email'];
        $membro->aniversario = $data['aniversario'];
        $membro->save();
        return $membro;
    }

    public function delete($id)
    {
        $membro = membros::find($id);
        $membro->delete();
    }
}