<?php

namespace App\Http\Services;
use App\Http\Repositories\FotosRepository as RepositoriesFotosRepository;

class FotosService
{
    private $fotosRepository;
    
    public function __construct()
    {
        $this->fotosRepository = new RepositoriesFotosRepository();
    }
    
    public function store(array $data)
    {
        return $this->fotosRepository->store($data);
    }

    public function index()
    {
        return $this->fotosRepository->index();
    }

    public function show($id)
    {
        return $this->fotosRepository->show($id);
    }

    public function update($id, array $data)
    {
        return $this->fotosRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->fotosRepository->destroy($id);
    }

    public function getFotosByYear($year)
    {
        return $this->fotosRepository->getFotosByYear($year);
    }

    public function getFotosByMemberId($id)
    {
        return $this->fotosRepository->getFotosByMemberId($id);
    }
    
}