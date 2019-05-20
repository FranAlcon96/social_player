@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-3"><i class="fas fa-trophy"></i> {{ $torneo->nombre }}</h1>
			<h5 class="text-light text-center mt-3 mb-3">Torneo creado por: {{ $torneo->usuario->usuario }}</h5>
			<div class="img-torneo">
				<img src="../img/background.jpg" class="img-fluid">
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
						    	<th>Equipos</th>
						    	<td>{{ $torneo->equipos }}</td>
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
						<div class="text-center">
							<a href="#" class="btn btn-primary">Inscríbete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@if($torneo->usuario->id == Auth()->user()->id)
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h3 class="text-light text-center mt-3 mb-3">Gestionar el torneo</h3>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="text-light text-center">
							<span class="text-light text-center">Equipo 1 vs Equipo 2</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endsection