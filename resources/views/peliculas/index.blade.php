@extends('layouts.app')
@section('content')

<h1>Peliculas:</h1>

@if (count($peliculas) > 0)
    @foreach ($peliculas as $pelicula)
        <a href="/peliculas/{{$pelicula->id}}" class="">{{$pelicula->titulo}}</a><br>
    @endforeach
@else 
   <h3 class="session">Ninguna pelicula ha sido agregada al sistema.</h3>
@endif

@endsection