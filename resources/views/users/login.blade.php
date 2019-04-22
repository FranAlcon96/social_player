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
				<form class="col-12" method="POST" action="{{ route('registro') }}">
					@csrf
					<div class="form-inline">
						<input type="text" class="input-medio" id="input-nombre" name="nombre" placeholder="Nombre">
						<input type="text" class="input-medio" id="input-apellidos" name="apellidos" placeholder="Apellidos">
					</div>
					<div class="form-group">
						<input type="number" class="input-completo" id="input-edad" name="edad" placeholder="Edad">
					</div>
					<div class="form-group">
						<input type="text" class="input-completo" id="input-email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" class="input-completo" id="a" name="usuario" placeholder="Nombre de usuario">
					</div>
					<div class="form-inline">
						<input type="password" class="input-medio" id="b" name="password" placeholder="Contraseña">
						<input type="password" class="input-medio" id="input-password-confirm" name="password-confirm" placeholder="Confirme su contraseña">
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