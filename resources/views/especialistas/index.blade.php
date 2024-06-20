@extends('layouts.master')

@section('menu-principal')

<div class="container-fluid">
    <div class="row align-items-center" style="background: linear-gradient(to bottom left, #0033cc 0%, #0033cc 100%); height: 50px;">
      <div class="col text-center">
        <h1 style="color: white;">Clinica Valparaiso</h1>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="col">
        <form action="">
          <div class="card p-3">
            <label for=""><h2>Datos del Especialista</h2></label>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="nombre1">Primer Nombre</label>
                  <input type="text" class="form-control" id="nombre1">
                </div>
                <div class="mb-3">
                  <label for="nombre2">Segundo Nombre</label>
                  <input type="text" class="form-control" id="nombre2">
                </div>
                <div class="mb-3">
                  <label for="apellido1">Primer Apellido</label>
                  <input type="text" class="form-control" id="apellido1">
                </div>
                <div class="mb-3">
                  <label for="apellido2">Segundo Apellido</label>
                  <input type="text" class="form-control" id="apellido2">
                </div>
                <div class="mb-3">
                  <label for="rut">Rut</label>
                  <input type="text" class="form-control" id="rut">
                </div>
                <div class="mb-3">
                  <label for="numero">Número Telefónico</label>
                  <input type="text" class="form-control" id="numero">
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="especialidad" class="form-label">Especialidad</label>
                  <select id="especialidad" class="form-select">
                    <option>Opción 1</option>
                    <option>Opción 2</option>
                    <option>Opción 3</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Correo Electrónico</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                  <label for="direccion" class="form-label">Dirección</label>
                  <input type="text" class="form-control" id="direccion">
                </div>
                <div class="mb-3">
                  <label for="obs" class="form-label">Observaciones</label>
                  <textarea class="form-control" id="obs" rows="6"></textarea>
                </div>
              </div>
            </div>
            <div class="text-end mb-3">
              <button type="reset" class="btn btn-warning">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar Datos</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
    