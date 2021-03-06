@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 bg-dark">
			<h3 class="text-light text-center mb-3 mt-3">Buscar juegos</h3>
			<form method="get" action="{{ route('juegos') }}" class="form">
				<input type="text" name="nombre" class="form-control" placeholder="Título">
				<center><button type="submit" class="btn btn-primary mt-3"><i class="fas fa-search"></i> Buscar</button></center>
			</form>
		</div>
		<div class="col-md-10 list-juegos-section bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 offset-sm-1 text-center mb-4">
						<h1 class="text-light text-center m-3 mb-5">Lista de juegos</h1>
						<div class="links-navigate float-right">
						</div>
						@foreach($juegos as $i)
							<h2 class="text-light mb-3 mt-3"><i class="fas fa-gamepad"></i> {{ $i->nombre }}</h2>
							<span class="text-light mt-2 mb-3">Género: {{ $i->genero }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<span class="text-light mt-2 mb-3">Año: {{ $i->anio }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<a href="{{ route('juego', [$i->id]) }}">Ver ficha</a>
							<hr class="style-four">
						@endforeach
						<div class="float-right">{{ $juegos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection