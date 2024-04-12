<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\usuarios as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Sanctum\HasApiTokens;


class usuarios extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_casa';

    protected $fillable = [
        'nombre_usuario',
        'user',
        'password',
        'telefono',
        'email',
        'id_rol',
        'id_ciudad'
        
    ];
   
}
