    @extends('layouts.app')
    @section('content')

    <h1>LISTA DE APRENDICES</h1>

    <div class="container">
        <table id="idApprentice" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Numero de telefono</th>
                    <th>Id curso</th>
                    <th> Id computador</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                <tr>
                    <br>
                    <td>{{$apprentice->id}}</td>
                    <td>{{$apprentice->name}}</td>
                    <td>{{$apprentice->email}}</td>
                    <td>{{$apprentice->cell_number}}</td>
                    <td>{{$apprentice->course_id}}</td>
                    <td>{{$apprentice->computer_id}}</td>
                    
                    <td><a href="{{ route('apprentices.show', $apprentice->id)}}">mostrar</a></td>
                </tr>
                    
                @endforeach
            </tbody>

        </table>

    </div>


    @endsection