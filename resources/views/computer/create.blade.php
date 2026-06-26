@extends('layouts.app')
@section('content')
    <form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 

        <label>
            numero:
            <br>
            <input type="number" name="number">
        </label>
        <br>
        <label >
            marca:
            <br>
            <input type="text" name="brand">
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>
@endsection