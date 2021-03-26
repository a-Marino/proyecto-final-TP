@extends('layouts.app')
@section('content')

<script defer src="{{ asset('js/home.js') }}" type="application/javascript"></script>
<div class="container d-flex flex-column">
    <h1 class="font-weight-bold text-center mb-4 mt-4 amarillo">Mis Peliculas</h1>
    <button class="btn btn-info mb-4" id='btnAgregar'>Agregar Pelicula</button> 
    <div class="mt-1">
        @if (count($peliculas) > 0)
            @foreach ($peliculas as $pelicula)
                <a href="/peliculas/{{$pelicula->id}}" class='text-light'><h3>{{$pelicula->titulo}}</h3></a>
            @endforeach
        @else 
            <h4 class="text-info text-center mb-5">Bienvenido a PelisToWatch, toca el boton de agregar pelicula o en el menu desplegable para añadir una pelicula a tu lista</h4>
            <h3 class="session">No has agregado ninguna pelicula.</h3>
        @endif
    </div>
</div>

@endsection
