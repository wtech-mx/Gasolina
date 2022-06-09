<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiElemento extends Model
{
    use HasFactory;

    protected $table = "vii_elemento";
    protected $primarykey = "id";

    protected $fillable = [
        'fecha',
        'lugar',
        'observada',
        'tipo',
        'descripcion',
        'id_empleado',
        'contratista',
        'visitante',
        'reportado',
        'observacion',
        'responsable',
        'estatus',
        'seguimiento',
        'pdf',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id');
    }
}
