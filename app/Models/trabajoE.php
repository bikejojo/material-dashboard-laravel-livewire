<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajoE extends Model
{
    protected $primaryKey = "codtrabajo";
    protected $fillable = [
       'codorg',
        'codfot',
        'codeve'
    ];
}
