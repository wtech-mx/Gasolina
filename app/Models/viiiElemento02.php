<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiiElemento02 extends Model
{
    use HasFactory;
    protected $table = "viii_elemento_02";
    protected $primarykey = "id";

    protected $fillable = [
        'nombre',
        'estatus',
        'pdf',
    ];
}
