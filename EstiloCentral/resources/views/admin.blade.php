
    <h1>pagina admin</h1>
    <div class="user-profile dropdown">
        <a href="#" class="dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="nomusu">Rodririos230</span>
            <img src="{{ asset('imagenes/usuario.png') }}" alt="Perfil" class="profile-pic">
        </a>
    
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <!-- Opción de perfil -->
            <li>
                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                    {{ __('Profile') }}
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