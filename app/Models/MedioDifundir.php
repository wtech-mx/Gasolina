<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioDifundir extends Model
{
    use HasFactory;
    protected $table = "medios_difundir";
    protected $primarykey = "id";

    protected $fillable = [
        'id_difundir',
        'comunicacion',
        'descripcion',

    ];
}
