<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xivElemento02 extends Model
{
    use HasFactory;
    protected $table = "xiv_elemento_02";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'tanque',
        'laboratorio',
        'tipo',
        'num_autorizacion',
        'fecha_solicitud',
        'fecha_seguimiento',
        'estatus',
        'pdf',
    ];
}
