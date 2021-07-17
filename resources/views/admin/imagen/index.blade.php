@extends('admin.layout.main')
@section('title', 'Galeria de Imagenes')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Galeria de imagenes</h6>
    </div>
    <div class="card-body">
        
        <div class="row">
        @foreach ($imagenes as $imagen)
        <div class="col-md-12 col-lg-6 col-xl-3" style="margin-bottom: 15px;">
            <div class="card" style="width: 18rem;">
                <img src="/imagenes/pelicula/{{ $imagen->nombre }}" class="img-responsive" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $imagen->pelicula->titulo }}</h5>
                </div>
            </div>
        </div>
        @endforeach
        </div>

        <div class="text-center">
            {{ $imagenes->links() }}
        </div> 
    </div>
</div>
@endsection