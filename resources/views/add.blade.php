@extends('templates/layout')



@section('main')




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
</section>

@endsection
