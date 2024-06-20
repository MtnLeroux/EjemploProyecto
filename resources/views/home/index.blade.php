@extends('layouts.master')

@section('menu-principal')

<div class="container-fluid">
    <div class="row align-items-center" style="background: linear-gradient(to bottom left, #0033cc 0%, #0033cc 100%); height: 50px;">
      <div class="col text-center">
        <h1 style="color: white;">Clinica Valparaiso</h1>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title">Inventario</h5>
            <p class="card-text">Administra y consulta el inventario del centro de salud.</p>
            <a href="{{route('inventario.index')}}" class="btn btn-primary">Ir a Inventario</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title">Datos del Paciente</h5>
            <p class="card-text">Registra y consulta los datos de los pacientes.</p>
            <a href="{{route('pacientes.index')}}" class="btn btn-primary">Ir a Datos del Paciente</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card text-center h-100">
          <div class="card-body">
            <h5 class="card-title">Datos del Especialista</h5>
            <p class="card-text">Registra y consulta los datos de los especialistas.</p>
            <a href="{{route('especialistas.index')}}" class="btn btn-primary">Ir a Datos del Especialista</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection