@extends('admin.layout.main') 
@section('title', 'Nuevo director') 
@section('content')
@include('flash::message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Datos nuevo director</h6>
    </div>
    <div class="card-body">
    {!! Form::open(['route'=>'director.store', 'method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Director') !!}
            {!! Form::text('nombre', null, 
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