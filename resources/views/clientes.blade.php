@extends('templates/layout')

@section('main')

<section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section="" style="background-image: url('./assets/images/hero-bg.png')">
    <div class="container">
        <div class="hero-content">
            <div class="container">
                <div class="tab">
                    <div class="col-sm-12">

                        @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                        @endif

                        <h3>Lista de Clientes</h3>

                        <div class="left">
                            <a href="addC" class="btn btn-primary">
                                <span>Agregar Cliente</span>
                            </a>
                        </div>

                        <hr>

                        <div class="table table-responsive">
                            <table id="table" class="table table-sm table-bordered ">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Género</th>
                                    <th>ID de Membresía</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->apellido }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->telefono }}</td>
                                    <td>{{ $item->fecha_nacimiento }}</td>
                                    <td>{{ $item->genero }}</td>
                                    <td>{{ $item->membresia_id }}</td>
                                    <td>
                                        <div class="flex">
                                            <a href="{{route('modificarCliente',$item->id)}}" >
                                                Editar
                                            </a>


                                            <form id="myForm" action="{{ route('destroy', $item->id) }}" id="{{($item->id)}}">
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
                            </table>

                            <a href="/" class="btn btn-primary">
                                <span class="bi bi-arrow-return-left">Volver</span>
                            </a>

                            <a class="btn btn-primary" href="clientes">
                                <span class="bi bi-arrow-clockwise">Refrescar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
