<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiiElemento01 extends Model
{
    use HasFactory;
    protected $table = "viii_elemento_01";
    protected $primarykey = "id";

    protected $fillable = [
        'tipo',
        'reglas',
        'fecha',
        'aprobacion',
        'notificacion',
        'pdf',
        'revision',
    ];
}
