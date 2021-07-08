@extends('admin.layout.main') 
@section('title', 'Administrar usuarios') 
@section('content')
@include('flash::message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar usuario</h6>
    </div>
    <div class="card-body">
    {!! Form::open(['route'=>['user.update', $user], 'method'=>'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name,
                ['class'=>'form-control', 'placeholder'=>'Nombre completo','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo electronico') !!}
            {!! Form::text('email', $user->email,
                ['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('type', ['member'=>'Miembro', 'admin'=>'Administrador'], 
                $user->type, 
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