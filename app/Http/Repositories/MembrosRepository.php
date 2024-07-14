<?php

namespace App\Http\Repositories;
use App\Models\membros;

class MembrosRepository
{
    public function store(array $data)
    {
        $membro = new membros();
        $membro->name = $data['name'];
        $membro->email = $data['email'];
        $membro->aniversario = $data['aniversario'];
        $membro->save();
        return $membro;
    }
}