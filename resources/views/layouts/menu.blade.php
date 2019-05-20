        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2c5e4c;">
          <a class="navbar-brand logo" href="{{ route('index') }}"><span class="menu-icon">S</span>SOCIAL PLAYER</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Comunidad
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('juegos') }}">Juegos</a>
                  <a class="dropdown-item" href="{{ route('grupos') }}">Grupos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('gestionOpiniones') }}">Gestionar opiniones</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Competitivo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('listarTorneos') }}">Torneos</a>
                  <a class="dropdown-item" href="{{ route('crearTorneo') }}">Crear torneo</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Acerca de</a>
              </li>

              <div>
              </ul>
              <ul class="navbar-nav ml-auto">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('sesion') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
              </li>
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-ninja"></i> {{ auth()->user()->usuario }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Mi Perfil</a>
                  <form action="{{ route('logout') }}" method="post" id="logout-form">
                    @csrf
                  <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                  </form>
                </div>
              </li>
            </ul>
          </div>
          @endguest
        </nav>
