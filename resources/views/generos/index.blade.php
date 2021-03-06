@extends('layouts.app')
@section('content')

<h1 class="font-weight-bold text-center mb-5 mt-4 amarillo">Generos:</h1>

@if (count($generos) > 0)
    @foreach ($generos as $genero)
        <a href="/generos/{{$genero->id}}"  class='text-light'><h3>{{$genero->nombre}}</h3></a>
    @endforeach
    {{ $generos->links() }}
@else 
   <h3 class="session">No hay ningun Genero en el sistema.</h3>
@endif

@endsection