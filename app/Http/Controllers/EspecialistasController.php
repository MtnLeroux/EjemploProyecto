<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialista;

class EspecialistasController extends Controller
{
    public function index(){
        $especialistas = Especialista::all();
        return view('especialistas.index',compact('especialistas'));
    }
}
