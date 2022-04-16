<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preventiva extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'preventivas';

    protected $fillable = ['id_user','elemento','descripcion','estatus','fecha'];

}
