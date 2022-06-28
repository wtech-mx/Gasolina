<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiiElemento03 extends Model
{
    use HasFactory;
    protected $table = "viii_elemento_03";
    protected $primarykey = "id";

    protected $fillable = [
        'autorizacion',
        'condicionante',
        'etapa',
        'autoridad',
        'obtencion',
        'renovacion',
        'cumplimiento',
        'periodicidad',
        'pdf',
        'titulo',
        'start',
        'end',
        'color',
        'check',
    ];
}
