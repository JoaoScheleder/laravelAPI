<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['medico_id','especialidade_id'];

    use HasFactory;

}
