<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFormato extends Model
{
    use HasFactory;
    protected $table = "detalle_formato";
    protected $primarykey = "id";

    protected $fillable = [
        'elemento',
        'id_user',
        'color',
        'start',
        'end',
        'correctiva',
        'actualizar',
        'consultar',
        'difundir',
        'generar',
        'title',
    ];
}
