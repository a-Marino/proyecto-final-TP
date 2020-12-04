@extends('layouts.app')
@section('content')

<h1>Mis Peliculas</h1>

@if (count($peliculas) > 0)
    @foreach ($peliculas as $pelicula)
        <a href="/peliculas/{{$pelicula->id}}" class="">{{$pelicula->titulo}</a>
    @endforeach
@else 
   <h3 class="session">No has agregado ninguna pelicula.</h3>
@endif

@endsection