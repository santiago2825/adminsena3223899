@extends('layouts.app')
@section('content')

<h1>lista de cursos</h1>

<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero de curso</th>
                <th>Dia </th>
                <th>Id area</th>
                <th>Id centro de formacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_number }}</td>
                <td>{{ $course->day }}</td>
                <td>{{ $course->area_id }}</td>
                <td>{{ $course->training_center_id }}</td>
                <td>
                    <a href="{{ route('course.show', $course->id) }}" class="btn btn-info">Mostrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



@endsection