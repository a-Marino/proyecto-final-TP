@extends('layouts.app')
@section('content')

<h1 class="font-weight-bold text-center mb-5 mt-4 amarillo">Sobre nosotros</h1>
<p class="lead text-white">Mi nombre es Andres Marino, tengo 20 años. Vivo en Coronel Suarez, Argentina.</p>
<p class="lead text-white">Estoy cursando la Tecnicatura en Desarrollo de Aplicaciones Web, este es mi 2do año.</p>
<p class="lead text-white">
    Esta pagina, es para el trabajo final de la materia Taller de Programacion, 
    la idea era realizar una plataforma para mantener una lista de peliculas 'para ver' por parte de los usuarios.
    La plataforma debe permitir a un usuario crearse una cuenta personal, dentro de la
    cuenta el usuario podrá cargar las películas de las cuales quiere tener registro para ver en otro
    momento. De cada película deberá mantenerse, al menos, el titulo, año, director, género, la
    imagen de portada y un conjunto de actores principales (1 o más). El sistema debe soportar la
    edición y eliminación de las películas cargadas. Los actores y el director serán elegidos de una
    base de datos única de artistas provistas por el sistema, así como también los géneros.
</p>
<p class="float-left text-white">Si desea leer la consigna completa, precione el siguiente boton:</p>
<a href="/storage/consigna/consigna.pdf" class="btn btn-outline-info ml-3 btn-sm" target="_blank">
    <i class="fas fa-download">Abrir consigna</i>
</a>

@endsection