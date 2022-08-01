<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xivElemento extends Model
{
    use HasFactory;
    protected $table = "xiv_elemento";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'subcomponente',
        'fecha_solicitud',
        'vigencia',
        'nombre_unidad',
        'numero_autorizacion',
        'observaciones',
        'error_max',
        'valor_patron',
        'incertidumbre',
        'resolucion_instrumento',
        'pdf',
    ];
}
