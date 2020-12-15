@extends('layouts.app')
@section('content')

<h1 class="font-weight-bold text-center mb-5 mt-4">Actores</h1>

@if (count($actores) > 0)
    @foreach ($actores as $actor)
        <a href="/actores/{{$actor->id}}" class='text-dark'><h3>{{$actor->nombre}}</h3></a>
    @endforeach
    {{ $actores->links() }}
@else 
   <h3 class="session">No hay ningun actor en el sistema.</h3>
@endif

@endsection