@extends('admin.layout.main')
@section('title', 'Administrar directores') 
@section('content')
@include('flash::message')
<div style="margin-bottom: 12px;">
    <a href="{{ route('director.create') }}" class="btn btn-primary"> Nuevo director</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Directores</h6>
    </div>
    <div class="card-body">
    <table class="table"> 
        <thead>
        <tr>
            <th>ID</th>
            <th>Director</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($directores as $director)
        <tr>
            <td>{{ $director->id }}</td>
            <td>{{ $director->nombre }}</td>
            <td>
                <a href="{{ route('director.destroy', $director->id) }}"
                    onclick="eliminarRegistro(event, this.href)"
                    class="btn btn-danger btn-sm" title="Eliminar">
                    <span class="fas fa-trash"></span> 
                </a>

                <a href="{{ route('director.edit', $director->id) }}"
                    class="btn btn-success btn-sm" title="Editar">
                    <span class="fas fa-pencil-alt"></span>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $directores->links() }} 
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