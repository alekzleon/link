<nav class="sidebar vertical-scroll dark_sidebar  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('img/logo_white.png') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a href="/home" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/dashboard.svg') }}" alt="">
                </div>
                <span>Inicio</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('getUrl') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/14.svg') }}" alt="">
                </div>
                <span>Enlaces</span>
            </a>
        </li>
        <li class="">
            <a href="/home" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/2.svg') }}" alt="">
                </div>
                <span>Redes Sociales</span>
            </a>
        </li>
        <li class="">
            <a href="/home" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/7.svg') }}" alt="">
                </div>
                <span>Eventos</span>
            </a>
        </li>
        <li class="">
            <a href="/home" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/4.svg') }}" alt="">
                </div>
                <span>QR / Menú</span>
            </a>
        </li>
        <li class="">
            <a href="/home" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/11.svg') }}" alt="">
                </div>
                <span>Configuración</span>
            </a>
        </li> 
        <li class="">                   
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/cancel.png') }}" alt="">
                </div>
                <span>Cerrar sesión</span></a>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>         
    </ul>
</nav>

