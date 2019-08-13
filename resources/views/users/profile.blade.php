@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-4">Perfil de {{ $user->usuario }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid img-user" src="../img/{{ $user->imagen }}">
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
@if (auth()->user()->id === $user->id)
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 bg-dark text-center">
			<h3 class="text-light mt-3 mb-3">Solicitudes pendientes</h3>
			@forelse ($solicitudes as $s)
			<div>
				<span class="text-light">Solicitud de unión al equipo ejemplo:</span>
				<a href="{{ route('aceptarSolicitud',[$s->id]) }}"><button class="btn btn-primary m-1"><i class="fas fa-check"></i></button></a>
				<a href="#"><button class="btn btn-danger m-1"><i class="fas fa-times"></i></button></a>
			</div>
			@empty
			<p class="text-light">No hay solicitudes pendientes</p>
			@endforelse
		</div>
	</div>
</div>
@endif
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark actividad-perfil text-center p-3">
			<h3 class="text-light mt-3 mb-3">Tu actividad</h3>
			<span class="text-light">Opiniones publicadas: {{ $count_opiniones }}</span><br>
			<span class="text-light">Comentarios publicados: {{ $count_mensajes }}</span><br>
		</div>
	</div>
</div>
@endsection