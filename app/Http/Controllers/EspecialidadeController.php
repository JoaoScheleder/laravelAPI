<?php

namespace App\Http\Controllers;

use App\Http\Requests\EspecialidadeRequest;
use App\Http\Resources\EspecialidadesResource;
use App\Models\Especialidade;

class EspecialidadeController extends Controller
{
    public function index()
    {
        $result = EspecialidadesResource::collection(Especialidade::all());
        return response()->json($result,200);
    }

    public function store(EspecialidadeRequest $request)
    {   
        $result = new EspecialidadesResource(Especialidade::create($request->all()));
        return response()->json($result,201);
    }

    public function show(int $id)
    {
        $result = new EspecialidadesResource(Especialidade::whereId($id)->get()->first());
        return response()->json($result,200);
    }

    public function update(Especialidade $especialidade ,EspecialidadeRequest $request)
    {  
        $especialidade->fill($request->all());
        $especialidade->save();
        return $especialidade;
    }

    public function destroy(int $id)
    {   
        Especialidade::destroy($id);
        return response()->noContent();
    }
}
