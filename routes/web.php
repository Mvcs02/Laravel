<?php

use Illuminate\Support\Facades\Route;
/* Cntroladores Usuario */
use App\Http\Controllers\Usuarios\IndexController;
use App\Http\Controllers\Usuarios\NosotrosController;
use App\Http\Controllers\Usuarios\AnunciosController;
use App\Http\Controllers\Usuarios\ContactoController;
use App\Http\Controllers\Usuarios\LoginController;
use App\Http\Controllers\Usuarios\RegisterController;
use App\Http\Controllers\Usuarios\PropiedadController;

/* Controladores Admin */
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Admin\PropiedadesController;
use App\Http\Controllers\Admin\MensajesController;
use App\Http\Controllers\Admin\CiudadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* Paginas de usuario */
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/Nosotros', [NosotrosController::class, 'index'])->name('Nosotros');
Route::get('/Anuncios', [AnunciosController::class, 'index'])->name('Anuncios');
Route::get('/Contacto', [ContactoController::class, 'index'])->name('Contacto');
Route::post('/Contacto', [ContactoController::class, 'enviarMensaje'])->name('contacto.enviar');
Route::get('/usuario/propiedad/{id_casas}', [PropiedadController::class, 'mostrarDetalles'])->name('usuario.propiedad');

/* LOGIN */
// Rutas para el inicio de sesión
// Ruta para mostrar el formulario de inicio de sesión

Route::controller(LoginController::class)->group(function(){
Route::get('login', 'index');
Route::post();
Route::get();
});
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Ruta para procesar el inicio de sesión (debe ser de tipo 'post')
Route::post('/login', [LoginController::class, 'login']);


// Ruta para la página de usuarios, protegida por el middleware 'auth'
Route::get('/Usuarios', [UsuariosController::class, 'index'])->name('Usuarios')->middleware('auth');

// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/* Paginas Admin */
Route::get('/Propiedades', [PropiedadesController::class, 'index'])->name('Propiedades');
Route::get('/Mensajes', [MensajesController::class, 'index'])->name('Mensajes');
Route::get('/Ciudad', [CiudadController::class, 'index'])->name('Ciudad');
Route::get('/plantilla', [IndexController::class, 'ver'])->name('plantilla');

/* Pagina Vendedor */
