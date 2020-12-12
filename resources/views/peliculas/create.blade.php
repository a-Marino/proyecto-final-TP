@extends('layouts.app')
@section('content')

<h1>Agregar una nueva Pelicula a su lista</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PeliculasController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('titulo', 'Titulo:') }}  
        {{ Form::text('titulo', '', ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
    </div>
    <div class="form-group">
        {{ Form::label('anio', 'Año de estreno:') }}
        {{ Form::number('anio', '', ['class' => 'form-control']) }}
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
    <div class="form-group">
        {{ Form::label('portada', 'Portada:')}} <br>
        {{ Form::file('portada', ['class' => 'form_control'])}}
    </div>
    <!-- Agregar Actores principales / Director y Genero -->
    {{ Form::submit('Agregar Pelicula', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}

@endsection