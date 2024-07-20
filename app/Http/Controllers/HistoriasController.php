<?php

namespace App\Http\Controllers;

use App\Http\Services\HistoriasService;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $historiasService = new HistoriasService();
        $historia = $historiasService->store($data);
        return response()->json($historia);
    }
}
