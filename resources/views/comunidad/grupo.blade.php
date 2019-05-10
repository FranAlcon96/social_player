@extends('layouts.layout')
@section('contenido')
<div class="container-fluid grupo-container">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-3">{{ $grupo->nombre }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-5 mb-3 img-grupo">
						<img class="img-fluid" src="../../img/background.jpg">
					</div>
					<div class="col-md-7">
						<h4 class="text-light mt-3 mb-3">Grupo de {{ $grupo->titulo }}</h4>
						<p class="text-light texto-grupo">{{ $grupo->descripcion }}</p>
						<?php $date = Carbon\Carbon::parse($grupo->created_at);?>
						<h5 class="text-light text-center">Grupo creado por {{ $grupo->usuario }} <small>{{ $date->diffForHumans() }}</small></h5>
						<div class="text-center">
							@if($count==0)
							<a href="{{ route('membresia',[$grupo->id,auth()->user()->id]) }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Unirse</a>
							@else
							<a href="{{ route('membresia',[$grupo->id,auth()->user()->id]) }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Dejar de ser miembro</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h4 class="text-light text-center mt-3 mb-3">Miembros</h4>
						<div class="row">
							<div>
								<img src="../../img/background.jpg" class="img-miembro m-3">
								<p class="text-light text-center">nombre</p>
							</div>
							<div>
								<img src="../../img/background.jpg" class="img-miembro m-3">
								<p class="text-light text-center">nombre</p>
							</div>
							<div>
								<img src="../../img/background.jpg" class="img-miembro m-3">
								<p class="text-light text-center">nombre</p>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<h4 class="text-light text-center mt-3 mb-3">Comentarios</h4>
                            <div class="panel panel-default widget cajita-opinion">
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item mb-3">
                                            <div class="row">
                                                <div class="col-xs-10 col-md-11">
                                                    <div>
                                                        <h3>ejemplo</h3>
                                                        <div class="mic-info">
                                                            <h5>Publicado por buda</h5>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="texto-opinion">sfdgbddgdgdgdgdgdgdgd   egdgdgdgdg xdddddd d d d d d</p>
                                                        <span>Puntuación: tré</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
