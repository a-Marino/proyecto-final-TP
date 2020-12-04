@extends('layouts.app')
@section('content')

<h1>Agregar una nueva Pelicula a su lista</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PeliculasController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('titulo', 'Titulo:') }}  
        {{ Form::text('titulo', '', ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
    </div>
    <div class="form-group">
        {{ Form::label('anio', 'Año de estreno:') }}
        {{ Form::number('anio', '', ['class' => 'form-control']) }}
    </div>
    <!-- Agregar Actores principales / Director y Genero -->
    {{ Form::submit('Agregar Pelicula', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}

@endsection