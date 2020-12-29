@extends('layouts.app')
@section('content')

<h1 class="font-weight-bold text-center mb-5 mt-4 amarillo">Directores</h1>

@if (count($directores) > 0)
    @foreach ($directores as $director)
        <a href="/directores/{{$director->id}}" class='text-light'><h3>{{$director->nombre}}</h3></a>
    @endforeach
    {{ $directores->links() }}
@else 
   <h3 class="session">No hay ningun Director en el sistema.</h3>
@endif

@endsection