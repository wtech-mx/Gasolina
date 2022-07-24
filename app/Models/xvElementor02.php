<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xvElementor02 extends Model
{
    use HasFactory;
    protected $table = "xv_elementor_02";
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
        'fecha_auditoria',
        'contratista',
        'pdf',
    ];
}
