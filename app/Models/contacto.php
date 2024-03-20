<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['nombre', 'email'. 'telefono', 'mensaje'];
    protected $table = 'contacto';
}
