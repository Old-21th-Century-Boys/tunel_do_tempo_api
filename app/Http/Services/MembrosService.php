<?php

namespace App\Http\Services;

use App\Http\Repositories\MembrosRepository as RepositoriesMembrosRepository;
use App\repositories\MembrosRepository;

class MembrosService
{
    private $membrosRepository;
    
    public function __construct()
    {
        $this->membrosRepository = new RepositoriesMembrosRepository();
    }
    
    public function store(array $data)
    {
        return $this->membrosRepository->store($data);
    }
    
}