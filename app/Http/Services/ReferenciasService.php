<?php

namespace App\Http\Services;
use App\Http\Repositories\ReferenciasRepository as RepositoriesReferenciasRepository;
use Carbon\Carbon;

class ReferenciasService
{
    private $referenciasRepository;
    
    public function __construct()
    {
        $this->referenciasRepository = new RepositoriesReferenciasRepository();
    }
    
    public function store(array $data)
    {
        $fotoService = new FotosService();
        $videoService = new VideosService();

        $dataFoto = [
            'titulo' => $data['titulo'] . ' - foto',
            'path' => $data['pathFoto'],
            'IdMembros' => $data['IdMembros'],
            'anoFoto' =>  Carbon::now()
        ];

        $foto = $fotoService->store($dataFoto);

        $dataVideo = [
            'titulo' => $data['titulo'] . ' - video',
            'path' => $data['pathVideo'],
            'IdMembros' => $data['IdMembros'],
            'anoVideo' => Carbon::now()
        ];

        $video = $videoService->store($dataVideo);
        
        return $this->referenciasRepository->store($data, $foto->Id, $video->Id);
    }

    public function index()
    {
        return $this->referenciasRepository->index();
    }

    public function show(int $id)
    {
        return $this->referenciasRepository->show($id);
    }

    public function update(int $id, array $data)
    {
        return $this->referenciasRepository->update($id, $data);
    }

    public function destroy(int $id)
    {
        return $this->referenciasRepository->destroy($id);
    }
    
}
