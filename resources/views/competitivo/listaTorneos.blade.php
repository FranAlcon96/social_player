@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 bg-dark">
			<h3 class="text-light text-center mb-3 mt-3">Buscar torneo</h3>
				<form method="get" action="{{ route('listarTorneos') }}">
				<select class="form-control" name="id_juego">
					@foreach ($juegos as $juego)
						<option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
					@endforeach
				</select>
				<div class="text-center">
					<input type="submit" name="enviar" class="mt-3 btn btn-primary" value="Filtrar">
				</div>
				</form>
		</div>
		<div class="col-md-10 list-juegos-section bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 offset-sm-1 text-center mb-4">
						<h1 class="text-light text-center m-3 mb-5">Lista de torneos</h1>
						<div class="links-navigate float-right">
						</div>
						@foreach($torneos as $i)
							<h2 class="text-light mb-3 mt-3"><i class="fas fa-trophy"></i>  {{ $i->nombre }}</h2>
							<span class="text-light mt-2 mb-3">Juego: {{ $i->juego->nombre }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<span class="text-light mt-2 mb-3">Torneo creado por: {{ $i->usuario->usuario }}</span>
							<span class="text-light mt-2 mb-3"> | </span>
							<a href="{{ route('torneo',[$i->id]) }}">Ver página<a/>
							<hr class="style-four">
						@endforeach
						{{ $torneos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection