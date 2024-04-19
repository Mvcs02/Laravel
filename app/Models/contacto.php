<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $table = 'contacto';
    public $timestamps = false;
    protected $primaryKey = 'id_contacto';
    protected $fillable = ['nombre', 
    'email', 
    'telefono', 
    'mensaje'
];
// Relación con el modelo Ciudad
public function Casas()
{
    return $this->belongsTo(propiedades::class, 'id_casa');
}
    
}
