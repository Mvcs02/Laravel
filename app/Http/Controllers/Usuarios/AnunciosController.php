<?php

namespace App\Http\Controllers\Usuarios;
use App\Models\propiedades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AnunciosController extends Controller
{
    function index(){
        $propiedades = propiedades::all();
        return view('Usuario.Anuncios', ['propiedades' => $propiedades]);
    }
}
