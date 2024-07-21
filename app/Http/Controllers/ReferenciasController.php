<?php

namespace App\Http\Controllers;

use App\Http\Services\ReferenciasService;
use Illuminate\Http\Request;

class ReferenciasController extends Controller
{
    

    public function index()
    {
        try {
            $referenciaService = new ReferenciasService();
            $referencias = $referenciaService->index();
            return response()->json($referencias, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar referencias!'], 400);
        }
    }

    public function store(Request $request)
    {
        try{
            $data = $request->all();
            $referenciaService = new ReferenciasService();
            $referencia = $referenciaService->store($data);
            return response()->json($referencia);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao cadastrar referencia!'], 400);
        }
    }
    
    public function show(int $id)
    {
        try {
            $referenciaService = new ReferenciasService();
            $referencia = $referenciaService->show($id);
            return response()->json($referencia, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar referencia!'], 400);
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            $data = $request->all();
            $referenciaService = new ReferenciasService();
            $referencia = $referenciaService->update($id, $data);
            return response()->json($referencia, 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(int $id)
    {
        try {
            $referenciaService = new ReferenciasService();
            $referenciaService->destroy($id);
            return response()->json(['message' => 'Referencia deletada com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao deletar referencia!'], 400);
        }
    }
}
