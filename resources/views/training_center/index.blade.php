@extends('layouts.app')
@section('content')

<h1>lista de centros de formación</h1>
<div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainingcenters as $trainingcenter)
            <tr>
                <td>{{ $trainingcenter->id }}</td>
                <td>{{ $trainingcenter->name }}</td>
                <td>{{ $trainingcenter->location }}</td>
                <td>
                    <a href="{{ route('training_center.show', $trainingcenter->id) }}" class="btn btn-info">Mostrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection