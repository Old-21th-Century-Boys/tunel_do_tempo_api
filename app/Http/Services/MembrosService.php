<?php

namespace App\Http\Services;

use App\Http\Repositories\MembrosRepository as RepositoriesMembrosRepository;

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

    public function index()
    {
        return $this->membrosRepository->index();
    }

    public function show($id)
    {
        return $this->membrosRepository->show($id);
    }

    public function update($id, array $data)
    {
        return $this->membrosRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->membrosRepository->delete($id);
    }
    
}