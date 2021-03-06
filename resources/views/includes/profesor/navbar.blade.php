
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">{{ Auth::guard('profesor')->user()->nombre }} {{ Auth::guard('profesor')->user()->apellidos }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alumnos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('alumnos') }}">Listar</a>
          <a class="dropdown-item" href="{{ route('alta-alumno') }}">Alta</a>
          <a class="dropdown-item" href="#">Baja</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Trimestres</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout')}}">Cerrar sesión</a>
        </li>
    </ul>
  </div>
</nav>
