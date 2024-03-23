<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Propiedad;
use App\Models\Casa;
use App\Models\Usuario;

class PropiedadController extends Controller
{
    public function mostrarDetalles($id)
    {
        $propiedad = Propiedad::findOrFail($id);
        
        // Suponiendo que tienes una relación con la tabla "casas" y "usuarios" desde la propiedad
        // Si no, ajusta esta lógica según tu estructura de base de datos y relaciones de modelos
        $casas = $propiedad->casas;
        $usuarios = $propiedad->usuarios;

        return view('usuario.propiedad', compact('propiedad', 'casas', 'usuarios'));
    }
}
