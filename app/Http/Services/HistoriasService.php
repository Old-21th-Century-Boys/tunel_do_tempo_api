<?php

namespace App\Http\Services;
use App\Http\Repositories\HistoriasRepository as RepositoriesHistoriasRepository;
use Carbon\Carbon;

class HistoriasService
{
    private $historiasRepository;
    
    public function __construct()
    {
        $this->historiasRepository = new RepositoriesHistoriasRepository();
    }
    
    public function store(array $data)
    {
        $fotoService = new FotosService();
        $videoService = new VideosService();
        
        $dataFoto = [
             'titulo' => $data['titulo'] . ' - foto',
             'path' => $data['pathFoto'] ?? "Default",
             'IdMembros' => $data['IdMembros'],
             'anoFoto' =>  Carbon::now()
        ];
        $foto = $fotoService->store($dataFoto);

        $dataVideo = [
            'titulo' => $data['titulo'] . ' - video',
            'path' => $data['pathVideo'] ?? "Default",
            'IdMembros' => $data['IdMembros'],
            'anoVideo' => Carbon::now()
        ];
        
        $video = $videoService->store($dataVideo);

        return $this->historiasRepository->store($data, $foto['id'], $video['id']);
    }
    
    public function index()
    {
        return $this->historiasRepository->index();
    }

    public function show(int $id)
    {
        return $this->historiasRepository->show($id);
    }

    public function update(int $id, array $data)
    {
        return $this->historiasRepository->update($id, $data);
    }

    public function destroy(int $id)
    {
        return $this->historiasRepository->destroy($id);
    }
}