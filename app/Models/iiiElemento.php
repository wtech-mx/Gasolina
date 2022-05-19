<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iiiElemento extends Model
{
    use HasFactory;
    protected $table = "iii_elemento";
    protected $primarykey = "id";

    protected $fillable = [
        'leyes',
        'marco',
        'descripcion',
        'ambito',
        'mecanismo_cumplimiento',
        'mecanismo_especifico',
        'periodicidad',
        'obligatorio',
        'aplica',

    ];
}
