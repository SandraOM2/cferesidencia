<ul class="sidebar navbar-nav" style="background:#056100">

    <li class="nav-item dropdown {{ Request::is('personal') ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-hard-hat"></i>
            <span>Personal</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="background:#E7F7EA">
          <a class="dropdown-item" href="{{ route("personal.index") }}">Alta Personal</a>
          <a class="dropdown-item" href="{{ route("puestos.index") }}">Alta Puestos</a>
          
        </div>
      </li>

    <li class="nav-item {{ Request::is('herramientas') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route("herramientas.index") }}">
            <i class="fas fa-tools"></i>
            <span>Herramienta</span></a>
    </li>

    <li class="nav-item dropdown {{ Request::is('vehiculos') ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="{{ route("vehiculos.index") }}" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-truck-monster"></i>
            <span>Vehículos</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="background:#E7F7EA">
            <a class="dropdown-item" href="{{ route("vehiculos.index") }}">Alta Vehiculo</a>
            <a class="dropdown-item" href="{{ route("modelos.index") }}">Alta Modelos </a>
            <a class="dropdown-item" href="{{ route("marcas.index") }}">Alta Marcas </a>
            
          </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-clipboard"></i>
            <span>Registro</span>
        </a>
    </li>




</ul>

