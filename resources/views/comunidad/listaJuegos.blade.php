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
			<h3 class="text-light text-center m-3">Filtrar juegos</h3>
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
					<div class="col-sm-10 offset-sm-1">
						@foreach($juegos as $i)
						<div class="card cajita-juego m-4">
						  <div class="card-header cajita-juego-header text-light"><h3>{{ $i->nombre }}</h3></div>
						  <div class="card-body cajita-juego-body">
						  	<div class="row">
						  		<div class="col-md-6">
						  			<img class="img-fluid img-juego-item m-auto" src="img/{{ $i->imagen }}">
						  		</div>
						  		<div class="col-md-6">
						  			<div class="m-3 text-light cajita-juego-texto">
							  			<span>Género: {{ $i->genero }}</span><br>
							  			<span>Plataformas: {{ $i->plataformas }}</span><br>
							  			<span>Año: {{ $i->anio }}</span><br>
							  			<span>Opiniones: {{ $i->opiniones }}</span><br>
							  			<a href="#" class="btn btn-primary mt-3">Ver más</a>
						  			</div>
						  		</div>
						  	</div>
						  </div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection