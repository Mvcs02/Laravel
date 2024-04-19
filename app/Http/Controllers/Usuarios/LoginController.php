<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\usuarios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('Usuario.login');
    }

    public function register(Request $request)
    //validar los datos

    {

    }


 public function login(Request $request)
    //validar los datos

    {

    }

}
