<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    use HasFactory;

    protected $table = "tareas";
    protected $primarykey = "id";

    protected $fillable = [
        'id_user',
        'descripcion',
        'elementos',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Elementos()
    {
        return $this->hasOne('App\Models\Elementos', 'id', 'id_tareas');
    }
}
