@extends('admin.layout.main')
@section('title', 'Lista de generos') 
@section('content')
@include('flash::message')
<div style="margin-bottom: 12px;">
    <a href="{{ route('genero.create') }}" class="btn btn-primary"> Nuevo genero</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Generos registrados</h6>
    </div>
    <div class="card-body">
    <table class="table"> 
        <thead>
        <tr>
            <th>ID</th>
            <th>Genero</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($generos as $genero)
        <tr>
            <td>{{ $genero->id }}</td>
            <td>{{ $genero->genero }}</td>
            <td>
                <a href="{{ route('genero.destroy', $genero->id) }}"
                    onclick="eliminarRegistro(event, this.href)"
                    class="btn btn-danger btn-sm" title="Eliminar">
                    <span class="fas fa-trash"></span> 
                </a>

                <a href="{{ route('genero.edit', $genero->id) }}"
                    class="btn btn-success btn-sm" title="Editar">
                    <span class="fas fa-pencil-alt"></span>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $generos->links() }} 
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