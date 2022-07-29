<?php

namespace App\Http\Controllers;


use App\Http\Requests\PacienteRequest;
use App\Http\Resources\PacientesResource;
use App\Models\Paciente;

class PacientesController extends Controller
{
    public function index()
    {
        $result = PacientesResource::collection(Paciente::all());
        return response()->json($result,200);
    }

    public function store(PacienteRequest $request)
    {   
        $result = new PacientesResource(Paciente::create($request->all()));
        return response()->json($result,201);
    }

    public function show(int $id)
    {
        $result = new PacientesResource((Paciente::whereId($id)->get()->first()));
        return response()->json($result,200);
    }
    public function update(Paciente $paciente ,PacienteRequest $request)
    {  
        $paciente->fill($request->all());
        $paciente->save();
        return $paciente;

    }

    public function destroy(int $id)
    {   
        Paciente::destroy($id);
        return response()->noContent();
    }
}
