@extends('layouts.app')
@section('content')

<script defer src="{{ asset('js/home.js') }}" type="application/javascript"></script>
<div class="container">
    <h1 class="font-weight-bold text-center mb-5">Mis Peliculas</h1>
    <button class="btn btn-info float-right" id='btnAgregar'>Agregar Pelicula</button> 
    <div class="mt-1">
        @if (count($peliculas) > 0)
            @foreach ($peliculas as $pelicula)
                <a href="/peliculas/{{$pelicula->id}}" class='text-dark'><h3>{{$pelicula->titulo}}</h3></a>
            @endforeach
        @else 
            <h3 class="session">No has agregado ninguna pelicula.</h3>
        @endif
    </div>
</div>

@endsection
