@extends('layouts.app')
@section('content')

<h1 class="font-weight-bold text-center mt-4 amarillo">{{$genero->nombre}}</h1>
<h2 class="font-weight-bold text-white">Peliculas:</h2>
@foreach ($genero->peliculas as $pelicula)
    <a class='text-light' href="/peliculas/{{$pelicula->id}}"><h3>{{$pelicula->titulo}}</h3></a>
@endforeach


@endsection