<?php

namespace App\Http\Controllers;

use App\Http\Services\VideosService;
use Exception;
use Illuminate\Http\Request;

class VideosController extends Controller
{

    public function index()
    {
        try {
            $service = new VideosService();
            $videos = $service->index();
            return response()->json($videos, 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao buscar videos!'], 400);
        }
    }

    public function store(Request $request)
    {
        try {
            $service = new VideosService();
            $video = $service->store($request->all());
            return response()->json($video, 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao cadastrar video!'], 400);
        }
    }

    public function show($id)
    {
        try {
            $service = new VideosService();
            $video = $service->show($id);
            return response()->json($video, 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao buscar video!'], 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $service = new VideosService();
            $video = $service->update($request->all(), $id);
            return response()->json($video, 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar video!'], 400);
        }
    }

    public function destroy($id)
    {
        try {
            $service = new VideosService();
            $service->delete($id);
            return response()->json(['message' => 'Video deletado com sucesso!'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao deletar video!'], 400);
        }
    }

    public function getVideosByYear($year)
    {
        try {
            $service = new VideosService();
            $videos = $service->getVideosByYear($year);
            return response()->json($videos, 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao buscar videos!'], 400);
        }
    }   

    public function getVideosByMemberId($id)
    {
        try {
            $service = new VideosService();
            $videos = $service->getVideosByMemberId($id);
            return response()->json($videos, 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Erro ao buscar videos!'], 400);
        }
    }
}
