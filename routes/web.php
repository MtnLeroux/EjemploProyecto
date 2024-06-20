<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\EspecialistasController;
use App\Http\Controllers\ItemsController;

Route::get('/',[HomeController::class,'index'])->name('home.index');//->middleware('auth');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::post('usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');

Route::get('/pacientes',[PacientesController::class,'index'])->name('pacientes.index');


Route::get('/especialistas',[EspecialistasController::class,'index'])->name('especialistas.index');


Route::get('/inventario',[ItemsController::class,'index'])->name('inventario.index');
