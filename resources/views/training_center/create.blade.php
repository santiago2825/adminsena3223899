@extends('layouts.app')
@section('content')
    <form action="{{route('training_center.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 

        <label>
            nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label >
            ubicacion:
            <br>
            <input type="text" name="location">
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>
</body>
@endsection