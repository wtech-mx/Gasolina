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
        'estatus',
        'start',
        'end',
        'fecha_elaboracion',
        'proveedor',
        'pdf',
    ];
}
