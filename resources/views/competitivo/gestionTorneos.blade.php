@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark p-3">
			<h1 class="text-light text-center">Mis torneos</h1>
			<div class="container">
				<div class="row">
					<div class="col-12 gestion-opiniones-container">
						<table class="table table-striped table-bordered table-dark text-center">
							<tr class="text-center">
								<th>Nombre</th>
								<th>Juego</th>
								<th>Inscripción</th>
								<th>Estado</th>
								<th>Acciones</th>
							</tr>
							@foreach ($torneos as $torneo)
							<tr>
								<td>{{ $torneo->nombre }}</td>
								<td>{{ $torneo->juego->nombre }}</td>
								@if($torneo->inscripcion_cerrada === 0)
								<td>Abierta</td>
								@else
								<td>Cerrada</td>
								@endif
								@if($torneo->finalizado === 0)
								<td>En curso</td>
								@else
								<td>Finalizado</td>
								@endif
								<td class="text-center">
									<a href="{{ route('torneo',[$torneo->id]) }}"><button class="btn btn-warning m-1"><i class="fas fa-gamepad"></i></button></a>
									<a href="{{ route('torneo',[$torneo->id]) }}"><button class="btn btn-primary m-1"><i class="fas fa-eye"></i></button></a>
									<a href="{{ route('editarTorneo',[$torneo->id]) }}"><button class="btn btn-success m-1"><i class="fas fa-edit"></i></button></a>
									<a href="{{ route('eliminarTorneo',[$torneo->id]) }}"><button class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button></a>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection