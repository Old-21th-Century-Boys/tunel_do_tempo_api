<?php

namespace App\Http\Services;
use App\Http\Repositories\VideosRepository as RepositoriesVideosRepository;

class VideosService
{
    private $videosRepository;
    
    public function __construct()
    {
        $this->videosRepository = new RepositoriesVideosRepository();
    }
    
    public function store(array $data)
    {
        return $this->videosRepository->store($data);
    }

    public function index()
    {
        return $this->videosRepository->index();
    }

    public function show($id)
    {
        return $this->videosRepository->show($id);
    }

    public function update($data, $id)
    {
        return $this->videosRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->videosRepository->destroy($id);
    }
    
    public function getVideosByYear($year)
    {
        return $this->videosRepository->getVideosByYear($year);
    }

    public function getVideosByMemberId($id)
    {
        return $this->videosRepository->getVideosByMemberId($id);
    }
}