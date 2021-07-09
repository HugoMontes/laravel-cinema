@extends('admin.layout.main') 
@section('title', 'Registrar usuario') 
@section('content')
@include('flash::message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Datos nuevo usuario</h6>
    </div>
    <div class="card-body">
    {!! Form::open(['route'=>'user.store', 'method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, 
                ['class'=>'form-control', 'placeholder'=>'Nombre completo','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo electronico') !!}
            {!! Form::text('email', null, 
                ['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', 
                ['class'=>'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['member'=>'Miembro', 'admin'=>'Administrador'], null, 
                ['class'=>'form-control', 'placeholder'=>'Seleccione una opcion','required']) !!}
        </div>
        <div class="form-group">
            <a href="{{ route('user.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
            {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!} 
        </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection