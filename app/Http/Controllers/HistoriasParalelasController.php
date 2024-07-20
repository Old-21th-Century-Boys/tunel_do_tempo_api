<?php

namespace App\Http\Controllers;

use App\Http\Services\HistoriasService;
use Illuminate\Http\Request;

class HistoriasParalelasController extends Controller
{
    public function store(Request $request)
    {
        try{
            $data = $request->all();
            $historiasService = new HistoriasService();
            $historia = $historiasService->store($data);
            return response()->json($historia);
        }
        catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
