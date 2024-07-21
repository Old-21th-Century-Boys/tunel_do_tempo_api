<?php

namespace App\Http\Services;
use App\Http\Repositories\HistoriasParalelasRepository as RepositoriesHistoriasParalelasRepository;
use Carbon\Carbon;

class HistoriasParalelasService
{
    private $historiasParalelasRepository;
    
    public function __construct()
    {
        $this->historiasParalelasRepository = new RepositoriesHistoriasParalelasRepository();
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
        
        return $this->historiasParalelasRepository->store($data, $foto->Id, $video->Id);
    }

    public function index()
    {
        return $this->historiasParalelasRepository->index();
    }

    public function show(int $id)
    {
        return $this->historiasParalelasRepository->show($id);
    }

    public function update(int $id, array $data)
    {
        return $this->historiasParalelasRepository->update($id, $data);
    }

    public function destroy(int $id)
    {
        return $this->historiasParalelasRepository->destroy($id);
    }

    
}