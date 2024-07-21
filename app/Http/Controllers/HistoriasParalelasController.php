<?php

namespace App\Http\Controllers;

use App\Http\Services\HistoriasParalelasService;
use Illuminate\Http\Request;

class HistoriasParalelasController extends Controller
{
    public function index()
    {
        try {
            $historiasService = new HistoriasParalelasService();
            $historias = $historiasService->index();
            return response()->json($historias, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar historias!'], 400);
        }
    }

    public function store(Request $request)
    {
        try{
            $data = $request->all();
            $historiasService = new HistoriasParalelasService();
            $historia = $historiasService->store($data);
            return response()->json($historia);
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
    
    public function show(int $id)
    {
        try {
            $historiasService = new HistoriasParalelasService();
            $historia = $historiasService->show($id);
            return response()->json($historia, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar historia!'], 400);
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            $data = $request->all();
            $historiasService = new HistoriasParalelasService();
            $historia = $historiasService->update($id, $data);
            return response()->json($historia, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar historia!'], 400);
        }
    }

    public function destroy(int $id)
    {
        try {
            $historiasService = new HistoriasParalelasService();
            $historiasService->destroy($id);
            return response()->json(['message' => 'Historia deletada com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao deletar historia!'], 400);
        }
    }

    
}
