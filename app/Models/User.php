<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use  HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'apellido',
        'telefono',
        'cp',
        'rfc',
        'calle',
        'puesto',
        'empresa',
        'firma',
        'id_sucursal',
        'id_empresa',

        'alta',
        'baja',
        'enfermedad',
        'alergias',
        'seguro_social',
        'estado_civil',
        'estudios',
        'contratacion',
        'personal',
        'jornada',
        'rotacion_turnos',
        'tiempo_puesto',
        'experiencia',
        'departamento',
        'nombre_emergencia',
        'telefono_emergencia',
        'foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserEmpresa()
    {
       return $this->belongsTo(User::class,'id_empresa');
    }

    public function UserSucursal()
    {
       return $this->belongsTo(User::class,'id_sucursal');
    }

    public function Tareas()
    {
       return $this->belongsTo('App\Models\Tareas','id_user');
    }
    public function ViElemento()
    {
        return $this->hasOne('App\Models\ViElemento', 'id_user');
    }
}
