<?php

namespace App\Http\Services;

use App\Http\Repositories\MembrosRepository as RepositoriesMembrosRepository;
use Carbon\Carbon;

class MembrosService
{
    private $membrosRepository;
    
    public function __construct()
    {
        $this->membrosRepository = new RepositoriesMembrosRepository();
    }
    
    public function store(array $data)
    {
        $fotoService = new FotosService();
        
        $dataFoto = [
            'titulo' => $data['titulo'] . ' - foto',
            'path' => $data['pathFoto'],
            'IdMembros' => $data['IdMembros'],
            'anoFoto' =>  Carbon::now()
        ];
        
        $foto = $fotoService->store($dataFoto);
        return $this->membrosRepository->store($data, $foto->Id);
    }

    public function index()
    {
        return $this->membrosRepository->index();
    }

    public function show(int $id)
    {
        return $this->membrosRepository->show($id);
    }

    public function update(int $id, array $data)
    {
        return $this->membrosRepository->update($id, $data);
    }

    public function destroy(int $id)
    {
        return $this->membrosRepository->destroy($id);
    }
    
    
}