@extends('layouts.master')

@section('content')
<link href="{{url('/assets/bootstrap/css/style.css')}}" rel="stylesheet">
    <div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen de la peliculas --}}

        <img src="{{$peliculas->imagen}}" style="height: 350px; width: 300px;" class="img-rounded">

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos de la peliculas --}}

        <h2>{{$peliculas->nombre}}</h2>
        	<p><strong>Sinopsis:</strong>{{$peliculas->descripcion}}</p>
            <p><strong>Año:</strong>{{$peliculas->año}}</p>
            <p><strong>Género:</strong>{{$peliculas->genero}}</p>
        
        <a class="btn btn-success" href="{{ url('/peliculas/' .$peliculas->id. '/edit/') }}" type="button"> Editar</a>

        <form action="{{action('PeliculasController@destroy', $peliculas->id)}}" method="POST" style="display:inline">
             {{ method_field('PUT') }}
                 {!! csrf_field() !!}
                <button type="submit" class="btn btn-danger" style="display:inline">
                     Borrar
             </button>
        </form>
 
        <a class="btn btn-default" href="{{ url('/peliculas')}}" type="button"> volver</a>

    </div>
</div>
@stop