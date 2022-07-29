<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Http\Resources\MedicosResource;
use App\Models\Medico;

class MedicosController extends Controller
{
    public function index()
    {
        $result = MedicosResource::collection(Medico::all());
        return response()->json($result,200);
    }

    public function store(MedicoRequest $request)
    {   
        $result = new MedicosResource(Medico::create($request->all()));
        return response()->json($result,201);
    }

    public function show(int $id)
    {
        $result = new MedicosResource(Medico::whereId($id)->get()->first());
        return response()->json($result,200);
    }

    public function update(Medico $medico ,MedicoRequest $request)
    {  
        $medico->fill($request->all());
        $medico->save();
        return $medico;
    }

    public function destroy(int $id)
    {   
        Medico::destroy($id);
        return response()->noContent();
    }
}
