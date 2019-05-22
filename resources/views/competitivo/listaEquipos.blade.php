@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark p-3">
			<h1 class="text-light text-center">Mis equipos</h1>
			<div class="container">
				<div class="row">
					<div class="col-12 gestion-opiniones-container">
						<table class="table table-striped table-bordered table-dark text-center">
							<tr class="text-center">
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Miembros</th>
								<th>Fecha de creación</th>
								<th>Acciones</th>
							</tr>
							@foreach ($equipos as $equipo)
							<tr>
								<td>{{ $equipo->nombre }}</td>
								<td>{{ $equipo->descripcion }}</td>
								<td>{{ $equipo->nombre }}</td>
								<td>{{ $equipo->created_at }}</td>
								<td class="text-center">
									<a href="{{ route('editarEquipo',[$equipo->nombre]) }}"><button class="btn btn-success m-1"><i class="fas fa-edit"></i></button></a>
									<a href="#"><button class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button></a>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection