<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactoController extends Controller
{
    function index(){
        return view('Usuario.Contacto');
    }
}
