<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xviElemento extends Model
{
    use HasFactory;
    protected $table = "xvi_elemento";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'hora',
        'area',
        'daño_accidente',
        'tipo_personal',
        'usuario',
        'descripcion',
        'pdf',
    ];
}
