@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<form class="col-12" method="POST" class="formulario-grupo" action="{{ route('updateOpinion',$opinion->id) }}">
					@csrf
					<h4 class="text-light mt-3">Editar opinión</h4>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="titulo" placeholder="Nombre" value="{{ $opinion->titulo }}">
					</div>
					{!! $errors->first('titulo','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group mt-3">
						<input class="form-control" type="number" max="10" min="0" name="puntuacion" placeholder="Puntuación" value="{{ $opinion->puntuacion }}">
					</div>
					{!! $errors->first('puntuacion','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group mt-3">
						<textarea name="texto" class="form-control" rows="5" placeholder="Escriba algo...">{{ $opinion->texto }}</textarea>
					</div>
					{!! $errors->first('texto','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<button type="submit" class="btn btn-primary enviar">Editar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection