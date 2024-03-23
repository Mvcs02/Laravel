<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudades extends Model
{
    protected $table = 'ciudades';
    protected $primaryKey = 'id_ciudad';
    public $timestamps = false;

    protected $fillable = [
        'id_ciudad',
        'ciudad',
    ];

    // Relación con otras tablas si es necesario
}   
