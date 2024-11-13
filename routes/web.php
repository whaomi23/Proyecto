<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\CategoriaController;

// Ruta por defecto para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas para autenticación con Laravel UI (login, registro, etc.)
Auth::routes();

// Ruta protegida para el home, después del login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Grupo de rutas protegidas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    
    // Rutas de Tiendas
    Route::resource('tiendas', TiendaController::class);
    
    // Rutas de Productos
    Route::resource('productos', ProductoController::class);
    
    // Rutas de Artículos
    Route::resource('articulos', ArticuloController::class);
    
    // Rutas de Tallas
    Route::resource('tallas', TallaController::class);
    
    // Rutas de Categorías
    Route::resource('categorias', CategoriaController::class);

});
