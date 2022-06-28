<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ixElemento extends Model
{
    use HasFactory;
    protected $table = "ix_elemento";
    protected $primarykey = "id";

    protected $fillable = [
        'mejores_practicas',
        'marco_normativo',
        'dependencia',
        'fecha',
        'tipo',
        'reglas',
        'mecanismos',
        'configuracion',
        'pdf',
    ];
}
