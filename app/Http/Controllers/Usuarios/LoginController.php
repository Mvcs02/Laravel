<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Usuario.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'contraseña');

        if (Auth::attempt($credentials)) {
            // La autenticación fue exitosa, redirigir al usuario a la página deseada
            return redirect()->intended('/usuarios');
        }

        // Autenticación fallida, redireccionar de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect()->back()->withInput($request->only('usuario'))->withErrors(['message' => 'Credenciales inválidas']);
    }

    public function logout(Request $request)
{
    Auth::logout();

    // Redirigir al usuario a la vista del formulario de inicio de sesión
    return redirect()->route('login');
}
}
