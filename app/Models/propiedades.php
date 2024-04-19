<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedades extends Model
{
    use HasFactory;
    protected $table = 'casas';

    protected $primaryKey = 'id_casa';

    protected $fillable = ['nombre_casa', 
    'imagen', 
    'estatus', 
    'habitaciones', 
    'baños', 
    'carro', 
    'm2', 
    'ubicacion', 
    'descripcion', 
    'precio'
    ];
        // Relación con el modelo usuarios
        public function Usuarios()
        {
            return $this->belongsTo(Usuario::class, 'id_usuarios');
        }
        // Relación con el modelo venta
        public function Venta()
        {
            return $this->belongsTo(venta::class, 'id_venta');
        }
        // Relación con el modelo Ciudad
        public function Ciudades()
        {
            return $this->belongsTo(venta::class, 'id_ciudad');
        }
    
}
