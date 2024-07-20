<?php

namespace App\Http\Repositories;
use App\Models\historiasParalelas;

class HistoriasParalelasRepository
{
    public function store(array $data)
    {
        $historiaParalela = new historiasParalelas();
        $historiaParalela->titulo = $data['titulo'];
        $historiaParalela->path = $data['path'];
        $historiaParalela->nomeMembros = $data['nomeMembros'];
        $historiaParalela->save();
        return $historiaParalela;
    }
    
}