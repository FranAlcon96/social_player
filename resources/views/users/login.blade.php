@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<div class="col-12">
					<img class="form-icon" src="{{asset('img/formulario-login-icon.png')}}">
				</div>
				<form class="col-12" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control" id="input-usuario" name="usuario" placeholder="Nombre de usuario">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="input-password" name="password" placeholder="Contraseña">
					</div>
					<button type="submit" class="btn btn-primary enviar"><i class="fas fa-sign-in-alt"></i> Login</button>
					<div class="col-12 registrar-link toggle">
						<a href="#">Regístrate aquí</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<div class="col-12">
					<img class="form-icon" src="{{asset('img/formulario-login-icon.png')}}">
				</div>
				<form class="col-12" method="POST" action="{{ route('registro') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-inline">
						<input type="text" class="input-medio" id="input-nombre" name="nombre" placeholder="Nombre">
						<input type="text" class="input-medio" id="input-apellidos" name="apellidos" placeholder="Apellidos">
					</div>
					{!! $errors->first('nombre','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					{!! $errors->first('apellidos','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<input type="number" class="input-completo" id="input-edad" name="edad" placeholder="Edad">
					</div>
					{!! $errors->first('edad','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<input type="text" class="input-completo" id="input-email" name="email" placeholder="Email">
					</div>
					{!! $errors->first('email','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<input type="text" class="input-completo" id="a" name="usuario" placeholder="Nombre de usuario">
					</div>
					{!! $errors->first('usuario','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<select class="form-control input-completo" name="juego_favorito">
							@foreach ($juegos as $juego)
								<option value="{{ $juego->nombre }}">{{ $juego->nombre }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-inline">
						<input type="password" class="input-medio" id="b" name="password" placeholder="Contraseña">
						<input type="password" class="input-medio" id="input-password-confirm" name="password-confirm" placeholder="Confirme su contraseña">
					</div>
					{!! $errors->first('password','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					{!! $errors->first('password-confirm','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group">
						<input type="file" name="imagen" class="form-control input-completo">
					</div>
					<button type="submit" class="btn btn-primary enviar"><i class="fas fa-archive"></i> Registro</button>
					<div class="col-12 registrar-link toggle">
						<a href="#">Iniciar sesión</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection