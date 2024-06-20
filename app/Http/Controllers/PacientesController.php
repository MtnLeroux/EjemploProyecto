<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('pacientes.index',compact('pacientes'));
    }
}
