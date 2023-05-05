<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $primarykey = "e";
    protected $fillable = [
       'codigo',
       'asunto',
        'FechaRegistro',
        'FechaInicio',
        'horaInicio',
        'horaFin',
        'Ubicacion',
        'tipo',
        'pe',
    ];
}
