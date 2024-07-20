<?php

namespace App\Http\Repositories;

use App\Models\Videos;

class VideosRepository
{
    public function store(array $data)
    {
        $video = new Videos();
        $video->titulo = $data['titulo'];
        $video->path = $data['path'];
        $video->anoVideo = $data['anoVideo'];
        $video->save();
        return $video;
    }

    public function index()
    {
        return Videos::all();
    }

    public function show($id)
    {
        return Videos::find($id);
    }

    public function update(array $data, $id)
    {
        $video = Videos::find($id);
        $video->titulo = $data['titulo'];
        $video->path = $data['path'];
        $video->anoVideo = $data['anoVideo'];
        $video->save();
        return $video;
    }

    public function delete($id)
    {
        $video = Videos::find($id);
        $video->delete();
    }

    public function getVideosByYear($year)
    {
        return Videos::where('anoVideo', $year)->get();
    }

    public function getVideosByUser($user)
    {
       //
    }

}