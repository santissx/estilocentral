<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title', 'Document')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    </style>
     <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @stack('styles')
      </head>
<body>
    <section name="navbar"> 
      <div class="navbar">
        <div class="logo">  <a href="{{ route('inicio') }}"><img src="{{ asset('imagenes/logo.png') }}" alt="LOGO" class="imglogo"></a></div>
        <div class="menu-items">
            <a href="{{ route('locales') }}">Locales</a>
            <a href="{{ route('hombres') }}">Hombres</a>
            <a href="{{ route('mujeres') }}">Mujeres</a>
            <a href="{{ route('ninos') }}">Niños/as</a>
            <a href="{{ route('estilos') }}">Estilos</a>
          
        </div>
        <div class="search-bar">
          <form action="get">
            <input type="text" placeholder="Encuentra tu tienda">
          </form>
        </div>


        <div class="user-profile dropdown">
          <a href="#" class="dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('imagenes/usuario.png') }}" alt="Perfil" class="profile-pic">
          </a>
      
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <!-- Opción de perfil -->
              <li>
                @if (Auth::user() && Auth::user()->id_rol == '2')
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Panel de Administración</a>
            @endif
                  </a>
              </li>
              <li><hr class="dropdown-divider"></li>
      
              <!-- Opción de logout -->
              <li>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </a>
                  </form>
              </li>
          </ul>
      </div>

       

  </div>
    </section>
   
   
    <div class=" contenido">
      @yield('content')
    </div>
  
  
    <div class="footer">
      @yield ('footer')
      <footer>
    <div class="footer-content">
   <p>© 2024 Mi Sitio Web. Todos los derechos reservados.</p>

    <br>
      <div class="footer-links">
        <a href="#">Términos de servicio</a>
        <a href="#">Contacto</a>
        
      </div>

  </div>

    
</div>
</footer>
</body> 
 </html>
    

 