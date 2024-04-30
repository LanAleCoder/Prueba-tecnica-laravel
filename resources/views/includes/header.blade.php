<header class="header__mdb">
    <nav id="header" class="navbar container">
        <div class="header__mdb-container">
            <a class="navbar-brand" href="">
                <span>MDB</span>
            </a>
            <ul class="navbar-list-items">
                <li class="navbar-list-item">
                    <a href="{{ route('iniciar-sesion') }}" class="navbar-list-item-link">
                        Iniciar sesión
                    </a>
                </li>
                <li class="navbar-list-item">
                    <a href="{{ route('registro') }}" class="navbar-list-item-link">
                        Registrarse
                    </a>
                </li>
            </ul>
            <div id="navbar" class="collapse navbar-collapse">
                <button class="button__toggle"><svg class="toggle_icon togle_icon_hidden" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"></line>
                        <line x1="3" x2="21" y1="12" y2="12"></line>
                        <line x1="3" x2="21" y1="18" y2="18"></line>
                    </svg> <svg class="toggle_icon_closed" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg></button>
            </div>
        </div>
        </div>
    </nav>
</header>
