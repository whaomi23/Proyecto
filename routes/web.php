<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\TallaController;


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

// Redirección automática desde la raíz
Route::get('/', function () {
    // Si el usuario está autenticado, redirigir a /home
    if (Auth::check()) {
        return redirect()->route('home');
    }
    // Si no está autenticado, redirigir a /login
    return redirect()->route('login');
});

// Rutas de autenticación (login, register, etc.)
Auth::routes();

// Rutas protegidas por el middleware 'auth'
Route::middleware(['auth'])->group(function () {
    // Página de inicio después de iniciar sesión
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Rutas para recursos
    Route::resource('tiendas', TiendaController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('articulos', ArticuloController::class);
    Route::resource('tallas', TallaController::class);
});