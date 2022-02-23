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
        'id_user',
        'elemntos',
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
        'image',
        'title',
        'color',
        'url',
        'estatus',
        'start',
        'end',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
