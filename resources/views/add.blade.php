@extends('templates/layout')

@section('main')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> <!-- Agrega el CSS de Toastr -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> <!-- Agrega el script de Toastr -->
    @vite(['resources/js/app.js'])
</head>

<section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
    <div class="container">
        <div class="hero-content">
            <div class="container">
                <div class="add">
                    <h3>Agregar un producto</h3>
                    <div class="form">
                        <p class="card-text">
                        <form action="store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="">Codigo</label>
                            <input type="text" name="id"  class="form-control" required>
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                            <label for="">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" required>
                            <label for="">Imagen </label>
                            <input type="file" name="img" class="form-control">
                            <br>
                            <a href="productos" class="btn btn-primary">
                                <span class="bi bi-arrow-return-left">Volver</span>
                            </a>
                            <br>
                            <button class="btn btn-primary">
                                <span class="bi bi-check">Agregar</span>
                            </button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <!-- Aquí llamas al componente  -->
        <ProductForm></ProductForm>
    </div>

    <script>
        // Configuración de Toastr
        toastr.options = {
            "positionClass": "toast-center-center",
            "timeOut": "0",
            "extendedTimeOut": "2",
            "closeButton": true,
            "progressBar": true
        };

        // Mostrar mensaje de sesión si existe
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @elseif(session('error'))
        toastr.error("{{ session('error') }}");
        @endif
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "positionClass": "toast-center-center", // Para que se vea centrado
            "timeOut": "5000" // Duración visible
        };

        @if(session('message'))
        toastr.success("{{ session('message') }}");
        @endif
    </script>

</section>
@endsection
