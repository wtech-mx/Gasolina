<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xiiElementoUsuarios extends Model
{
    use HasFactory;
    protected $table = "xii_elemento_usuarios";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id_usuarios',
        'id_xii',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id_usuarios');
    }
}
