<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProveedor extends Model
{
    use HasFactory;
    protected $table = "user_proveedor";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'correo',
        'puesto',
        'telefono',
        'cargo',
        'pdf',
    ];

}
