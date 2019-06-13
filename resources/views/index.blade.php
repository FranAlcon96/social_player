@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 video-section" id="video-section">
			@if (session()->has('success'))
				<div class="alert alert-success" role="alert">{{ session('loginSuccess') }}</div>
			@endif
			<div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			    <source src="img/video.mp4" type="video/mp4">
			</video>
			<div class="container">
				<div class="contenido-info-section">
					<div class="row">
						<div class="col-md-12">
							@guest
								<h1 class="text-light text-center text-uppercase">Bienvenidos a social player</h1>
							@else
								<h1 class="text-light text-center text-uppercase">Le damos la bienvenida a social player {{ auth()->user()->usuario }}</h1>
							@endguest
							<h5 class="text-light text-center">Tu red social de videojuegos.</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 content-section bg-dark" id="content-section">
			<div class="container">
				<div class="col-12">
					<h2 class="text-light text-center mt-3">Explora nuestro contenido</h2>
					<div class="row">
						<div class="col-md-3 offset-md-1 cajita-info text-light text-center mt-4 mb-4">
							<h4>Únete a tu comunidad</h4>
							<img src="img/contenido-2.jpg">
							<p>Busca las comunidades de tus juegos favoritos y únete a ellas. Publica tu opinión sobre el juego y dile al mundo lo que piensas.
							</p>
						</div>
						<div class="col-md-4 cajita-info text-light text-center mt-4">
							<h4 >Conoce gente</h4>
							<img src="img/contenido-1.jpg">
							<p>En tu comunidad, ponte en contacto con otros/as jugadores/as y disfruta de tus juegos favoritos en la mejor compañía. Crea equipos con otros jugadores.</p>
						</div>
						<div class="col-md-3 cajita-info text-light text-center mt-4">
							<h4>Crea torneos o participa</h4>
							<img src="img/contenido-3.jpg">
							<p>En social player queremos realzar la faceta competitiva entre jugadores, para ello tenemos nuestro sistema de torneos.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12 info-section" id="info-section">
			<div class="container">
				<div class="contenido-info-section">
					<div class="row">
						<div class="col-12 mt-5">
							<h2 class="text-light text-center">El protagonista eres tú</h2>
							<p class="text-light text-center">Social player es una plataforma realizada por y para el disfrute de toda persona que ame el mundo de los videojuegos, y se encuentra totalmente abierta a sugerencias para poder mejorar cada día.</p>
							<div class="contenido-info-section-botones text-center">
								<button class="btn btn-outline-primary">Registrarse</button>
								<button class="btn btn-outline-success">Leer más</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$( document ).ready(function() {
	setTimeout(function() {
        $(".alert").fadeOut("slow");
      },1500);
});
</script>
@endsection