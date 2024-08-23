<?php

namespace App\Http\Controllers;

use App\Http\Services\FotosService;
use Illuminate\Http\Request;

class FotosController extends Controller
{


    public function index()
    {
        try {
            $fotosService = new FotosService();
            $fotos = $fotosService->index();
            return response()->json($fotos, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar fotos!'], 400);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');

                $timestamp = now()->format('YmdHis');
                $filename = $timestamp . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('photos', $filename, 'public');

                $data = $request->all();
                $data['path'] = '/storage/' . $path;

                $fotosService = new FotosService();
                $foto = $fotosService->store($data);

                return response()->json($foto);
            } else {
                return response()->json(['message' => 'Nenhuma foto foi enviada!'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao cadastrar foto!'], 400);
        }
    }


    public function show(int $id)
    {
        try {
            $fotosService = new FotosService();
            $foto = $fotosService->show($id);
            return response()->json($foto, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar foto!'], 400);
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            $data = $request->all();
            $fotosService = new FotosService();
            $foto = $fotosService->update($id, $data);
            return response()->json($foto, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar foto!'], 400);
        }
    }

    public function destroy(int $id)
    {
        try {
            $fotosService = new FotosService();
            $foto = $fotosService->delete($id);
            return response()->json(['message' => 'Foto apagada com Sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao deletar foto!'], 400);
        }
    }

    public function getFotosByYear(Request $request)
    {
        try {
            $fotosService = new FotosService();
            $fotos = $fotosService->getFotosByYear($request->year);
            return response()->json($fotos, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar fotos por ano!'], 400);
        }
    }

    public function getFotosByMemberId($id)
    {
        try {
            $fotosService = new FotosService();
            $fotos = $fotosService->getFotosByMemberId($id);
            return response()->json($fotos, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar fotos por membro!'], 400);
        }
    }
}
