<?php

namespace App\Http\Controllers\Usuarios;
use App\Models\propiedades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller{
    function index(){
        $ultimaPropiedad = propiedades::latest('id_casa')->take(3)->get();
        return view('Usuario.index',['ultimaPropiedad' => $ultimaPropiedad]);
    }
    function ver(){
        return view('plantilla');
    }
}