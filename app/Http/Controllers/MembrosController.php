<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembrosRequest;
use App\Http\Services\MembrosService;

class MembrosController extends Controller
{
    public function store(MembrosRequest $request)
    {
        try {

            $service = new MembrosService();
            $membro = $service->store($request->all());
            return response()->json($membro, 201);
            
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao cadastrar membro!'], 400);
        }
    }
}
