@extends('layouts.layout')
@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-12 bg-dark">
			<h1 class="text-center text-light mt-3 mb-3">acerca de social player</h1>
			<div class="row">
				<div class="col-md-3">
					<img class="img-fluid img-user" src="img/fran.jpg">
				</div>
				<div class="col-md-8">
					<p class="text-light mt-3">Muy buenas a todos, soy Francisco José Alcón Piñero, creador y desarrollador de la plataforma social player, un espacio pensado por y para jugadores. Este proyecto surgió de la necesidad de una plataforma que permita unir a usuarios tanto para conocer gente nueva como para la faceta competitiva. </p>
					<p class="text-light mt-1">Por lo que he aprovechado y he usado esta web como proyecto de fin de curso ya que es algo que siempre he querido hacer. La tecnología empleada para realizar el proyecto ha sido Laravel, un framework de php muy sencillo de usar pero muy potente para el desarrollo de aplicaciones web de gran embergadura. Recomiendo al 100% el uso de este framework para el desarrollo de proyectos web independientes.</p>
					<p class="text-light mt-1">Podeis visualizar otros proyectos realizados por mi más abajo, en el footer de la web. Si pulsais en el nombre del proyecto os llevará al repositorio de github en el que está subido.</p>
					<p class="text-light mt-1">Para cualquier duda, pregunta o sugerencia podeis enviar un correo electrónico al email que veis más abajo o bien podeis recurrir al siguiente formulario. Las cuestiones serán respondidas en la mayor brevedad posible. </p>
				</div>
			</div>
			<div class="row">
				<div class="offset-md-3 col-md-6">
					<h1 class="text-center text-light mb-3">FORMULARIO DE CONTACTO</h1>
					<form class="col-12">
						@csrf
						<div class="form-group">
							<input type="text" class="input-completo" id="input-edad" name="nombre" placeholder="Nombre" required>
						</div>
						<div class="form-group">
							<input type="text" class="input-completo" id="input-edad" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<textarea placeholder="Cuestión ..." rows="7" cols="97">

							</textarea>
						</div>
						<button type="submit" class="btn btn-primary enviar"><i class="fas fa-archive"></i> Enviar cuestión</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
