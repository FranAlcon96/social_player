@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark contenedor-grupos">
			<h1 class="text-light text-center mt-3 mb-3">Lista de grupos</h1>
			<div class="container">
				<div class="row">
				@forelse ($grupos as $grupo)
				  <div class="col-sm-4 mb-4 contenedor-cajita">
				    <div class="card cajita-grupo">
				    <img class="card-img-top zoom" src="img/game_default.jpg">
				      <div class="card-body text-center bg-secondary">
				        <a href="#" class="enlaces_sin_estilo"><h5 class="card-title text-dark">{{ $grupo->nombre }}</h5></a>
						<p class="text-left">{{ $grupo->titulo }}</p>
						<p class="text-left">Miembros: 0</p>
						<p class="text-left">Creador: {{ $grupo->usuario }}</p>
				      </div>
				    </div>
				  </div>
				  @empty
				  @endforelse
				</div>
			</div>
			<div class="text-center mb-3">
				<span class="text-light">¿ No encuentra ningún grupo ? Puedes crear el tuyo propio <a href="{{ route('crearGrupo') }}">aquí</a></span>
			</div>
		</div>
	</div>
	<div class="row">

	</div>
</div>
@endsection