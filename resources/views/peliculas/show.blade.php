@extends('layouts.app')
@section('content')

<h1>{{$pelicula->titulo}}</h1>
<h2>Año de estreno: {{$pelicula->anio}}</h2>
<h3>Director: {{$pelicula->director->nombre}}</h3>
<h3>Actores:</h3>
@foreach ($pelicula->actores as $actor)
    <h3>{{$actor->nombre}}</h3>
@endforeach


@if (!Auth::guest())
    @if (Auth::user()->id == $pelicula->user_id)
        <a href="/peliculas/{{$pelicula->id}}/edit" class='btn btn-info btn-small'>Editar Pelicula</a>

        {!! Form::open(['action' => ['App\Http\Controllers\PeliculasController@destroy', $pelicula->id], 'method' => 'DELETE']) !!}
            {{ Form::submit('Eliminar Pelicula', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endif

@endsection