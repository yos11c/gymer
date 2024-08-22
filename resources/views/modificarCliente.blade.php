@extends('templates/layout')

@section('main')








<section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
    <div class="container">

        <div class="hero-content">
            <div class="container">

                <div class="tab">

                    <p class="card-text">
                   <form class="col-sm-12" action="{{ route('actualizarCliente', $cliente->id) }}" method="POST">

                        <h3>Editar</h3>
                        @csrf
                        @method("PUT")

                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control readonly" required value="{{ $cliente->id }}" readonly>

                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required value="{{ $cliente->nombre }}">

                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control" required value="{{ $cliente->apellido }}">

                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required value="{{ $cliente->email }}">

                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" required value="{{ $cliente->telefono }}">

                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" required value="{{ $cliente->fecha_nacimiento }}">

                        <br>
                        <a href="productos" class="btn btn-primary">
                            <span class="bi bi-arrow-return-left">Volver</span>
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <span  class="bi bi-check">Subir</span>
                        </button>

                    </form>

                    </p>

                </div>
            </div>

        </div>


    </div></div></section>






@endsection
