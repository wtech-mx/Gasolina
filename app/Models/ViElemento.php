<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViElemento extends Model
{
    use HasFactory;
    protected $table = "vi_elemento";
    protected $primarykey = "id";

    protected $fillable = [
        'id_user',
        'elemento',

        'pregunta1',
        'fecha1',
        'pregunta2',
        'fecha2',
        'pregunta3',
        'fecha3',
        'pregunta4',
        'fecha4',
        'pregunta5',
        'fecha5',
        'pregunta6',
        'fecha6',
        'pregunta7',
        'fecha7',
        'pregunta8',
        'fecha8',
        'pregunta9',
        'fecha9',
        'pregunta10',
        'fecha10',
        'pregunta11',
        'fecha11',
        'pregunta12',
        'fecha12',
        'pregunta13',
        'fecha13',
        'pregunta14',
        'fecha14',
        'pregunta15',
        'fecha15',
        'pregunta16',
        'fecha16',
        'pregunta17',
        'fecha17',
        'pregunta18',
        'fecha18',
        'pregunta19',
        'fecha19',
        'pregunta20',
        'fecha20',
        'pregunta21',
        'fecha21',
        'pregunta22',
        'fecha22',
        'pregunta23',
        'fecha23',
        'pregunta24',
        'fecha24',
        'pregunta25',
        'fecha25',
        'pregunta26',
        'fecha26',
        'pregunta27',
        'fecha27',
        'pregunta28',
        'fecha28',
        'pregunta29',
        'fecha29',
    ];

    public function User()
    {
       return $this->belongsTo(User::class,'id');
    }
}
