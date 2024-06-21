<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema: Inicio de Sesion</title>
</head>

<body style="background: linear-gradient(to bottom, #ACF6F7 50%, #83D8DA 50%)">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <!-- <button class="btn btn-primary">Primary</button>
        <button class="btn btn-secondary">Secondary</button> -->
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 25rem;">
                    <!-- titulo y logo -->
                    <div class="col-lg-4 bg-primary d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="bg-white p-2 mb-3 rounded">
                            <img src="{{ asset('images/cruz.png') }}" style="width: 7rem;">
                        </div>
                        <h4 class="text-light">Sistema de Centro Médico</h4>
                        <h4 class="text-light">Proyecto Medicina Valparaiso</h4>
                    </div>
                    <!-- / FIN titulo y logo -->


                    <!-- Formulario -->
                    <div class="col-lg-8 bg-white">
                        <h4>Inicio de Sesión</h4>
                        <small>Proporcione sus credenciales para ingresar al Sistema</small>
                        <div class="card">
                            <div class="card-body">
                                <form method="GET" action="{{route('home.index')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-success">Iniciar Sesión</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--@if ($errors->any())
                        <div class="alert alert-warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif-->
                    </div>
                    <!-- / FIN Formulario -->
                </div>
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

</body>
</html>