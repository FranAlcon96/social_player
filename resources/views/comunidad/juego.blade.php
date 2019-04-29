@extends('layouts.layout')
@section('contenido')
<div class="container-fluid bg-dark">
	<div class="row">
		<div class="col-12 bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="text-light text-center mt-3 mb-4 titulo-juego">{{ $juego->nombre }}</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 offset-md-1 mb-3">
						<img src="../img/{{ $juego->imagen }}" class="img-juego">
					</div>
					<div class="col-md-6">
						<table class="table table-striped table-dark ficha-tecnica">
						  <tbody>
						    <tr>
						      <td>Desarrollador</td>
						      <td>{{ $juego->desarrollador }}</td>
						    </tr>
						    <tr>
						      <td>Año de salida</td>
						      <td>{{ $juego->anio }}</td>
						    </tr>
						    <tr>
						      <td>Género</td>
						      <td>{{ $juego->genero }}</td>
						    </tr>
						    <tr>
						      <td>Plataformas</td>
						      <td>{{ $juego->plataformas }}</td>
						    </tr>
						    <tr>
						      <td>Opiniones</td>
						      <td>{{ $juego->opiniones }}</td>
						    </tr>
						    <tr>
						      <td>Puntuación media</td>
						      <td>{{ $juego->puntuacion_media }}</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
				<h3 class="text-center text-light mt-5 mb-3">Torneos de {{ $juego->nombre }}</h3>
				<div class="row">
					<div class="col-12 mb-4">
			            <ul class="list-unstyled text-center lista-torneos">
			              <li>
			                <a href="#!">Torneo 1</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 2</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 3</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 4</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 5</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 6</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 7</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 8</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 9</a>
			              </li>
			              <li>
			                <a href="#!">Torneo 10</a>
			              </li>
			            </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection