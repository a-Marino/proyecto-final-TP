@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Mis Peliculas</h1>
    <div class="mt-1">
        @if (count($peliculas) > 0)
            @foreach ($peliculas as $pelicula)
                <a href="/peliculas/{{$pelicula->id}}" class="">{{$pelicula->titulo}}</a>
            @endforeach
        @else 
            <h3 class="session">No has agregado ninguna pelicula.</h3>
        @endif
    </div>
</div>
@endsection
