<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primarykey = "id";

    protected $fillable = [
        'name',
        'emal',
        'sucursal',
        'id_empresa',
        'image',
        'title',
        'color',
        'url',
        'estatus',
        'start',
        'end',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id');
    }

}
