<?php

namespace App\Http\Services;
use App\Http\Repositories\ReferenciasRepository as RepositoriesReferenciasRepository;

class ReferenciasService
{
    private $referenciasRepository;
    
    public function __construct()
    {
        $this->referenciasRepository = new RepositoriesReferenciasRepository();
    }
    
    public function store(array $data)
    {
        return $this->referenciasRepository->store($data);
    }
    
}
