@extends('layouts.app')
@section('content')

<h1 class="text-center font-weight-bold mb-5 mt-4">Peliculas</h1>

@if (count($peliculas) > 0)
    @foreach ($peliculas as $pelicula)
        <a class='text-dark' href="/peliculas/{{$pelicula->id}}"><h2>{{$pelicula->titulo}}</h2></a>
    @endforeach
    {{ $peliculas->links() }}
@else 
   <h3 class="session">Ninguna pelicula ha sido agregada al sistema.</h3>
@endif

@endsection