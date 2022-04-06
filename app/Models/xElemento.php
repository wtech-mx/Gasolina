<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xElemento extends Model
{
    use HasFactory;
    protected $table = "x_elemento";
    protected $primarykey = "id";

    protected $fillable = [
        'id_user',
        'estado',
        'elemento',
        'cliente',

        'tanque',
        'recibido',
        'salida',
        'operador',
        'identificacion',
        'producto',
        'nota',
        'cantidad',
        'cantidad_antes',
        'cantidad_despues',
        'producto_tanqute',
        'energia',
        'suspender',
        'remision',
        'factura',

    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id');
    }
}
