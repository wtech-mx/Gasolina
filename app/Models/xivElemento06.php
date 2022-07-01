<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xivElemento06 extends Model
{
    use HasFactory;
    protected $table = "xiv_elemento_06";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'fecha',
        'incidencia',
        'dependencia',
        'observaciones',
        'pdf',
    ];
}
