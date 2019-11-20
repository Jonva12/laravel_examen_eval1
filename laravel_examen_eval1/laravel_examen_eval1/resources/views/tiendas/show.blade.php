@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

  <h2>Has introducido la siguiente tienda</h2>

  <h3>Id: </h3>
  <h3>Nombre: </h3>
  <h3>Descripcion: </h3>
  <h3>Password: </h3>
  <h3>Email: </h3>
  <h3>Likes: </h3>

  <p>{{$tienda->id}}</p><br/>
  <p>{{$tienda->name}}</p><br/>
  <p>{{$tienda->description}}</p><br/>
  <p>{{$tienda->password}}</p><br/>
  <p>{{$tienda->email}}</p><br/>
  <p>{{$tienda->likes}}</p><br/>
@endsection