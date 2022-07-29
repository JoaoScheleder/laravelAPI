<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use App\Http\Requests\ConsultaRequest;
use App\Http\Resources\ConsultasResource;

class ConsultasController extends Controller
{
    public function index()
    {
        $result = ConsultasResource::collection(Consulta::all());
        return response()->json($result,200);
    }

    public function store(ConsultaRequest $request)
    {   
        $result = new ConsultasResource(Consulta::create($request->all()));
        return response()->json($result,201);
    }

    public function show(int $id)
    {
        $result = new ConsultasResource(Consulta::whereId($id)->get()->first());
        return response()->json($result,200);
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
