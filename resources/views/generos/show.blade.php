@extends('layouts.app')
@section('content')

<h1>{{$genero->nombre}}</h1>
<h2>Peliculas:</h2>
@foreach ($genero->peliculas as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}"><h3>{{$pelicula->titulo}}</h3></a>
@endforeach


@endsection