@extends('layouts.app')
@section('content')

<h1>{{$director->nombre}}</h1>
<h2>Peliculas:</h2>
@foreach ($director->peliculas as $pelicula)
    <a href="/peliculas/{{$pelicula->id}}"><h3>{{$pelicula->titulo}}</h3></a>
@endforeach


@endsection