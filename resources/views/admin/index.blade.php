@extends('admin.layout.main') 
@section('title', 'Escritorio') 
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <p>Bienvenido {{ Auth::user()->name }}</p>

        {{-- logout --}}
        <form id="logout-form" action="{{ route('logout') }}"
        method="POST" style="display: none;">
        @csrf
        </form>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        {{-- / logout --}}

    </div>
</div>
@endsection