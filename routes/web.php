<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerClientes;
use App\Http\Controllers\ControllerMascotas;
use App\Http\Controllers\ControllerCitas;
use App\Http\Controllers\ControllerCalendario;

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
//----------------------INICIO----------------------//
Route::get('/', function () {
    return view('layouts/index');
})->name('inicio');

//-----------------------CLIENTES-------------------//

Route::get('/clientes-inicio', [ControllerClientes::class, 'index'])->name('inicio.clientes');
Route::get('/clientes-crear', [ControllerClientes::class, 'create'])->name('crear.cliente');
Route::post('/clientes-guardar', [ControllerClientes::class, 'store'])->name('guardar.cliente');
Route::get('/clientes-editar/{dni}', [ControllerClientes::class, 'edit'])->name('editar.cliente');
Route::put('/clientes-update/{dni}', [ControllerClientes::class, 'update'])->name('update.cliente');
Route::delete('/clientes-eliminar/{dni}', [ControllerClientes::class, 'delete'])->name('eliminar.cliente');

//-----------------------MASCOTAS-------------------//
Route::get('/mascotas-inicio', [ControllerMascotas::class, 'index'])->name('inicio.mascotas');
Route::get('/mascotas-crear', [ControllerMascotas::class, 'create'])->name('crear.mascota');
Route::post('/mascotas-guardar', [ControllerMascotas::class, 'store'])->name('guardar.mascota');
Route::get('/mascotas-editar/{id}', [ControllerMascotas::class, 'edit'])->name('editar.mascota');
Route::put('/mascotas-update/{id}', [ControllerMascotas::class, 'update'])->name('update.mascota');
Route::delete('/mascotas-eliminar/{id}', [ControllerMascotas::class, 'delete'])->name('eliminar.mascota');

//-----------------------CITAS-------------------//
Route::get('/citas-inicio', [ControllerCitas::class, 'index'] )->name('inicio.citas');
Route::get('/citas-crear', [ControllerCitas::class, 'create'] )->name('crear.cita');
Route::post('/citas-guardar', [ControllerCitas::class, 'store'] )->name('guardar.cita');
Route::get('/citas/existe', [ControllerCitas::class, 'existe']);
Route::get('/citas-editar/{id}', [ControllerCitas::class, 'edit'])->name('editar.cita');
Route::put('/citas-update/{id}', [ControllerCitas::class, 'update'])->name('update.cita');
Route::delete('/citas-eliminar/{id}', [ControllerCitas::class, 'delete'])->name('eliminar.cita');

//-----------------------FULLCALENDAR-------------------//
Route::get('/fullCalendar-inicio', [ControllerCalendario::class, 'index'])->name('inicio.calendario');
