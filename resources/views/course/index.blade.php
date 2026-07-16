@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-success mb-1">
                Gestión de Cursos
            </h1>
            <p class="text-secondary mb-0">
                Administra los cursos registrados en el sistema.
            </p>
        </div>
        <a href="{{ route('course.create') }}"
            class="btn btn-success btn-sm rounded-pill px-3 shadow-sm">
            <i class="fas fa-plus-circle me-1"></i>
            Nuevo Curso
        </a>
    </div>
    <!-- Tabla -->
    <div class="card border-0 shadow rounded-4 overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Número de Curso</th>
                    <th>Jornada</th>
                    <th>Área</th>
                    <th>Centro de Formación</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td class="fw-semibold">
                        {{ $course->course_number }}
                    </td>
                    <td>{{ $course->day }}</td>
                    <td>{{ $course->area->name }}</td>
                    <td>{{ $course->training_center->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('course.show', $course->id) }}"
                            class="btn btn-primary btn-sm rounded-circle">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('course.edit', $course->id) }}"
                            class="btn btn-warning btn-sm rounded-circle text-white">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection