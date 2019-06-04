@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<form class="col-12" method="POST" class="formulario-grupo" action="">
					@csrf
					<h4 class="text-light mt-3">Editar equipo</h4>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $equipo->nombre }}">
					</div>
					<div class="form-group mt-3">
						<textarea name="descripcion" class="form-control" rows="5" placeholder="Escriba algo...">{{ $equipo->descripcion }}</textarea>
					</div>
					<button type="submit" class="btn btn-primary enviar">Editar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection