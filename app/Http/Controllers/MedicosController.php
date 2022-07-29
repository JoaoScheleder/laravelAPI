<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Models\Medico;

class MedicosController extends Controller
{
    public function index()
    {
        return response()->json(Medico::all(),200);
    }

    public function store(MedicoRequest $request)
    {   
        return response()->json(Medico::create($request->all()),201);
    }

    public function show(int $id)
    {
        return Medico::whereId($id)->get();
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
