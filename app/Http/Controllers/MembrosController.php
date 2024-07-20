<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembrosRequest;
use App\Http\Services\MembrosService;
use Exception;

class MembrosController extends Controller
{
    public function store(MembrosRequest $request)
    {
        try {

            $service = new MembrosService();
            $membro = $service->store($request->all());
            return response()->json($membro, 201);
            
        } catch (Exception $e) {
            
            return response()->json(['message' => 'Erro ao cadastrar membro!'], 400);
        }
    }

    public function index()
    {
        try {

            $service = new MembrosService();
            $membros = $service->index();
            return response()->json($membros, 200);
            
        } catch (Exception $e) {
            
            return response()->json(['message' => 'Erro ao buscar membros!'], 400);
        }
    }

    public function show($id)
    {
        try {

            $service = new MembrosService();
            $membro = $service->show($id);
            return response()->json($membro, 200);
            
        } catch (Exception $e) {
            
            return response()->json(['message' => 'Erro ao buscar membro!'], 400);
        }
    }

    public function update(MembrosRequest $request, $id)
    {
        try {

            $service = new MembrosService();
            $membro = $service->update($request->all(), $id);
            return response()->json($membro, 200);
            
        } catch (Exception $e) {
            
            return response()->json(['message' => 'Erro ao atualizar membro!'], 400);
        }
    }

    public function destroy($id)
    {
        try {

            $service = new MembrosService();
            $service->delete($id);
            return response()->json(['message' => 'Membro deletado com sucesso!'], 200);
            
        } catch (Exception $e) {
            
            return response()->json(['message' => 'Erro ao deletar membro!'], 400);
        }
    }
}