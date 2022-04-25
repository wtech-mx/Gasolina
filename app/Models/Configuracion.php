<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;
    protected $table = "configuracion";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'tanque1',
        'tanque2',
        'tanque3',
        'name1',
        'firma1',
        'name2',
        'firma2',
        'name3',
        'firma3',
        'color_diaria',
        'color_mensual',
        'color_semestral',
        'color_no_realizada',
        'color_elemento',
    ];
}
