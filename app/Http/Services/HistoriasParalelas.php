<?php

namespace App\Http\Services;
use App\Http\Repositories\HistoriasParalelasRepository as RepositoriesHistoriasParalelasRepository;

class HistoriasParalelasService
{
    private $historiasParalelasRepository;
    
    public function __construct()
    {
        $this->historiasParalelasRepository = new RepositoriesHistoriasParalelasRepository();
    }
    
    public function store(array $data)
    {
        return $this->historiasParalelasRepository->store($data);
    }
    
}