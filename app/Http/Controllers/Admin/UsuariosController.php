<?php

namespace App\Http\Controllers\Admin;


use App\Models\usuarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = usuarios::with('ciudades')->get();
        return view('Admin.usuarios', compact('usuarios'));
    }
    
}
//$propiedades = propiedades::all();
    //return view('Usuario.index');
