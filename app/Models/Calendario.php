<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    protected $table = "calendario";
    protected $primarykey = "id";
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'titulo',
        'descripcion',
        'img',
        'color',
        'start',
        'end',
        'status',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id_user');
    }
}
