<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiElemento03 extends Model
{
    use HasFactory;
    protected $table = "vii_elemento_03";
    protected $primarykey = "id";

    protected $fillable = [
        'fecha',
        'servicio',
        'tipo',
        'descripcion',
        'solicitante',
        'id_reportado',
        'solicitud',
        'pdf',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id_reportado');
    }
}
