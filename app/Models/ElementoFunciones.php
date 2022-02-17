<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementoFunciones extends Model
{
    use HasFactory;

    protected $table = "elemento_funciones";
    protected $primarykey = "id";

    protected $fillable = [
        'formato',
        'configurado',
    ];
}
