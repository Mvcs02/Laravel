<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mensajes;

class MensajesController extends Controller
{
    function index(){
        $mensajes = mensajes::all();
        return view('admin.Mensajes', compact('mensajes'));
    }
    //$propiedades = propiedades::all();
    //$usuarios = usuarios::with('ciudades')->get();
    //return view('Admin.usuarios', compact('usuarios'));
}
