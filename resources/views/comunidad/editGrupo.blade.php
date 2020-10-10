@extends('layouts.layout')
@section('contenido')
<div class="contenedor-formulario">
	<div class="modal-dialog text-center formulario">
		<div class="col-sm-8 contenedor-form-login">
			<div class="modal-content">
				<form class="col-12" method="POST" class="formulario-grupo" action="{{ route('updateGrupo', $grupo->id) }}"
					enctype="multipart/form-data">
					@csrf
					<h4 class="text-light mt-3">Edita tu grupo</h4>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $grupo->nombre }}">
					</div>
					{!! $errors->first('nombre','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<div class="form-group mt-3">
						<textarea name="descripcion" class="form-control" rows="5" placeholder="Escriba algo..." >{{ $grupo->descripcion }}</textarea>
					</div>
					{!! $errors->first('descripcion','<div class="text-center"><small class="text-danger text-center">:message</small></div>') !!}
					<!--<div class="form-group">
						<input type="file" class="form-control .inputfile" name="imagen">
					</div>-->
					<div class="custom-file">
					  <input type="file" class="custom-file-input" id="customFileLang" name="imagen">
					  <label class="custom-file-label" for="customFileLang">Imagen</label>
					</div>
					<button type="submit" class="btn btn-primary enviar">Editar grupo</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection