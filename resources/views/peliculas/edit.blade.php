@extends('layouts.app')
@section('content')

<h1 class="mt-4">Editar Pelicula</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PeliculasController@update', $pelicula->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('titulo', 'Titulo:') }}  
        {{ Form::text('titulo', $pelicula->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
    </div>
    <div class="form-group">
        {{ Form::label('anio', 'Año de estreno:') }}
        {{ Form::number('anio', $pelicula->anio, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('genero', 'Genero:') }} 
        {{ Form::select('genero', $generos, null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('director', 'Director:')}}
        {{ Form::select('director', $directores, null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('actores', "Actores:")}} <br>
        @foreach ($actores as $actor)
            {{ Form::label('actor', $actor->nombre)}} 
            {{ Form::checkbox('actor[]', $actor->id)}} <br>
        @endforeach
    </div>
{{ Form::submit('Editar Pelicula', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}

@endsection