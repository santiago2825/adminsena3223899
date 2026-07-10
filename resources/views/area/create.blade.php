
    @extends('layouts.app')
    @section('content')
        
    
    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 

        <label>
            nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>
    @endsection
