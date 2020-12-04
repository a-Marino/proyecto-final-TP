@extends('layouts.app')
@section('content')

<h1>{{$pelicula->titulo}}</h1>
<h2>Año de estreno: {{$peliculas->anio}}</h2>

<a href="/peliculas/{{$pelicula->id}}/edit" class='btn btn-info btn-small'>Editar Pelicula</a>

{!! Form::open(['action' => 'App\Http\Controllers\PeliculasController@destroy', 'method' => 'DELETE']) !!}
    {{ Form::submit('Eliminar Pelicula', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}

@endsection