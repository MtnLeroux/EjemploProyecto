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
            <label for=""><h2>Agregar Nuevo Ítem</h2></label>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="item_nombre">Nombre del Ítem</label>
                  <input type="text" class="form-control" id="item_nombre">
                </div>
                <div class="mb-3">
                  <label for="categoria">Categoría</label>
                  <select id="categoria" class="form-select">
                    <option>Medicamentos</option>
                    <option>Equipos Médicos</option>
                    <option>Material de Oficina</option>
                    <option>Otros</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="cantidad">Cantidad</label>
                  <input type="number" class="form-control" id="cantidad">
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="proveedor" class="form-label">Proveedor</label>
                  <input type="text" class="form-control" id="proveedor">
                </div>
                <div class="mb-3">
                  <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                  <input type="date" class="form-control" id="fecha_ingreso">
                </div>
                <div class="mb-3">
                  <label for="ubicacion" class="form-label">Ubicación</label>
                  <input type="text" class="form-control" id="ubicacion">
                </div>
                <div class="mb-3">
                  <label for="obs" class="form-label">Observaciones</label>
                  <textarea class="form-control" id="obs" rows="4"></textarea>
                </div>
              </div>
            </div>
            <div class="text-end mb-3">
              <button type="reset" class="btn btn-warning">Cancelar</button>
              <button type="submit" class="btn btn-success">Agregar Ítem</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col">
        <h2>Lista de Inventario</h2>
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">Nombre del Ítem</th>
              <th scope="col">Categoría</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Proveedor</th>
              <th scope="col">Fecha de Ingreso</th>
              <th scope="col">Ubicación</th>
              <th scope="col">Observaciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Paracetamol</td>
              <td>Medicamentos</td>
              <td>100</td>
              <td>Farmacéuticos XYZ</td>
              <td>2024-01-01</td>
              <td>Almacén A</td>
              <td>Ninguna</td>
            </tr>
            <tr>
              <td>Estetoscopio</td>
              <td>Equipos Médicos</td>
              <td>10</td>
              <td>Equipos Médicos ABC</td>
              <td>2024-01-15</td>
              <td>Almacén B</td>
              <td>Ninguna</td>
            </tr>
            <!-- Más filas de ejemplo -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection