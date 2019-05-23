@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-4">Equipo {{ $equipo->nombre }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid img-user" src="../img/background.jpg">
					</div>
					<div class="col-md-7 offset-md-1">
						<h3 class="text-light text-center mb-5">Información</h3>
						<table class="table table-dark table-striped table-bordered text-center mt-3 tabla-perfil">
							<tr>
								<th>Nombre</th>
								<td>{{ $equipo->nombre }}</td>
							</tr>
							<tr>
								<th>Miembros</th>
								<td>{{ $equipo->miembros }}</td>
							</tr>
							<tr>
								<th>Creador</th>
								<td>{{ $equipo->usuario->usuario }}</td>
							</tr>
							<tr>
								<th>Juego</th>
								<td>{{ $equipo->juego->nombre }}</td>
							</tr>
						</table>
						<div>
							<h3 class="text-center text-light">Descripción</h3>
							<p class="text-light">{{ $equipo->descripcion }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection