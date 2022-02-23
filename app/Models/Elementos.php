<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elementos extends Model
{
    use HasFactory;

    protected $table = "elementos";
    protected $primarykey = "id";

    protected $fillable = [
        'id_tareas',
        'consultar',
        'seguimiento',
        'difundir',
        'correctiva',
        'ejecutar',
        'entrada',
        'salida',
        'extraordinaria',
        'programado',
        'actualizar',
        'alta',
        'evaluar',
    ];

    public function Tareas()
    {
        return $this->belongsTo(Tareas::class, 'id');
    }
}
