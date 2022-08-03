<?php

namespace App\Models;

use Database\Factories\PacienteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['nome','telefone','email', 'cep', 'endereco'];

    protected static function newFactory(){
        return PacienteFactory::new();
    }
}
