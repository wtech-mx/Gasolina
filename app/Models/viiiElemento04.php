<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiiElemento04 extends Model
{
    use HasFactory;
    protected $table = "viii_elemento_04";
    protected $primarykey = "id";

    protected $fillable = [
        'nombre',
        'area',
        'descripcion',
        'revision',
        'fecha',
        'pdf',
    ];
}
