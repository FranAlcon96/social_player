@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<form class="col-12" method="POST" class="formulario-grupo" action="{{ route('storeEquipo') }}" enctype="multipart/form-data">
					@csrf
					<h4 class="text-light mt-3">Crea tu equipo</h4>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre">
					</div>
					{!! $errors->first('nombre','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group mt-3">
						<textarea name="descripcion" class="form-control" rows="5" placeholder="Escriba algo..."></textarea>
					</div>
					{!! $errors->first('descripcion','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<select class="form-control" name="id_juego">
							@foreach ($juegos as $juego)
								<option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
							@endforeach
						</select>
					</div>
					{!! $errors->first('id_juego','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<input type="file" class="form-control" name="logo" placeholder="Sube una imagen">
					</div>
					{!! $errors->first('imagen','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<button type="submit" class="btn btn-primary enviar">Crear</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection