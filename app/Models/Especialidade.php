<?php

namespace App\Models;

use Database\Factories\EspecialidadeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    use HasFactory;
    
    protected $fillable = ['especialidade'];

    protected static function newFactory(){
        return EspecialidadeFactory::new();
    }
}
