@extends('layouts.app')
@section('content')

<h1 class="font-weight-bold text-center">Generos:</h1>

@if (count($generos) > 0)
    @foreach ($generos as $genero)
        <a href="/generos/{{$genero->id}}"  class='text-dark'><h3>{{$genero->nombre}}</h3></a>
    @endforeach
@else 
   <h3 class="session">No hay ningun Genero en el sistema.</h3>
@endif

@endsection