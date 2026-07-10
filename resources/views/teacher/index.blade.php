@extends('layouts.app')
@section('content')

<h1>lista de instructores</h1>

<div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Id area</th>
                <th>Id centro de formacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->area_id }}</td>
                <td>{{ $teacher->training_center_id }}</td>
                <td>
                    <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info">Mostrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection