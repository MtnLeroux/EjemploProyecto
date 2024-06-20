<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;


Route::get('/',[HomeController::class,'index'])->name('home.index');//->middleware('auth');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::post('usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');
