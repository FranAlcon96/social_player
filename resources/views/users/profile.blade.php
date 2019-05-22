@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-4">Perfil de {{ $user->usuario }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid img-user" src="../img/background.jpg">
					</div>
					<div class="col-md-7 offset-md-1">
						<h3 class="text-light text-center">Información</h3>
						<table class="table table-dark table-striped table-bordered text-center mt-3 tabla-perfil">
							<tr>
								<th>Nombre</th>
								<td>{{ $user->nombre }}</td>
							</tr>
							<tr>
								<th>Apellidos</th>
								<td>{{ $user->apellidos }}</td>
							</tr>
							<tr>
								<th>Edad</th>
								<td>{{ $user->edad }}</td>
							</tr>
							<tr>
								<th>Email</th>
								<td>{{ $user->email }}</td>
							</tr>
							<tr>
								<th>Nickname</th>
								<td>{{ $user->usuario }}</td>
							</tr>
							<tr>
								<th>Juego favorito</th>
								<td>{{ $user->juego_favorito }}</td>
							</tr>
						</table>
						@if ($user->id == auth()->user()->id)
							<div class="float-right">
								<a href="{{ route('editUser',[$user->id]) }}"><i class="fas fa-user-cog"></i> Editar perfil</a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h3 class="text-light text-center mt-3 mb-3">Actividad en la red</h3>
			<div class=" col-md-6 offset-md-3 text-center text-light actividad-perfil mb-3">
				<span>Grupos fundados: </span><br>
				<span>Opiones aportadas a la comunidad: {{ $count_opiniones }}</span><br>
				<span>Torneos en los que participa o ha participado: {{ $count_opiniones }}</span><br>
				<span>Comentarios publicados: {{ $count_mensajes }}</span><br>
			</div>
		</div>
	</div>
</div>
@endsection