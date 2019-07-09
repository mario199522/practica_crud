@extends('productos.layout')

@section('content')

<h1>Ingresar Productos</h1>

<div class="container">
	

   <form action="{{ route('productos.store')}}" method="POST">
	@csrf

	<div class="row">
		<div class="col-md-12">
            <div class="form-group">
			<strong>Nombre</strong>			
			<input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre del producto">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<strong>Precio</strong>
			<input type="text" name="precio" class="form-control" placeholder="Ingrese precio">
			</div>
		</div>       
        <div class="col-md-12">
        	<div class="form-group">	<strong>Cantidad</strong>
			<input type="text" name="cantidad" class="form-control" placeholder="Ingrese cantidad">
			</div>
		</div>
       
       <div class="col-md-12">
       	  <button type="submit" class="btn btn-primary">Enviar</button>
       </div>

	</div>

	</form>
</div>

@endsection