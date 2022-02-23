<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correctiva extends Model
{
    use HasFactory;

    protected $table = "correctiva";
    protected $primarykey = "id";

    protected $fillable = [
        'id_elemento',
        'fecha',
        'descripcion',
    ];

    public function Elemento()
    {
        return $this->belongsTo(Elementos::class, 'id');
    }
}
