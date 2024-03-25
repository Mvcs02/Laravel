<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;


class usuarios extends Model implements Authenticatable // Implementar la interfaz Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_usuario',
        'usuario',
        'contraseña',
        'telefono',
        'correo',
        'id_rol',
        'id_ciudad'
    ];
}
