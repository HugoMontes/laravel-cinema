@extends('admin.layout.main') 
@section('title', 'Administrar generos') 
@section('content')
@include('flash::message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nuevo genero</h6>
    </div>
    <div class="card-body">
    {!! Form::open(['route'=>'genero.store', 'method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('genero', 'Genero') !!}
            {!! Form::text('genero', null, 
                ['class'=>'form-control', 'placeholder'=>'Nombre del genero','required']) !!}
        </div>
        <div class="form-group">
            <a href="{{ route('genero.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
            {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!} 
        </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection