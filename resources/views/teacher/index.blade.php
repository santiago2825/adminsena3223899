@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold text-success mb-1">
                Gestión de Instructores
            </h1>

            <p class="text-secondary mb-0">
                Administra los instructores registrados en el sistema.
            </p>
        </div>

        <a href="{{ route('teacher.create') }}"
            class="btn btn-success btn-sm rounded-pill px-3 shadow-sm">

            <i class="fas fa-plus"></i>
            Nuevo Instructor

        </a>

    </div>

    <!-- Tabla -->
    <div class="card border-0 shadow rounded-4 overflow-hidden">

        <table class="table table-hover align-middle mb-0">

            <thead class="table-dark text-center">

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Área</th>
                    <th>Centro de Formación</th>
                    <th colspan="3">Acciones</th>
                </tr>

            </thead>

            <tbody>

                @foreach($teachers as $teacher)

                <tr>

                    <td>{{ $teacher->id }}</td>

                    <td class="fw-semibold">
                        {{ $teacher->name }}
                    </td>

                    <td>{{ $teacher->email }}</td>

                    <td>{{ $teacher->area->name }}</td>

                    <td>{{ $teacher->training_center->name }}</td>

                    <td class="text-center">

                        <a href="{{ route('teacher.show', $teacher->id) }}"
                            class="btn btn-primary btn-sm rounded-circle">

                            <i class="fas fa-eye"></i>

                        </a>

                    </td>

                    <td class="text-center">

                        <a href="{{ route('teacher.edit', $teacher->id) }}"
                            class="btn btn-warning btn-sm rounded-circle text-white">

                            <i class="fas fa-pen"></i>

                        </a>

                    </td>
                    <td class="text-center">

                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection