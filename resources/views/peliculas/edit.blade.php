@extends('layouts.app')
@section('content')

<h1 class="mt-4 amarillo">Editar Pelicula</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PeliculasController@update', $pelicula->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('titulo', 'Titulo:', ['class' => 'text-white']) }}  
        {{ Form::text('titulo', $pelicula->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
    </div>
    <div class="form-group">
        {{ Form::label('anio', 'Año de estreno:', ['class' => 'text-white']) }}
        {{ Form::number('anio', $pelicula->anio, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('genero', 'Genero:', ['class' => 'text-white']) }} 
        {{ Form::select('genero', $generos, null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('director', 'Director:', ['class' => 'text-white'])}}
        {{ Form::select('director', $directores, null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('actores', "Actores:", ['class' => 'text-white'])}} <br>
        @foreach ($actores as $actor)
            {{ Form::label('actor', $actor->nombre, ['class' => 'text-white'])}} 
            {{ Form::checkbox('actor[]', $actor->id)}} <br>
        @endforeach
    </div>
    <div class="form-group">
        {{ Form::label('portada', 'Portada:', ['class' => 'text-white'])}} <br>
        {{ Form::file('portada', ['class' => 'form_control text-white'])}}
    </div>
{{ Form::submit('Editar Pelicula', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}

@endsection