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
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        try {
            $mensaje = new Contacto();
            $mensaje->nombre = $request->input('nombre');
            $mensaje->email = $request->input('email');
            $mensaje->telefono = $request->input('telefono');
            $mensaje->mensaje = $request->input('mensaje');
            $mensaje->save();

            return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.');
        }
    }
}
