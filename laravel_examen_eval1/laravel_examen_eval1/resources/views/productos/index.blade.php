@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Productos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Tienda</th>      
    </tr>
    @foreach($productos as $p)
      <tr>
        <th>{{$p->id}}</th>
        <th>{{$p->name}}</th>
        <th>{{$p->description}}</th>
        <th>{{$p->price}}</th>
        <th>{{$p->stock}}</th>
        <th>Tienda</th>  
      </tr>
    @endforeach
  </table>

@endsection
