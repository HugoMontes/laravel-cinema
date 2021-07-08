@extends('admin.layout.main')
@section('title', 'Administrar Usuarios') 
@section('content')
<div style="margin-bottom: 12px;">
    <a href="{{ route('user.create') }}" class="btn btn-primary"> Nuevo usuario</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
    </div>
    <div class="card-body">
    <table class="table"> 
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->type=='admin')
                    <span class="badge badge-primary">{{ $user->type }}</span> 
                @elseif($user->type =='member')
                    <span class="badge badge-secondary">{{ $user->type }}</span> 
                @endif
            </td>
            <td>
                <a href="{{ route('user.destroy', $user->id) }}"
                    onclick="eliminarRegistro(event, this.href)"
                    class="btn btn-danger btn-sm" title="Eliminar">
                    <span class="fas fa-trash"></span> 
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }} 
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