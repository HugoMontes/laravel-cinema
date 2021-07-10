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
        
    </div>
</div>
@endsection
