<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller{
    function index(){
        return view('Usuario.index');
    }
    function ver(){
        return view('plantilla');
    }
}