@extends('layouts.layout')
@section('contenido')
    <div class="quien-soy py-3 mt-3">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 text-center">
					<img src="https://avatars2.githubusercontent.com/u/25632042?s=460&v=4" class="img-fluid rounded-circle" alt="foto de Fran Alcón">
				</div>
				<div class="col-12 col-md-6 text-center">
					<h2 class="display-4">¿ Quién soy ?</h2>
					<p>Mi nombre es Fran Alcón, tengo 23 años y soy desarrollador web y multiplataforma. Actualmente trabajo en ayesa AT, en un proyecto web con web dynpro, un framework que permite la creación de aplicaciones web con java y SAP (ABAP).</p>
					<p>Me considero un amante de la informática, los videojuegos, del rap y del ciclismo. Descubrí el mundo del desarrollo a los 20 años, año en el que dejé la carrera que estaba estudiando (Historia en la US) y decidí cambiar el rumbo de mi vida profesional. Desde pequeño siempre me han gustado los ordenadores, y siempre sentí curiosidad de como se realizaban los programas, así que tomé la decisión de estudiar programación por mi cuenta, y cuando vi lo que era programar supe que quería dedicarme a ello profesionalmente en cuerpo y alma.</p>
					<p>Mis tecnologías favoritas son java (SE y EE), con JSF y Spring, de los cuales tengo unas nociones básicas y PHP con Laravel que hasta la fecha, es mi tecnología favorita, y en la que sigo aprendiendo cada día por mi cuenta.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-dark text-light">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="mt-3">Formación y experiencia</h2>
					<ul class="h5 py-3" style="list-style: none;">
						<li class="my-2">Bachillerato de Humanidades en I.E.S Bajo Guadalquivir (2012-2014)</li>
						<li class="my-2">C.F.G.S Desarrollo de aplicaciones web en I.E.S Polígono Sur (2016-2018)</li>
						<li class="my-2">C.F.G.S Desarrollo de aplicaciones multiplataforma en I.E.S Almunia (2018-2020)</li>
					</ul>
					<hr class="bg-light">
					<ul class="h5 py-3" style="list-style: none;">
						<li class="my-2">FCT Desarrollo de aplicaciones web en Guadaltel, Sevilla (marzo 2018 - junio 2018)</li>
						<li class="my-2">FCT Desarrollo de aplicaciones multiplataforma en Ayuda-T Pymes, el Puerto de Santa María (marzo 2019 - junio 2019)</li>
						<li class="my-2">C.F.G.S Desarrollo de aplicaciones multiplataforma en I.E.S Almunia (2018-2020)</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="mis-proyectos py-4">
		<h2 class="text-center mt-3 mb-3">Mis otros proyectos</h2>
		<div class="container">
			<div class="row text-center">
				<div class="col-12 col-md-6 col-lg-3 mb-3">
					<div class="card">
					  <img src="https://s3.amazonaws.com/wordpress-production/wp-content/uploads/sites/19/2016/08/como-elaborar-un-plan-de-proyecto-con-exito.jpg" class="card-img-top h-100" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">WildSport</h5>
					    <p class="card-text">WildSport es un proyecto realizado en php nativo junto con javascript, html 5 y css3 (Bootstrap 4) y con una base de datos mysql. El proyecto está realizado por Cristian de los Santos, Juan Delgado, Javier Jiménez, Fredy Jerbi y Fran Alcón (un servidor) y fue realizado como proyecto final del grado. En github está toda la información del proyecto.</p>
					    <a href="https://github.com/FranAlcon96/PI_2018" target="_blank" class="btn btn-primary"><i class="fas fa-project-diagram"></i> Ver Proyecto</a>
					  </div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 mb-3">
					<div class="card">
					  <img src="https://s3.amazonaws.com/wordpress-production/wp-content/uploads/sites/19/2016/08/como-elaborar-un-plan-de-proyecto-con-exito.jpg" class="card-img-top h-100" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Fransito Text y Explorer</h5>
					    <p class="card-text">Fransito Text es un Bloc de notas sencillo realizado en C#, el cual posee numerosas funcionalidades. Fransito Explorer es un navegador web también realizado en C# el cual tiene las funciones básicas de un navegador (uso de pestañas, página de inicio, favoritos... etc). Ambos proyectos fueron realizados para el módulo de desarrollo de interfaces. </p>
					    <a href="https://github.com/FranAlcon96/Fransito-Text" target="_blank" class="btn btn-primary"><i class="fas fa-project-diagram"></i> Ver Proyecto</a>
					  </div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 mb-3">
					<div class="card">
					  <img src="https://s3.amazonaws.com/wordpress-production/wp-content/uploads/sites/19/2016/08/como-elaborar-un-plan-de-proyecto-con-exito.jpg" class="card-img-top h-100" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Web SFDK</h5>
					    <p class="card-text">Página web estática realizada para el módulo de diseño de interfaces web, 100% dedicada al grupo de rap sevillano SFDK. La web contiene únicamente html 5 y css 3, y fue la primera página web funcional que desarrollé, por lo que su estructura no es del todo correcta y no es responsive, pero su diseño me encantó y en un futuro se mejorará.</p>
					    <a href="#" class="btn btn-primary" target="_blank"><i class="fas fa-project-diagram"></i> Ver Proyecto</a>
					  </div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 mb-3">
					<div class="card">
					  <img src="https://s3.amazonaws.com/wordpress-production/wp-content/uploads/sites/19/2016/08/como-elaborar-un-plan-de-proyecto-con-exito.jpg" class="card-img-top h-100" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Agenda personal</h5>
					    <p class="card-text">Proyecto sencillo realizado en JSF, con el objetivo de aprender la tecnología. Se trata de una agenda de contactos, en la cyal se pueden realizar funciones de crear, editar, eliminar y mostrar los contactos (CRUD). También incluye su sistema de Login y registro. Este proyecto irá siendo mejorado con el tiempo, por lo que se acepta cualquier tipo de sugerencia.</p>
					    <a href="https://github.com/FranAlcon96/AgendaPersonal" target="_blank" class="btn btn-primary"><i class="fas fa-project-diagram"></i> Ver Proyecto</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
