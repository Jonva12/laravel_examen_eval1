@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="post" method="{{route('tiendas.store')}}">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br><br>
    Descripcion:<br> <input type="text" name="desc"><br><br>
    Password:<br> <input type="text" name="pass"><br><br>
    Email:<br> <input type="text" name="email"><br><br>
    Likes:<br> <input type="number" name="likes"><br><br>
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>
@endsection
