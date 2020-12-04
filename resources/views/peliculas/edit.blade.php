@extends('layouts.app')
@section('content')

<h1>Agregar una nueva Pelicula a su lista</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PeliculasController@update', $pelicula->id], 'method' => 'PUT']) !!}
<div class="form-group">
    {{ Form::label('titulo', 'Titulo:') }}  
    {{ Form::text('titulo', '$pelicula->titulo', ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
</div>
<div class="form-group">
    {{ Form::label('anio', 'Año de estreno:') }}
    {{ Form::number('anio', '$pelicula->anio', ['class' => 'form-control']) }}
</div>
<!-- Agregar Actores principales / Director y Genero -->
{{ Form::submit('Agregar Pelicula', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}

@endsection