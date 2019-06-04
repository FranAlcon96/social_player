@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-3"><i class="fas fa-trophy"></i> Administrar {{ $torneo->nombre }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 offset-sm-3">
						<h3 class="text-light text-center m-3">Organizar rondas: </h3>
						<form method="post" action="{{ route('hacerRonda',[$torneo->id]) }}">
							@csrf
							<div class="form-group">
								<label class="text-light mb-3">Elija equipo local</label>
								<select name="id_equipo_local" class="form-control mt-2 mb-2">
									@forelse ($participantes as $locales)
										<option value="{{ $locales->id_equipo }}">{{ $locales->equipo->nombre }}</option>
									@empty
									<small>No hay equipos participando en el torneo</small>
									@endforelse
								</select>
							</div>
							<div class="form-group">
								<label class="text-light mb-3">Elija equipo visitante</label>
								<select name="id_equipo_visitante" class="form-control mt-2 mb-2">
									@forelse ($participantes as $locales)
										<option value="{{ $locales->id_equipo }}">{{ $locales->equipo->nombre }}</option>
									@empty
									<small>No hay equipos participando en el torneo</small>
									@endforelse
								</select>
							</div>
							<div class="text-center">
								<input type="submit" name="enviar" value="Crear ronda" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 mt-5">
						<h3 class="text-light text-center">Rondas pendientes: </h3>
						<ul class="list-unstyled text-light text-center">
							@forelse ($rondas_pendientes as $p)
								<li class="mt-3">{{ $p->equipo_local->nombre }} vs. {{ $p->equipo_visitante->nombre }}</li>
								<a href="#" class="btn btn-primary m-2" title="Gana {{ $p->equipo_local->nombre }}"><i class="fas fa-trophy"></i></a>
								-
								<a href="#" class="btn btn-primary m-2" title="Gana {{ $p->equipo_visitante->nombre }}"><i class="fas fa-trophy"></i></a>
							@empty
								<li class="mt-3">No hay rondas pendientes.</li>
							@endforelse
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 mt-5 mb-3">
						<h3 class="text-light text-center">Rondas terminadas: </h3>
						<ul class="list-unstyled text-light text-center">
							@forelse ($rondas as $r)
								@if ($r->ganador === 1 && $r->perdedor === 0 && $r->empate === 0)
								<li class="mt-3">Ganador: {{ $r->equipo_local->nombre }} | Perdedor: {{ $r->equipo_visitante->nombre }}</li>
								@elseif ($r->ganador === 0 && $r->perdedor === 1 && $r->empate === 0)
								<li class="mt-3">Ganador: {{ $r->equipo_visitante->nombre }} | Perdedor: {{ $r->equipo_local->nombre }}</li>
								@elseif ($r->ganador === 0 && $r->perdedor === 0 && $r->empate === 1)
								<li class="mt-3">Empate: {{ $r->equipo_visitante->nombre }} | {{ $r->equipo_local->nombre }}</li>
								@endif
							@empty
								<li class="mt-3">No hay rondas pendientes.</li>
							@endforelse
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection