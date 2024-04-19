<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $table = 'venta';
    public $timestamps = false;
    protected $primaryKey = 'id_venta';
    protected $fillable = ['nombre_venta'
];
// Relación con el modelo Contacto
public function contacto()
{
    return $this->belongsTo(contacto::class, 'id_contacto');
}
}
