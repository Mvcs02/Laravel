<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    function index(){
        return view('Usuario.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son válidas, redirecciona al usuario a la página deseada
            return redirect()->intended('admin.Usuarios');
        }

        // Si las credenciales son inválidas, redirecciona de nuevo al formulario de inicio de sesión con un mensaje de error
        return redirect()->back()->withErrors(['message' => 'Credenciales inválidas']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('Usuario.login');
    }
}
