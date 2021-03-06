<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejecutar extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'ejecutars';

    protected $fillable = ['id_user','cliente','tanque','recibido','salida','operador','identificacion','producto','nota','cantidad','remision','factura','producto_tanqute','cantidad_antes','cantidad_despues','energia','suspender','trillada_antes','trillada_despues'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    
}
