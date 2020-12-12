@extends('layouts.app')
@section('content')

<h1>Actores</h1>

@if (count($actores) > 0)
    @foreach ($actores as $actor)
        <a href="/actores/{{$actor->id}}" class="">{{$actor->nombre}}</a><br>
    @endforeach
@else 
   <h3 class="session">No hay ningun actor en el sistema.</h3>
@endif

@endsection