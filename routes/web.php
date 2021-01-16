<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\ProfesorMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Rutas sin autenticación
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'auth'])->name('auth');


//Rutas para usuario autenticado
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//Rutas para profesor
Route::middleware([ProfesorMiddleware::class])->group(function () {
    Route::get('/listar-alumnos', [App\Http\Controllers\AlumnoController::class, 'index'])->name('alumnos');
    Route::get('/alta-alumno', [App\Http\Controllers\AlumnoController::class, 'create'])->name('alta-alumno');});

Route::get('/alumnos', [App\Http\Controllers\AlumnoController::class, 'list'])->name('tabla-alumnos');
