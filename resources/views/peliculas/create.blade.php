@extends('layouts.app')
@section('content')
<script src="{{ asset('js/select-actores.js') }}" type="text/javascript"></script>

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
        {!! Form::label('actor[]', 'Actores:', ['class' => 'text-white']) !!} <br>
        <select name="actor[]" id="actores" multiple='multiple'>
            @foreach($actores as $actor)
                <option value="{{$actor->id}}">{{$actor->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('portada', 'Portada:', ['class' => 'text-white'])}} <br>
        {{ Form::file('portada', ['class' => 'form_control text-white'])}}
    </div>
    <!-- Agregar Actores principales / Director y Genero -->
    {{ Form::submit('Agregar Pelicula', ['class' => 'btn btn-success mb-3'])}}
{!! Form::close() !!}
@endsection