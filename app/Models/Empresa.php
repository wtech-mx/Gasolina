<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $primarykey = "id";

    protected $fillable = [
        'empresa',
        'emal',
        'rfc',
        'entidad',
        'calle',
        'cp',
        'ciudad',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id');
    }
}
