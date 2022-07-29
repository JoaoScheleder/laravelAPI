<?php

use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ConsultasController;
use App\Models\Especialidade;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

function createEspecialidades(){
    $canCreate = Especialidade::all()->count() == 0;
    $especialidades = [1=>'Pediatria',2=>'Cardiologia',3=>'Dermatologia',4=>'Nefrologia',5=>'Neurologia'];
    if($canCreate){
        foreach($especialidades as $especialidade){
            Especialidade::factory()->create([
                'especialidade' => $especialidade
            ]);
        }
    }
}

function createMedicos(){
    $canCreate = Medico::All()->count() ==0;
    if($canCreate){
        Medico::factory()->count(10)->create();
    }
}

function createPacientes(){
    $canCreate = Paciente::All()->count() ==0;
    if($canCreate){
        Paciente::factory()->count(50)->create();
    }
}

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/createFakeDatabase',function(){
    createEspecialidades();
    createMedicos();
    createPacientes();
});


// ESPECIALIDADES 

Route::apiResource('/especialidades',EspecialidadeController::class);
Route::apiResource('/medicos',MedicosController::class);
Route::apiResource('/pacientes',PacientesController::class);
Route::apiResource('/consultas',ConsultasController::class);
