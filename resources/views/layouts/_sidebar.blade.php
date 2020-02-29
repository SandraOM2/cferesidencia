<ul class="sidebar navbar-nav" style="background:#056100">

    <li class="nav-item {{ Request::is('personal') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("personal.index") }}">
            <i class="fas fa-hard-hat"></i>
            <span>Personal</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('herramientas') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("herramientas.index") }}">
            <i class="fas fa-tools"></i>
            <span>Herramienta</span></a>
    </li>

    <li class="nav-item {{ Request::is('vehiculos') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("vehiculos.index") }}">
            <i class="fas fa-truck-monster"></i>
            <span>Vehículos</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-clipboard"></i>
            <span>Registro</span>
        </a>
    </li>

</ul>