<nav class="navbar navbar-expand-lg" style="background-color: #198754;">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-white" href="/">
            Admin SENA
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAdmin"
            aria-controls="navbarNavAdmin"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNavAdmin">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('teacher/*') ? 'active fw-bold border-bottom border-3' : '' }}"
                        href="/teacher/list">
                        Instructores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('computer/*') ? 'active fw-bold border-bottom border-3' : '' }}"
                        href="/computer/list">
                        Computadores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('training_center/*') ? 'active fw-bold border-bottom border-3' : '' }}"
                        href="/training_center/list">
                        Centros
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('course/*') ? 'active fw-bold border-bottom border-3' : '' }}"
                        href="/course/list">
                        Cursos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('apprentice/*') ? 'active fw-bold border-bottom border-3' : '' }}"
                        href="/apprentice/list">
                        Aprendices
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('area/*') ? 'active fw-bold border-bottom border-3' : '' }}"
                        href="/area/list">
                        Áreas
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>