@extends('templates/layout')

@section('main')

<section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
    <div class="container">
        <div class="hero-content">
            <div class="container">
                <div class="add">
                    <h3>Agregar un Cliente</h3>
                    <div class="form">
                        <form action="storeC" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" name="apellido" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="genero">Género</label>
                                <select name="genero" class="form-control" required>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="membresia_id">ID de Membresía</label>
                                <input type="text" name="membresia_id" class="form-control" required>
                            </div>
                            <br>
                            <a href="clientes" class="btn btn-primary">
                                <span class="bi bi-arrow-return-left">Volver</span>
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <span class="bi bi-check">Agregar</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
