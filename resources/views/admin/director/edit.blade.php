@extends('admin.layout.main') 
@section('title', 'Administrar directores') 
@section('content')
@include('flash::message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar director</h6>
    </div>
    <div class="card-body">
    {!! Form::open(['route'=>['director.update', $director], 'method'=>'PUT']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', $director->nombre,
                ['class'=>'form-control', 'placeholder'=>'Nombre del director','required']) !!}
        </div>
        <div class="form-group">
            <a href="{{ route('director.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
            {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!} 
        </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection