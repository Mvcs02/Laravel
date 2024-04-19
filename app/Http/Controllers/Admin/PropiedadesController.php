<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propiedades;


class PropiedadesController extends Controller
{
    function index(){
        $propiedades = propiedades::all();
        return view('admin.Propiedades', compact('propiedades'));
    }
    //$propiedades = propiedades::all();
    //$usuarios = usuarios::with('ciudades')->get();
    //return view('Admin.usuarios', compact('usuarios'));
}
