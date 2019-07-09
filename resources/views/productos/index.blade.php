@extends('productos.layout')

@section('content')
	
<h1 class="text-center">Productos</h1>

<div class="container">
  
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{ $item->nombre}}</td>
      <td>{{ $item->precio}}</td>
      <td>{{ $item->cantidad}}</td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>

@endsection