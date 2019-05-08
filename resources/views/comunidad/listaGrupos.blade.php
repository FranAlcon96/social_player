@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-light text-center mt-3 mb-3">Lista de grupos</h1>
			<div class="container">
				<div class="row">
				  <div class="col-sm-4 mb-4">
				    <div class="card cajita-grupo">
				    <img class="card-img-top" src="img/game_default.jpg">
				      <div class="card-body text-center bg-secondary">
				        <h5 class="card-title">Título del grupo</h5>
						<p class="text-left">Un grupo de ...</p>
						<p class="text-left">Miembros: 0</p>
						<p class="text-left">Creador: FranAlcon96</p>
				        <a href="#" class="btn btn-primary">Ver grupo</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection