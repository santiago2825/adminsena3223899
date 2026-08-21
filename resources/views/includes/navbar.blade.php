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
            <ul class="navbar-nav ms-auto">
                <!-- QUIENES SOMOS -->
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold
                        {{ request()->is('about') ? 'active border-bottom border-3' : '' }}"
                        href="/about">
                        Quiénes somos
                    </a>
                </li>
                <!-- ADMINISTRACIÓN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow">
                        <li>
                            <a class="dropdown-item {{ request()->is('computer/*') ? 'active bg-success text-white' : '' }}"
                                href="/computer/list">
                                Computadores
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('area/*') ? 'active bg-success text-white' : '' }}"
                                href="/area/list">
                                Áreas
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('course/*') ? 'active bg-success text-white' : '' }}"
                                href="/course/list">
                                Cursos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('apprentice/*') ? 'active bg-success text-white' : '' }}"
                                href="/apprentice/list">
                                Aprendices
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('teacher/*') ? 'active bg-success text-white' : '' }}"
                                href="/teacher/list">
                                Instructores
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('training_center/*') ? 'active bg-success text-white' : '' }}"
                                href="/training_center/list">
                                Centros de formación
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex gap-3 justify-content-center align-items-center">
                <a href="/login" class="btn btn-light border shadow-sm px-4 py-2 fw-semibold text-success">
                    Acceder
                </a>
            </div>
        </div>
    </div>
</nav>
