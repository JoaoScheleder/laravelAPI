<?php

namespace App\Models;

use Database\Factories\MedicoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = ['nome','especialidade_id','crm'];

    protected static function newFactory(){
        return MedicoFactory::new();
    }
}
