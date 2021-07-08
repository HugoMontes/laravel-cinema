@extends('admin.layout.main')
@section('title', 'Usuarios') 
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
    </div>
    <div class="card-body">
    <a href="{{ route('user.create') }}" class="btn btn-primary"> Nuevo usuario</a>
    <table class="table"> 
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
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
                    <span class="label label-danger">{{ $user->type }}</span> 
                @elseif($user->type =='member')
                    <span class="label label-warning">{{ $user->type }}</span> 
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }} 
    </div>
</div>
@endsection