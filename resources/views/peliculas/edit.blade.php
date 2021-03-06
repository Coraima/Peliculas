@extends('layouts.master')

@section('content')

   <div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
					Modificar Pelicula
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				{{-- TODO: Abrir el formulario e indicar el método POST --}}

					<form class="form" action="" method="POST" enctype= "multipart/form-data">
					{{method_field('PUT')}} 
					
					{{-- TODO: Protección contra CSRF --}}
						{{ csrf_field() }}
						
    				<div class="form-group">
    				<img  src="{{$peliculas->imagen}}" class="img-thumbnail" style="width:300px; height:350px;  margin-left: auto; margin-right: auto; display: block;" />
    				</div>
    				<div class="form-group">
    					<label for="title">Nombre</label>
    					<input type="text" name="nombre" id="nombre" class="form-control" 
    					value="{{$peliculas->nombre}}">
					</div>

					<div class="form-group">
    					<label for="title">Año</label>
    					<input type="number" name="año" id="año" class="form-control" value="{{$peliculas->año}}">
					</div>



			<div class="form-group">
						{{-- TODO: Completa el input para la imagen --}}

						<strong>Imagen</strong>
						<label for="file-upload" class="custom-file-upload">
    							<i class="fa fa-cloud-upload"></i> Subir archivo</label>
						<input id="file-upload" type="file" name="imagen"/>

					</div>

						<div class="form-group">
    					<label for="title">Genero</label>
    					<input type="text" name="genero" id="genero" class="form-control" value="{{$peliculas->genero}}">
					</div>


				    <div class="form-group">
						<label for="synopsis">Descripción</label>
    					<textarea name="descripcion" id="descripcion" class="form-control" rows="3" >{{$peliculas->descripcion}}</textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Modificar
						</button>
					</div>

				{{-- TODO: Cerrar formulario --}}
				</form>

			</div>
		</div>
	</div>
</div>

@stop