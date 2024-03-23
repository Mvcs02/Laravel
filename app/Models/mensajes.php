<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensajes extends Model
{
    use HasFactory;
    public $timestamps = [
        'nombre',
        'email',
        'telefono',
        'mensaje'
    ];
    protected $table = 'mensajes';
}
