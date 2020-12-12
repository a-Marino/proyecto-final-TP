@extends('layouts.app')
@section('content')

<h1>Generos:</h1>

@if (count($generos) > 0)
    @foreach ($generos as $genero)
        <a href="/generos/{{$genero->id}}" class="">{{$genero->nombre}}</a><br>
    @endforeach
@else 
   <h3 class="session">No hay ningun Genero en el sistema.</h3>
@endif

@endsection