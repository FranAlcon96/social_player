@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark contenedor-grupos">
			<h1 class="text-light text-center mt-3 mb-3">Lista de grupos</h1>
			<div class="container">
				<div class="row">
				@foreach ($grupos as $grupo)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <img class="img-fluid" src="img/game_default.jpg" alt="card image">
                                            <h4 class="card-title">{{ $grupo->nombre }}</h4>
                                            <h6 class="card-text">Un grupo de {{ $grupo->titulo }}</h6>
                                            <?php $date = Carbon\Carbon::parse($grupo->created_at);?>
											<small>Creado {{ $date->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h5 class="card-title">Creado por {{ $grupo->usuario }}</h5>
                                            @if (strlen($grupo->descripcion)>200)
                                            <p class="card-text">{{ substr($grupo->descripcion, 0,200) }} ... </p>
                                            @else
                                            <p class="card-text">{{ $grupo->descripcion }}</p>
                                            @endif
                                            <a href="#">Ir a la página del grupo.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				  @endforeach
				</div>
			</div>
			<div class="text-center mb-3">
				<span class="text-light">¿ No encuentra ningún grupo ? Puedes crear el tuyo propio <a href="{{ route('crearGrupo') }}">aquí</a></span>
			</div>
		</div>
	</div>
	<div class="row">

	</div>
</div>
@endsection