<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NosotrosController extends Controller
{
    function index(){
        return view('Usuario.Nosotros');
    }
}
