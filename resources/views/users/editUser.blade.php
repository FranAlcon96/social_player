@extends('layouts.layout')
@section('contenido')
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<div class="col-12">
					<img class="form-icon" src="{{asset('img/formulario-login-icon.png')}}">
				</div>
				<form class="col-12" method="POST" action="{{ route('updateUser',[$user->id]) }}" enctype="multipart/form-data">
					@csrf
					<div class="form-inline">
						<input type="text" class="input-medio" id="input-nombre" name="nombre" placeholder="Nombre" value="{{ $user->nombre }}">
						<input type="text" class="input-medio" id="input-apellidos" name="apellidos" placeholder="Apellidos" value="{{ $user->apellidos }}">
					</div>
					<div class="form-group">
						<input type="number" class="input-completo" id="input-edad" name="edad" placeholder="Edad" value="{{ $user->edad }}">
					</div>
					<div class="form-group">
						<input type="text" class="input-completo" id="input-email" name="email" placeholder="Email" value="{{ $user->email }}">
					</div>
					<div class="form-group">
						<input type="text" class="input-completo" id="input-usuario" name="usuario" placeholder="Nombre de usuario" value="{{ $user->usuario }}">
					</div>
					<div class="form-group">
						<select class="form-control input-completo" name="juego_favorito" value="{{ $user->juego_favorito }}">
							@foreach ($juegos as $juego)
								<option value="{{ $juego->nombre }}">{{ $juego->nombre }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="imagen" class="form-control input-completo">
					</div>
					<button type="submit" class="btn btn-primary enviar"><i class="fas fa-archive"></i> Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection