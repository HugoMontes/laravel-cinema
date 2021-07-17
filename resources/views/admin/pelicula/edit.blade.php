@extends('admin.layout.main') 
@section('title', 'Editar Peliculas')

@section('styles')
    {!! Html::style('plugins/chosen/chosen.min.css') !!}
    {!! Html::style('plugins/trumbowyg/ui/trumbowyg.min.css') !!} 
@endsection

@section('content')
@include('flash::message')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar pelicula</h6>
    </div>
    <div class="card-body">
    {!! Form::open(['route'=>['pelicula.update', $pelicula], 'method'=>'PUT']) !!}
        <div class="form-group">
            {!! Form::label('titulo', 'Titulo') !!}
            {!! Form::text('titulo', $pelicula->titulo, 
                ['class'=>'form-control', 'placeholder'=>'Titulo de la pelicula','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('genero_id', 'Genero') !!}
            {!! Form::select('genero_id', $generos, $pelicula->genero->id, 
                ['class'=>'form-control', 'placeholder'=>'Seleccione un genero','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('costo', 'Costo') !!}
            {!! Form::number('costo', $pelicula->costo, 
                ['class'=>'form-control', 'placeholder'=>'Costo de la pelicula','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('estreno', 'Estreno') !!}
            {!! Form::date('estreno', date($pelicula->estreno), 
                ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('resumen', 'Resumen') !!}
            {!! Form::textarea('resumen', $pelicula->resumen, 
                ['class'=>'form-control textarea-resumen']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('directores', 'Directores') !!} 
            {!! Form::select('directores[]', $directores, $directoresList,
                ['class'=>'form-control select-director', 'multiple','required']) !!}
        </div>

        <div class="form-group">
            <a href="{{ route('pelicula.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
            {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!} 
        </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection

@section('javascript')
{!! Html::script('plugins/chosen/chosen.jquery.min.js') !!} 
{!! Html::script('plugins/trumbowyg/trumbowyg.min.js') !!}
{!! Html::script('plugins/trumbowyg/langs/es.min.js') !!}

<script type="text/javascript">

    // chosen
    $(".select-director").chosen({
        placeholder_text_multiple: 'Seleccione un maximo de 3 directores',
        max_selected_options: 3,
        no_results_text: 'No se encontraron directores', 
    });

    // trumbowyg
    $(".textarea-resumen").trumbowyg({
        lang: 'es'
    });
</script>
@endsection