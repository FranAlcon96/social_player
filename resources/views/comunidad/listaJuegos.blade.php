@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row bg-dark">
		<div class="col-12">
			<h1 class="text-light text-center m-3">Lista de juegos</h1>
		</div>
	</div>
	<div class="row bg-dark">
		<div class="col-12">
			<form method="post">
			<div class="row">
				<div class="col-11 bg-dark">
					<input type="text" class="form-control m-3" id="buscarJuego" placeholder="Buscar Juego">
				</div>
				<div class="col-1">
					<button type="submit" class="btn btn-primary mt-3"><i class="fas fa-search"></i></button>
				</div>
			</div>
			<form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 bg-dark">
			<h3 class="text-light text-center mb-3 mt-3">Filtrar juegos</h3>
			<h6 class="text-light mb-3">Año de salida: </h6>
            <input class="form-control" id="number" name="rangoAnio" min="1980" max="2019"/>
			<h6 class="text-light mb-3 mt-3">Género: </h6>
			<select class="form-control">
				<option value="accion">Acción</option>
				<option value="aventura">Aventura</option>
				<option value="rol">Rol</option>
				<option value="moba">MOBA</option>
			</select>
		</div>
		<div class="col-md-10 list-juegos-section bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 offset-sm-1 text-center mb-4">
						@foreach($juegos as $i)
							<h2 class="text-light mb-3 mt-3"><i class="fas fa-gamepad"></i> {{ $i->nombre }}</h2>
							<span class="text-light mt-2 mb-3">Género: {{ $i->genero }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<span class="text-light mt-2 mb-3">Año: {{ $i->anio }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<a href="#">Ver ficha</a>
							<hr class="style-four">
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection