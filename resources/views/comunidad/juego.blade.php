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
					<div class="col-md-10 offset-md-1 mb-3">
						<img src="../img/{{ $juego->imagen }}" class="img-juego">
					</div>
				</div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 mb-3">
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
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-light text-center mb-3">Opiniones de los usuarios</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="panel panel-default widget cajita-opinion">
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                @forelse ($opiniones as $opinion)
                                                <li class="list-group-item mb-3 {{ $opinion->puntuacion >= 5 ? 'positiva' : 'negativa' }}">
                                                    <div class="row">
                                                        <div class="col-xs-10 col-md-11">
                                                            <div>
                                                                <h3>@if ($opinion->puntuacion>=5)
                                                                        <i class="fas fa-thumbs-up"></i>
                                                                    @else
                                                                        <i class="fas fa-thumbs-down"></i>
                                                                    @endif
                                                                    {{ $opinion->titulo }}</h3>
                                                                <div class="mic-info">
                                                                    <h5>Publicado por <a href="{{ route('perfil',[$opinion->id_usuario]) }}">{{ $opinion->usuario }}</a>
                                                                    <?php $date = Carbon\Carbon::parse($opinion->created_at);?>
                                                                     <small>{{  $date->diffForHumans()}}</small></h5>
                                                                </div>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p class="texto-opinion">{{ $opinion->texto }}</p>
                                                                <span>Puntuación: {{ $opinion->puntuacion }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            @empty
                                            <div class="text-center">
                                                <span class="text-light text-center">No hay opiniones registradas de este juego, ¡ Sé el primero !</span>
                                            </div>
                                            @endforelse
                                            {{ $opiniones->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @guest
                        <div class="text-center mb-3 mt-3">
                            <span class="text-light"><a href="#">Inicia sesión</a> para publicar tu opinión</span>
                        </div>
                        @else
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-light text-center mb-3 mt-5">Publica tu opinión</h3>
                                    <form method="post" action="{{ route('crearOpinion',[$juego->id,auth()->user()->id]) }}" class="form-opinion">
                                        @csrf
                                        <input type="text" name="titulo" class="form-control mb-3 col-md-6" placeholder="Título">
                                        {!! $errors->first('titulo','<div class="text-center"><small class="text-danger text-center">:message</small></div><br>') !!}
                                        <input type="number" name="puntuacion" max="10" min="0" class="form-control mb-3 col-md-6" placeholder="Puntuación">
                                        {!! $errors->first('puntuacion','<div class="text-center"><small class="text-danger text-center">:message</small></div><br>') !!}
                                        <textarea name="texto" class="form-control mb-3 col-md-6" rows="5" placeholder="Escribe tu opinión ..."></textarea>
                                        {!! $errors->first('texto','<div class="text-center"><small class="text-danger text-center">:message</small></div><br>') !!}
                                        <center><button type="submit" name="enviar" class="btn btn-primary enviar mb-3" id="botonEnviarOpinion">Publicar</button></center>
                                    </form>
                                </div>
                            </div>
                        @endguest
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection