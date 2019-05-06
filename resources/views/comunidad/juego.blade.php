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
					<div class="col-md-5 offset-md-1 mb-3">
						<img src="../img/{{ $juego->imagen }}" class="img-juego">
					</div>
					<div class="col-md-6">
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
				<h3 class="text-center text-light mt-5 mb-5">Torneos de {{ $juego->nombre }}</h3>
				<div class="row">
					<div class="col-12 mb-4">
                        <section id="team" class="opiniones pb-5">
                            <div class="container">
                                <div class="row">
                                    <!-- Team member -->
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                            <div class="mainflip">
                                                <div class="frontside">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                                            <h4 class="card-title">Sunlimetech</h4>
                                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="backside">
                                                    <div class="card">
                                                        <div class="card-body text-center mt-4">
                                                            <h4 class="card-title">Sunlimetech</h4>
                                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-skype"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./Team member -->
                                    <!-- Team member -->
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                            <div class="mainflip">
                                                <div class="frontside">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                                            <h4 class="card-title">Sunlimetech</h4>
                                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="backside">
                                                    <div class="card">
                                                        <div class="card-body text-center mt-4">
                                                            <h4 class="card-title">Sunlimetech</h4>
                                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-skype"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./Team member -->
                                    <!-- Team member -->
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                            <div class="mainflip">
                                                <div class="frontside">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                                            <h4 class="card-title">Sunlimetech</h4>
                                                            <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="backside">
                                                    <div class="card">
                                                        <div class="card-body text-center mt-4">
                                                            <h4 class="card-title">Sunlimetech</h4>
                                                            <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-skype"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./Team member -->
                                </div>
                            </div>
                        </section>
					</div>
				</div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-light text-center">Opiniones de los usuarios</h3>
                        <div class="container">
                            <div class="row">
                                <div class="panel panel-default widget">
                                    <div class="panel-body">
                                        <ul class="list-group">
                                            <li class="list-group-item mb-3">
                                                <div class="row">
                                                    <div class="col-xs-2 col-md-1">
                                                        <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                                    <div class="col-xs-10 col-md-11">
                                                        <div>
                                                            <a href="http://www.jquery2dotnet.com/2013/10/google-style-login-page-desing-usign.html">
                                                                Google Style Login Page Design Using Bootstrap</a>
                                                            <div class="mic-info">
                                                                By: <a href="#">Bhaumik Patel</a> on 2 Aug 2013
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            Awesome design
                                                        </div>
                                                        <div class="action">
                                                            <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                                                <span class="glyphicon glyphicon-pencil"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-success btn-xs" title="Approved">
                                                                <span class="glyphicon glyphicon-ok"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                                                <span class="glyphicon glyphicon-trash"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item mb-3">
                                                <div class="row">
                                                    <div class="col-xs-2 col-md-1">
                                                        <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                                    <div class="col-xs-10 col-md-11">
                                                        <div>
                                                            <a href="http://bootsnipp.com/BhaumikPatel/snippets/Obgj">Admin Panel Quick Shortcuts</a>
                                                            <div class="mic-info">
                                                                By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                        </div>
                                                        <div class="action">
                                                            <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                                                <span class="glyphicon glyphicon-pencil"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-success btn-xs" title="Approved">
                                                                <span class="glyphicon glyphicon-ok"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                                                <span class="glyphicon glyphicon-trash"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item mb-3">
                                                <div class="row">
                                                    <div class="col-xs-2 col-md-1">
                                                        <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                                    <div class="col-xs-10 col-md-11">
                                                        <div>
                                                            <a href="http://bootsnipp.com/BhaumikPatel/snippets/4ldn">Cool Sign Up</a>
                                                            <div class="mic-info">
                                                                By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                                        </div>
                                                        <div class="action">
                                                            <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                                                <span class="glyphicon glyphicon-pencil"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-success btn-xs" title="Approved">
                                                                <span class="glyphicon glyphicon-ok"></span>
                                                            </button>
                                                            <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                                                <span class="glyphicon glyphicon-trash"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-light text-center mb-3 mt-3">Publica tu opinión</h3>
                                    <form method="post">
                                        @csrf
                                        <input type="number" name="puntuacion" max="10" min="0" class="form-control mb-3" placeholder="Puntuación">
                                        <textarea name="texto" class="form-control mb-3" rows="10" placeholder="Escribe tu opinión ..."></textarea>
                                        <input type="submit" name="enviar" value="Publicar" class="btn btn-primary col-12 mb-4">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection