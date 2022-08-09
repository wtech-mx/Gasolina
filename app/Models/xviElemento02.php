<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xviElemento02 extends Model
{
    use HasFactory;
    protected $table = "xvi_elemento_02";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id_usuarios',
        'situacion_observada',
        'tipo',
        'lugar',
        'descripcion',
        'usuario',
        'fecha',
        'estatus',
        'seguimiento',
        'pdf',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id_usuarios');
    }
}
