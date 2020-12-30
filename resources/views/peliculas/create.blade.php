@extends('layouts.app')
@section('content')

<h1 class="mt-4 amarillo">Agregar una nueva Pelicula a su lista</h1>

{!! Form::open(['action' => 'App\Http\Controllers\PeliculasController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('titulo', 'Titulo:', ['class' => 'text-white']) }}  
        {{ Form::text('titulo', '', ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
    </div>
    <div class="form-group">
        {{ Form::label('anio', 'Año de estreno:', ['class' => 'text-white']) }}
        {{ Form::number('anio', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('genero', 'Genero:', ['class' => 'text-white']) }} 
        {{ Form::select('genero', $generos, null,['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('director', 'Director:', ['class' => 'text-white'])}}
        {{ Form::select('director', $directores, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {!! Form::label('actor[]', 'Actores:', ['class' => 'text-white']) !!}
        {!! Form::select('actor[]', $actores, null, ['class' => 'form-control', 'id' => 'actores', 'multiple' => 'multiple']) !!}
    </div>
    <div class="form-group">
        {{ Form::label('portada', 'Portada:', ['class' => 'text-white'])}} <br>
        {{ Form::file('portada', ['class' => 'form_control text-white'])}}
    </div>
    <!-- Agregar Actores principales / Director y Genero -->
    {{ Form::submit('Agregar Pelicula', ['class' => 'btn btn-success'])}}
{!! Form::close() !!}

<script type="text/javascript">
    tail.select('#actores', {
        search: 'true',
    });
</script>
@endsection