<?php

namespace App\Http\Controllers;

use App\Http\Services\ReferenciasService;
use Illuminate\Http\Request;

class ReferenciasController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $referenciaService = new ReferenciasService();
        $referencia = $referenciaService->store($data);
        return response()->json($referencia);
    }
}
