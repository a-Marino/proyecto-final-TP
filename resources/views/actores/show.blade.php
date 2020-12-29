@extends('layouts.app')
@section('content')

<h1 class="text-center font-weight-bold mt-4 amarillo">{{$actor->nombre}}</h1>
<h2 class="font-weight-bold text-white">Peliculas:</h2>
@foreach ($actor->peliculas as $pelicula)
    <a class='text-light' href="/peliculas/{{$pelicula->id}}"><h3>{{$pelicula->titulo}}</h3></a>
@endforeach


@endsection