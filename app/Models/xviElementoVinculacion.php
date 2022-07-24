<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xviElementoVinculacion extends Model
{
    use HasFactory;
    protected $table = "xvi_elemento_vinculacion";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id_xvi',
        'tipo_vinculacion',
        'nombre',
    ];

    public function Vinculacion()
    {
       return $this->belongsTo(xviElemento::class,'id_xvi');
    }
}
