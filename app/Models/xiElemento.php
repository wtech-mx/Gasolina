<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xiElemento extends Model
{
    use HasFactory;
    protected $table = "xi_elemento";
    protected $primarykey = "id";

    protected $fillable = [
        'componente',
        'id_det',
        'subcomponente',
        'etiqueta',
        'marca',
        'modelo',
        'serie',
        'pdf',
    ];
}
