@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-3"><i class="fas fa-trophy"></i> {{ $torneo->nombre }}</h1>
			<h5 class="text-light text-center mt-3 mb-3">Torneo creado por: {{ $torneo->usuario->usuario }}</h5>
			<div class="img-torneo">
				<img src="../{{ $torneo->imagen }}" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h3 class="text-light text-center mt-3">Datos del torneo</h3>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<table class="table table-bordered table-dark text-center tabla-torneo mt-3 mb-3">
						  <tbody>
						    <tr>
						      <th>Nombre</th>
						      <td>{{ $torneo->nombre }}</td>
						    </tr>
						    <tr>
						      <th>Creador</th>
						      <td>{{ $torneo->usuario->nombre}}, alias {{ $torneo->usuario->usuario }}</td>
						    </tr>
						    <tr>
						      <th>Juego</th>
							  <td>{{ $torneo->juego->nombre }}</td>
						    </tr>
						    <tr>
						    	<th>Inscripción</th>
						    	@if($torneo->inscripcion_cerrada==0)
						    	<td>Abierta</td>
						    	@else
						    	<td>Cerrada</td>
						    	@endif
						    </tr>
						    <tr>
						    	<th>Estado</th>
						    	@if($torneo->finalizado==0)
						    	<td>En curso</td>
						    	@else
						    	<td>Finalizado</td>
						    	@endif
						    </tr>
						  </tbody>
						</table>
						<div class="text-light tabla-torneo">
							<p>{{ $torneo->texto }}</p>
						</div>
						<div class="text-light tabla-torneo">
							<h5>Participantes en el equipo: </h5>
							<ul class="list-unstyled text-center">
							@forelse ($participantes as $participacion)
								<li><a href="#">{{ $participacion->equipo->nombre }}</a></li>
							@empty
							<li>No hay equipos inscritos en el torneo.</li>
							@endforelse
							</ul>
						</div>
						@if($torneo->finalizado===0 && $torneo->inscripcion_cerrada===0)
						<div class="text-center mb-3">
							<form method="post" action="{{ route('agregarParticipante',[$torneo->id]) }}">
								@csrf
								<select name="id_equipo">
									@forelse ($equipos as $equipo)
									<option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
									@empty
									<p class="text-light">No hay equipos.</p>
									<small class="text-light">Nota: Para unirse a un torneo debe ser el creador del equipo.</small>
									@endforelse
								</select>
								<input type="submit" class="btn btn-primary ml-3" value="Inscribir">
							</form>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection