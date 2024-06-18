<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('home.index');//->middleware('auth');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
