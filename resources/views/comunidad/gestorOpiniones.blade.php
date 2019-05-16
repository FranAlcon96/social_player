@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark p-3">
			<h1 class="text-light text-center">Gestoniar opiniones</h1>
			<div class="container">
				<div class="row">
					<div class="col-12 gestion-opiniones-container">
						<table class="table table-striped table-bordered table-dark">
							<tr class="text-center">
								<th>Titulo</th>
								<th>Texto</th>
								<th>Puntuación</th>
								<th>Acciones</th>
							</tr>
							@foreach ($opiniones as $opinion)
							<tr>
								<td>{{ $opinion->titulo }}</td>
								@if(strlen($opinion->texto) > 75)
								<td>{{ substr($opinion->texto,0,75)}} ...</td>
								@else
								<td>{{ $opinion->texto }}</td>
								@endif
								<td>{{ $opinion->puntuacion }}</td>
								<td class="text-center">
									<a href="{{ route('editarOpinion',$opinion->id) }}"><button class="btn btn-success m-1"><i class="fas fa-edit"></i></button></a>
									<a href="{{ route('eliminarOpinion',$opinion->id) }}"><button class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button></a>
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