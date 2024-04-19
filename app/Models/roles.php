<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table = 'roles'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id_rol'; // Nombre de la columna que es clave primaria

    public $timestamps = false; // Indica si la tabla tiene los campos created_at y updated_at

    protected $fillable = [
        'nombre_rol',
    ];
}
