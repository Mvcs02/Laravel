<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudades extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'ciudad',
    ];
    protected $table = 'ciudades';
    // Relación con otras tablas si es necesario
}
