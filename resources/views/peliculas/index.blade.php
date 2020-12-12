@extends('layouts.app')
@section('content')

<h1 class="text-center font-weight-bold">Peliculas</h1>

@if (count($peliculas) > 0)
    @foreach ($peliculas as $pelicula)
        <a class='text-dark' href="/peliculas/{{$pelicula->id}}" class=""><h2>{{$pelicula->titulo}}</h2></a>
    @endforeach
@else 
   <h3 class="session">Ninguna pelicula ha sido agregada al sistema.</h3>
@endif

@endsection