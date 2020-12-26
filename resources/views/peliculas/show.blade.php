@extends('layouts.app')
@section('content')

<h1 class="text-center font-weight-bold mt-4">{{$pelicula->titulo}}</h1>
<div class="container mx-auto px-4 pt-2 d-flex flex-wrap">
    <div>
        <img src="/storage/portadas/{{$pelicula->path_imagen}}" class="img-fluid" style="height: 500px">
    </div>
    <div class="mt-4" style="margin-left: 100px">
        <h3 class="font-weight-bold">Año de estreno:</h3>
        <h4>{{$pelicula->anio}}</h4>
        <h3 class="font-weight-bold">Genero:</h3>
        <a href="/generos/{{$pelicula->genero->id}}" class="text-dark"><h4>{{$pelicula->genero->nombre}}</h4></a>
        <h3 class="font-weight-bold">Director:</h3>
        <a class='text-dark' href="/directores/{{$pelicula->director->id}}"><h4>{{$pelicula->director->nombre}}</h4></a>
        <h3 class="font-weight-bold">Actores:</h3>
        @foreach ($pelicula->actores as $actor)
            <a class='text-dark' href="/actores/{{$actor->id}}"><h4>{{$actor->nombre}}</h4></a>
        @endforeach
        <h6 class="font-weight-bold mb-3">Pelicula agregada por: {{$pelicula->user->name}}</h6>
        <div class="d-flex flex-row">
            @if (!Auth::guest())
                @if (Auth::user()->id == $pelicula->user_id)
                    <div class="mr-5">
                        <a href="/peliculas/{{$pelicula->id}}/edit" class='btn btn-info btn-small'>Editar Pelicula</a>
                    </div>
                    {!! Form::open(['action' => ['App\Http\Controllers\PeliculasController@destroy', $pelicula->id], 'method' => 'DELETE']) !!}
                        {{ Form::submit('Eliminar Pelicula', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
    </div>
</div>



@endsection