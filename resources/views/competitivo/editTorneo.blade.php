@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<form class="col-12" method="POST" class="formulario-grupo" action="{{ route('updateTorneo',[$torneo->id]) }}">
					@csrf
					<h4 class="text-light mt-3">Editar torneo</h4>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $torneo->nombre }}">
					</div>
					<div class="form-group mt-3">
						<textarea name="texto" class="form-control" rows="5" placeholder="Escriba algo...">{{ $torneo->texto }}</textarea>
					</div>
					<div class="form-group mt-3">
						<select name="inscripcion_cerrada" class="form-control">
							<option value="0">Inscripción Abierta</option>
							<option value="1">Inscripción Cerrada</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary enviar">Editar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection