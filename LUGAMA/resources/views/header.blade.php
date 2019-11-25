<header class="header">
  <div class="logoContainer">
    <a href="#">
      {{-- <img class="logo"  src="img/logo/logoLugama.png" alt=""> --}}
      LUGAMA
    </a>
  </div> <!-- Fin del div del logo -->

  <div class="nav-container">
      {{-- <div class="">
          <a href="#"><i class="fas fa-bars"></i></a>
      </div> --}}
          <div class="menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>

          <ul class="nav-links">
            <li> <a href="#">Inicio</a> </li>
            <li> <a href="#">Productos</a> </li>
            <li> <a href="#">ARMA TU PC</a> </li>
          </ul>



        @if (Route::has('login'))
            <div class="login-register">
                @auth
                    <a href="{{ url('/home') }}">Bienvenido: {{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ route('login') }}">Ingresar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrate</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#"><i class="fas fa-shopping-cart"></i></a>


  </div> <!-- Fin del top-nav -->

  <script src="{{ asset('js/header.js')}}"></script>
</header>
<div class="space"></div>
