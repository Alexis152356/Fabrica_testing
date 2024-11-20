<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Página de inicio, accesible solo si el usuario está autenticado
Route::middleware('auth')->get('/inicio', function () {
   // Si 'inicio.blade.php' está en 'resources/views/auth/inicio.blade.php'
return view('auth.inicio');

})->name('inicio');

// Página de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Página de registro
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


use App\Http\Controllers\ManualController;



// Ruta para mostrar el formulario de carga de manuales
Route::get('/manuales/create', [ManualController::class, 'index'])->name('manuales.create');

// Rutas para manejar los manuales
Route::post('/manuales', [ManualController::class, 'store'])->name('manuales.store');

// Ruta para listar los manuales (mostrar los manuales)
Route::get('/manuales/listar', [ManualController::class, 'list'])->name('manuales.list');



// Ruta para la página de inicio (home), que debe mostrar la vista home.blade.php
Route::get('/home', function () {
    return view('auth.home'); // Asegúrate de que la vista se llame 'home.blade.php'
});

