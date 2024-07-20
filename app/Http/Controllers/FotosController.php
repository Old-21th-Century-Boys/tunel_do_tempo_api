<?php

namespace App\Http\Controllers;

use App\Http\Services\FotosService;
use Illuminate\Http\Request;

class FotosController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $fotosService = new FotosService();
        $foto = $fotosService->store($data);
        return response()->json($foto);
    }

    public function index()
    {
        $fotosService = new FotosService();
        $fotos = $fotosService->index();
        return response()->json($fotos);
    }

    public function show($id)
    {
        $fotosService = new FotosService();
        $foto = $fotosService->show($id);
        return response()->json($foto);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $fotosService = new FotosService();
        $foto = $fotosService->update($data, $id);
        return response()->json($foto);
    }

    public function destroy($id)
    {
        $fotosService = new FotosService();
        $fotosService->delete($id);
        return response()->json(['message' => 'Foto deletada com sucesso!']);
    }

    public function FotosByYear($year)
    {
        $fotosService = new FotosService();
        $fotos = $fotosService->getFotosByYear($year);
        return response()->json($fotos);
    }
}
