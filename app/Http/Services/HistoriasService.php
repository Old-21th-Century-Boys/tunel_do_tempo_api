<?php

namespace App\Http\Services;
use App\Http\Repositories\HistoriasRepository as RepositoriesHistoriasRepository;

class HistoriasService
{
    private $historiasRepository;
    
    public function __construct()
    {
        $this->historiasRepository = new RepositoriesHistoriasRepository();
    }
    
    public function store(array $data)
    {
        return $this->historiasRepository->store($data);
    }
    
}