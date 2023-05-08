<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $primarykey = "p";
    protected $fillable = [
    'Codigo',
    'Nombre',
    'Apellido',
    'FechaN',
    'Telefono',
    'Estado',
    ];
}
