@extends('templates/layout')

@section('main')


<section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
    <div class="container">

        <div class="hero-content">
            <div class="container">

                <div class="tab">

                    <p class="card-text">
                    <form class="col-sm-12" action="{{route('update', $item->id)}}" method="POST">
                        <h3>Editar</h3>
                        @csrf
                        @method("PUT")
                        <label for="">ID</label>
                        <input type="text" name="id" class="form-control readonly" required value="{{$item->id}}" readonly>
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required value="{{$item->nombre}}">
                        <label for="">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" required value="{{$item->descripcion}}">

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
