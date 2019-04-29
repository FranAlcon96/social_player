@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 bg-dark">
			<h3 class="text-light text-center mb-3 mt-3">Filtrar juegos</h3>
			<h6 class="text-light mb-3">Nombre:</h6>
			<input type="text" name="filtro-nombre" class="form-control">
			<h6 class="text-light mb-3 mt-3">Año de salida: </h6>
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
						<h1 class="text-light text-center m-3 mb-5">Lista de juegos</h1>
						@foreach($juegos as $i)
							<h2 class="text-light mb-3 mt-3"><i class="fas fa-gamepad"></i> {{ $i->nombre }}</h2>
							<span class="text-light mt-2 mb-3">Género: {{ $i->genero }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<span class="text-light mt-2 mb-3">Año: {{ $i->anio }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<a href="{{ route('juego', [$i->id]) }}">Ver ficha</a>
							<hr class="style-four">
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection