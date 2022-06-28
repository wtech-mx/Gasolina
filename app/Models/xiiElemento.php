<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xiiElemento extends Model
{
    use HasFactory;
    protected $table = "xii_elemento";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'fecha_alta',
        'nombre',
        'tipo',
        'estatus',
        'razon_social',
        'email',
        'telefono',
        'direccion',
        'id_responsable',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id_responsable');
    }
}
