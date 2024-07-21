<?php

namespace App\Http\Repositories;

use App\Models\videos;

class VideosRepository
{
    public function store(array $data)
    {
        $video = new Videos();
        $video->titulo = $data['titulo'];
        $video->path = $data['path'];
        $video->anoVideo = $data['anoVideo'];
        $video->IdMembros = $data['IdMembros'];
        $video->save();
        return $video;
    }

    public function index()
    {
        return Videos::all();
    }

    public function show(int $id)
    {
        return Videos::find($id);
    }

    public function update(int $id, array $data)
    {
        $video = Videos::find($id);
        $video->titulo = $data['titulo'] ?? $video->titulo;
        $video->path = $data['path'] ?? $video->path;
        $video->anoVideo = $data['anoVideo'] ?? $video->anoVideo;
        $video->IdMembros = $data['IdMembros'] ?? $video->IdMembros;
        $video->save();
        return $video;
    }

    public function destroy(int $id)
    {
        $video = Videos::find($id);
        $video->delete();
    }

    public function getVideosByMemberId(int $id)
    {
        return Videos::where('IdMembros', 'LIKE', "%$id%")->get();
    }

    public function getVideosByYear($year)
    {
        return Videos::where('anoVideo', 'LIKE', "%$year%")->get();
       
    }


}