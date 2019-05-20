@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<form class="col-12" method="POST" class="formulario-grupo" action="{{ route('storeTorneo') }}">
					@csrf
					<h4 class="text-light mt-3">Crea tu torneo</h4>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre">
					</div>
					<div class="form-group mt-3">
						<textarea name="texto" class="form-control" rows="5" placeholder="Descripción del torneo"></textarea>
					</div>
					<div class="form-group">
						<select class="form-control" name="id_juego">
							@foreach ($juegos as $juego)
								<option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<input type="file" class="form-control" name="imagen" placeholder="Sube una imagen">
					</div>
					<button type="submit" class="btn btn-primary enviar">Crear grupo</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection