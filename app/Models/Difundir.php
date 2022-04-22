<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difundir extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'difundirs';

    protected $fillable = ['id_user','id_elemento','fecha','descripcion','tipo','inicial','final'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediosDifundirs()
    {
        return $this->hasMany('App\Models\MediosDifundir', 'id_difundir', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarea()
    {
        return $this->hasOne('App\Models\Tarea', 'id', 'id_elemento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    public function MedioDifundir()
    {
        return $this->hasOne('App\Models\MedioDifundir', 'id', 'id_difundir');
    }

}
