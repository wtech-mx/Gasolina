<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanqueConfiguracion extends Model
{
    use HasFactory;
    protected $table = "tanque_configuracion";
    protected $primarykey = "id";

    protected $fillable = [
        'estatus',
        'pistola1',
        'pistola2',
        'pistola3',
    ];
}
