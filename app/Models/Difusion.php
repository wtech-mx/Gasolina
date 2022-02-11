<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Difusion extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'difusions';

    protected $fillable = ['descripcion','externa','interna','fecha_inicio','fecha_final'];
	
}
