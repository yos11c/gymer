@extends('templates/layout')


@section('main')

<section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
    <div class="container">

        <div class="hero-content">

            <div class="container">
                <div class="tab">


                    <div>
                        <div class="col-sm-12">

                            @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $mensaje }}
                            </div>
                            @endif
                            <div class="col-sm-12">
                                @if($mensaje = \Illuminate\Support\Facades\Session::get('title'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $mensaje }}
                                </div>

                                @endif
                                <h3>Lista</h3>

                                <div class="left">
                                    <a href="add" class="btn btn-primary">
                                        <span>Agregar</span>
                                    </a>

                                </div>


                            </div>


                            <hr>



                            <p class="card-text">
                            <div class="table table-responsive">
                                <table id="table" class="table table-sm table-bordered ">
                                    <thead>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>



                                    </thead>


                                    <tbody>
                                    @foreach($items as $item)

                                    <tr>
                                        <td>{{$item->id }}</td>
                                        <td>{{$item->nombre }}</td>
                                        <td>{{$item->descripcion }}</td>


                                        <td>

                                            <div class="flex">
                                                <a href="{{route('edit',$item->id)}}" >
                                                    Editar
                                                </a>

                                                <form id="myForm" action="{{ route('remove', $item->id) }}" id="{{($item->id)}}">
                                                    <a id="{{($item->id)}}">
                                                        Eliminar
                                                    </a>
                                                </form>

                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        const form = document.getElementById("{{($item->id)}}").addEventListener("click", function(event) {
                                                            event.preventDefault();
                                                            Swal.fire({
                                                                title: "Estas seguro de eliminar?",
                                                                text: "No podras revertir esto!",
                                                                icon: "warning",
                                                                showCancelButton: true,
                                                                confirmButtonText: "Si, eliminalo!",
                                                                cancelButtonText: "No, cancelar!",
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {

                                                                    document.getElementById("myForm").submit();
                                                                }
                                                            });
                                                        });
                                                    });
                                                </script>

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>


                                    {{$items-> links()}}

                                </table>



                                <a href="/" class="btn btn-primary">
                                    <span class="bi bi-arrow-return-left">Volver</span>
                                </a>

                                <a  class="btn btn-primary" href="productos">
                                    <span class="bi bi-arrow-clockwise" >Refrescar</span>
                                </a>


                            </div>







                            @endsection

                            @section('footer')

                            @endsection



                        </div>


    </div>

            </section>
