@extends('admin.layout.main')
@section('title', 'Lista de peliculas') 
@section('content')
@include('flash::message')
<div style="margin-bottom: 12px;">
    <a href="{{ route('pelicula.create') }}" class="btn btn-primary"> Nueva pelicula</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Peliculas registradas</h6>
    </div>
    <div class="card-body">

        <!-- Buscador -->
        <div style="margin-bottom: 12px;">
            {!! Form::open(['route'=>'pelicula.index','method'=>'GET', 'class'=>'navbar-form pull-right']) !!}   
            <div class="input-group col-sm-3">
                {!! Form::text('titulo',null,['class'=>'form-control', 'placeholder'=>'Buscar película']) !!}
                <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /Buscador -->

        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>GENERO</th>
                <th>USUARIO</th>
                <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($peliculas as $pelicula)
            <tr>
                <td>{{ $pelicula->id }}</td>
                <td>{{ $pelicula->titulo }}</td>
                <td>{{ $pelicula->genero->genero }}</td>
                <td>{{ $pelicula->user->name }}</td>
                <td>
                    <a href="{{ route('pelicula.destroy', $pelicula->id) }}"
                        onclick="eliminarRegistro(event, this.href)"
                        class="btn btn-danger btn-sm" title="Eliminar">
                        <span class="fas fa-trash"></span>
                    </a>
                    <a href="{{ route('pelicula.edit', $pelicula->id) }}"
                        class="btn btn-primary btn-sm" title="Editar">
                        <span class="fas fa-pencil-alt"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('javascript')
<script>
    function eliminarRegistro(event, url){
        event.preventDefault();
        if(confirm("Esta seguro de eliminar el registro?")){
            window.location.href = url;
        }
    }
</script>
@endsection