<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xvElemento extends Model
{
    use HasFactory;
    protected $table = "xv_elemento";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'title',
        'image',
        'color',
        'tipo_auditoria',
        'alcance',
        'contratista',
        'objetivo',
        'start',
        'fecha_inicio',
        'end',
        'estatus',
        'check',
        'pdf',
    ];
}
