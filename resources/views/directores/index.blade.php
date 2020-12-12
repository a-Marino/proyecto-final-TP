@extends('layouts.app')
@section('content')

<h1>Directores</h1>

@if (count($directores) > 0)
    @foreach ($directores as $director)
        <a href="/directores/{{$director->id}}" class="">{{$director->nombre}}</a><br>
    @endforeach
@else 
   <h3 class="session">No hay ningun Director en el sistema.</h3>
@endif

@endsection