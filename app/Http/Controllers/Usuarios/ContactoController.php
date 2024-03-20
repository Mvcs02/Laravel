<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacto;


class ContactoController extends Controller
{
    function index(){
        return view('Usuario.Contacto');
    }
    public function enviarMensaje(Request $request)
    {
        $mensaje = new contacto();
        $mensaje->nombre = $request->input('nombre');
        $mensaje->email = $request->input('email');
        $mensaje->telefono = $request->input('telefono');
        $mensaje->mensaje = $request->input('mensaje');
        $mensaje->save();

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
