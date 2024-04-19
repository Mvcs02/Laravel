<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensajes extends Model
{
    protected $table = 'mensajes';
    public $timestamps = false;
    protected $primaryKey = 'id_mensajes';
    protected $fillable = ['nombre',
    'mensaje',
    'email', 
    'celular'
];
// Relación con el modelo Ciudad
public function Casas()
{
    return $this->belongsTo(propiedades::class, 'id_casa');
}
    public function Usuarios()
    {
        return $this->belongsTo(Usuario::class, 'id_usuarios');
    }
}
