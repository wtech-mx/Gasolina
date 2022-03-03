<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = "consultar";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'regla',
        'fecha',
        'aprobacion',
        'revision',
        'servicio',
    ];
}
