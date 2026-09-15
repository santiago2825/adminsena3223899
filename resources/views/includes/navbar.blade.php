<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white" href="/">
            Admin SENA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAdmin"
            aria-controls="navbarNavAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAdmin">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- QUIENES SOMOS (Público para todos) -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold {{ request()->is('about') ? 'active border-bottom border-3' : '' }}"
                        href="{{ route('about') }}">
                        Quiénes somos
                    </a>
                </li>

                <!-- ADMINISTRACIÓN (SOLO VISIBLE SI EL USUARIO ESTÁ AUTENTICADO) -->
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Administración
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li>
                                <a class="dropdown-item {{ request()->is('computer/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('computer.index') }}">Computadores</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('area/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('area.index') }}">Áreas</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('course/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('course.index') }}">Cursos</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('apprentice/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('apprentices.index') }}">Aprendices</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('teacher/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('teacher.index') }}">Instructores</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('training_center/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('training_center.index') }}">Centros de formación</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('new/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('new.index') }}">Noticias</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('program/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('program.index') }}">Programas</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('environment/*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ route('environment.index') }}">Ambientes</a>
                            </li>
                        </ul>
                    </li>

                    <!-- MENÚ DE USUARIO (Solo el círculo activa el dropdown) -->
                    <li class="nav-item dropdown ms-lg-3 my-2 my-lg-0 d-flex align-items-center">
                        <!-- Botón interactivo: Círculo con la inicial que despliega el menú -->
                        <a class="text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="rounded-circle bg-white text-success fw-bold d-flex align-items-center justify-content-center shadow-sm" 
                                style="width: 38px; height: 38px; font-size: 1.1rem; cursor: pointer;">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                        </a>

                        <!-- Opciones del menú desplegable -->
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                            <li class="dropdown-header text-muted small">
                                Sesión iniciada como:<br>
                                <strong class="text-dark">{{ Auth::user()->email }}</strong>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger fw-semibold d-flex align-items-center">
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth

                <!-- BOTÓN ACCEDER (SOLO VISIBLE SI NO TIENE SESIÓN INICIADA) -->
                @guest
                    <li class="nav-item ms-lg-3 my-2 my-lg-0">
                        <a href="{{ route('login') }}" class="btn btn-light border shadow-sm px-4 py-2 fw-semibold text-success w-100">
                            Acceder
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>