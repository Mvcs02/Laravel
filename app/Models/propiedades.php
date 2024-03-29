<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedades extends Model
{
    use HasFactory;
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
    'precio'];
    protected $table = 'casas';
}
