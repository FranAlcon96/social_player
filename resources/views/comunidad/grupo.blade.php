@extends('layouts.layout')
@section('contenido')
<div class="container-fluid grupo-container">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-3">{{ $grupo->nombre }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-5 mb-3 img-grupo">
						<img class="img-fluid" src="../../../img/background.jpg">
					</div>
					<div class="col-md-7">
						<h4 class="text-light mt-3 mb-3">Grupo de {{ $grupo->titulo }}</h4>
						<p class="text-light texto-grupo">{{ $grupo->descripcion }}</p>
						<?php $date = Carbon\Carbon::parse($grupo->created_at);?>
						<h5 class="text-light text-center">Grupo creado por {{ $grupo->usuario }} <small>{{ $date->diffForHumans() }}</small></h5>
						<div class="text-center">
							@if($count==0)
							<a href="{{ route('membresia',[$grupo->id,auth()->user()->id]) }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Unirse al grupo</a>
							@else
							<a href="{{ route('membresiaAbandonar',[$grupo->id,auth()->user()->id]) }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Abanadonar grupo</a>
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
							@foreach($miembros as $miembro)
							<div>
								<img src="../../../img/background.jpg" class="img-miembro m-3">
								<p class="text-light text-center">{{ $miembro->usuario }}</p>
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-md-7">
						<h4 class="text-light text-center mt-3 mb-3">Comentarios</h4>
                            <div class="panel panel-default widget cajita-opinion">
                                <div class="panel-body">
                                    <ul class="list-group">
                                    	@foreach($comentarios as $comentario)
                                        <li class="list-group-item mb-3">
                                            <div class="row">
                                                <div class="col-xs-10 col-md-11">
                                                    <div>
                                                        <div class="mic-info">
                                                            <h5>Publicado por {{ $comentario->usuario }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="texto-opinion">{{ $comentario->texto }}</p>
														<?php $date = Carbon\Carbon::parse($comentario->created_at);?>
                                                        <span>Publicado {{ $date->diffForHumans() }}</span>
                                                        <a href="#" class="m-3"><i class="far fa-thumbs-up"></i></a>
                                                        <a href="#"><i class="far fa-thumbs-down"></i></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
								</div>
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
			<h3 class="text-light text-center mt-3 mb-3">Haz un comentario</h3>
			<form method="post" action="{{ route('crearMensaje',[$grupo->id,auth()->user()->id]) }}">
				@csrf
				<textarea rows="5" placeholder="Escriba un comentario..." class="form-control col-md-6 offset-md-3 mb-4" name="texto"></textarea>
				<div class="text-center">
					<button type="submit" class="btn btn-primary mb-3">Enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
