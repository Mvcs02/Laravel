<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class usuarios extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_usuario',
        'usuario',
        'contraseña',
        'telefono',
        'correo',
        'id_rol',
        'id_ciudad'
    ];
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    // Relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(roles::class, 'id_rol');
    }

    // Relación con el modelo Ciudad
    public function ciudad()
    {
        return $this->belongsTo(ciudades::class, 'id_ciudad');
    }
}
