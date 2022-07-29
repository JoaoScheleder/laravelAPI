<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use App\Http\Requests\ConsultaRequest;

class ConsultasController extends Controller
{
    public function index()
    {
        return response()->json(Consulta::all(),200);
    }

    public function store(ConsultaRequest $request)
    {   
        return response()->json(Consulta::create($request->all()),201);
    }

    public function show(int $id)
    {
        return Consulta::whereId($id)->get();
    }

    public function update(Consulta $consulta ,ConsultaRequest $request)
    {  
        $consulta->fill($request->all());
        $consulta->save();
        return $consulta;

    }

    public function destroy(int $id)
    {   
        Consulta::destroy($id);
        return response()->noContent();
    }
}
