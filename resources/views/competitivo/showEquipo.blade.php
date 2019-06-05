@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-4">Equipo {{ $equipo->nombre }}</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid img-user" src="../{{ $equipo->logo }}">
					</div>
					<div class="col-md-7 offset-md-1">
						<h3 class="text-light text-center mb-5">Información</h3>
						<table class="table table-dark table-striped table-bordered text-center mt-3 tabla-perfil">
							<tr>
								<th>Nombre</th>
								<td>{{ $equipo->nombre }}</td>
							</tr>
							<tr>
								<th>Miembros</th>
								<td>{{ $equipo->miembros }}</td>
							</tr>
							<tr>
								<th>Creador</th>
								<td>{{ $equipo->usuario->usuario }}</td>
							</tr>
							<tr>
								<th>Juego</th>
								<td>{{ $equipo->juego->nombre }}</td>
							</tr>
						</table>
						<div>
							<h3 class="text-center text-light">Descripción</h3>
							<p class="text-light">{{ $equipo->descripcion }}</p>
							<!-- Button trigger modal -->
							@if ($equipo->id_usuario == Auth()->user()->id)
							<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Buscar Miembros</button>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-light" id="exampleModalLabel">Añadir miembros a {{ $equipo->nombre }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="text" name="busqueda" id="busqueda" class="form-control mb-3" placeholder="Buscar usuario">
		<ul class="lista-usuarios-membresia text-center" id="usuarios">
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

   $("#busqueda").keyup(function(){
   		filtrado($("#busqueda").val());
	});

   function filtrado(filtro){
	var url = `/social_player/public/filtroUsuarios/${filtro}`;
	if ($("#busqueda").val().length>8) {
	    $.ajax({
	        url: url,
	        type: 'get',
	        dataType: 'json',
	        success: function (response) {
	        	$('#usuarios').empty();
	        	for (var i = 0; i < response.length; i++) {
	        		$("<li><a href='/social_player/public/enviarSolicitud/{{ $equipo->id }}/"+response[i].id+"'>"+response[i].usuario+"</a></li>").appendTo($('#usuarios'));
	        		}
	        	}
	    	});
		}
	}
});
</script>
@endsection