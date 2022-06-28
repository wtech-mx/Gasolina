<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viiiElemento05 extends Model
{
    use HasFactory;
    protected $table = "viii_elemento_05";
    protected $primarykey = "id";

    protected $fillable = [
        'tipo',
        'id_responsable',
        'fecha_notificacion',
        'fecha_aprovacion',
        'reglas',
        'pdf',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id_responsable');
    }
}
