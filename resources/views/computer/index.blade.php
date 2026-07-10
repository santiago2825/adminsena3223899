@extends('layouts.app')
@section('content')

<h1>lista de computadores</h1>
<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->number }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>
                        <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-info">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

    </table>
</div>

@endsection