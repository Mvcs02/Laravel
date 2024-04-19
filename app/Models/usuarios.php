<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class usuarios extends Model implements Authenticatable
{
    use AuthenticableTrait;

    // Resto del código del modelo

    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_usuarios'; // Nombre de la columna que es clave primaria

    public $timestamps = false; // Indica si la tabla tiene los campos created_at y updated_at

    protected $fillable = [
        'nombre_usuario',
        'usuario',
        'contraseña',
        'telefono',
        'correo',
        'id_rol',
        'id_ciudad',
    ];

    // Relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Roles::class, 'id_rol');
    }

    // Relación con el modelo Ciudad
    public function ciudades()
    {
        return $this->belongsTo(ciudades::class, 'id_ciudad');
    }
}