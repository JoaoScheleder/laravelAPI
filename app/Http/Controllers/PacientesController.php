<?php

namespace App\Http\Controllers;


use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;

class PacientesController extends Controller
{
    public function index()
    {
        return response()->json(Paciente::all(),200);
    }

    public function store(PacienteRequest $request)
    {   
        return response()->json(Paciente::create($request->all()),201);
    }

    public function show(int $id)
    {
        return Paciente::whereId($id)->get();
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
