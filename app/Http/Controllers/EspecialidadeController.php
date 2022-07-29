<?php

namespace App\Http\Controllers;

use App\Http\Requests\EspecialidadeRequest;
use App\Models\Especialidade;

class EspecialidadeController extends Controller
{
    public function index()
    {
        return response()->json(Especialidade::all(),200);
    }

    public function store(EspecialidadeRequest $request)
    {   
        return response()->json(Especialidade::create($request->all()),201);
    }

    public function show(int $id)
    {
        return Especialidade::whereId($id)->get();
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
