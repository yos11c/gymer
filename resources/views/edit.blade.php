@extends('templates/layout')

@section('main')

    <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">
            <div class="hero-content">
                <div class="container">
                    <div class="tab">
                        <p class="card-text">
                        <form class="col-sm-12" action="{{ route('update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            <h3>Editar Producto</h3>
                            @csrf
                            @method("PUT")

                            <!-- ID -->
                            <label for="id">ID</label>
                            <input type="text" name="id" class="form-control readonly" required value="{{ $item->id }}" readonly>

                            <!-- Nombre -->
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required value="{{ $item->nombre }}">

                            <!-- Descripción -->
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" class="form-control" required value="{{ $item->descripcion }}">

                            <!-- Imagen (opcional) -->
                            <label for="img">Imagen (opcional)</label>
                            <input type="file" name="img" class="form-control">

                            <br>
                            <!-- Botón de volver -->
                            <a href="{{ route('productos') }}" class="btn btn-primary">
                                <span class="bi bi-arrow-return-left">Volver</span>
                            </a>

                            <!-- Botón de enviar -->
                            <button type="submit" class="btn btn-primary">
                                <span class="bi bi-check">Actualizar</span>
                            </button>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
