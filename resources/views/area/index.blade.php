@extends('layouts.app')
@section('content')

<h1>AREAS</h1>

    <div class="container">
        <table id="idApprentice" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                <tr>
                    <br>
                    <td>{{$area->id}}</td>
                    <td>{{$area->name}}</td>
                    
                    
                    <td><a href="{{ route('area.show', $area->id)}}">mostrar</a></td> 
                </tr>
                    
                @endforeach
            </tbody>

        </table>

    </div>

@endsection