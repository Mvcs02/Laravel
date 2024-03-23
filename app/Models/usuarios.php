<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
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
