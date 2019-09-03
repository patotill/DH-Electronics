@extends('layouts.app')
@section('title', $productToShow->name)
@section('content')

@if(session('saved'))
	<p class = 'alert alert-success text-center'>El producto ha sido editado correctamente</p>
@endif
<div class="col-md-12" style="margin-left: 10px" >
<h3 class="text-left">{{ $productToShow->name }}</h3>
</div>
<br>

<div class="prod-caja d-md-flex flex-md-equal">

	<div class="img-zone col-md-6 text-center overflow-hidden">
		<div class="padding js-displayHoverImg">
			<a name="image" class="itemImg" href="#">
				<img src="{{ Storage::url($productToShow->image) }}" class="img-fluid rounded w-50 h-50" alt="#">
			</a>
		</div>
	</div>

	<div class="buy-zone col-md-6 text-center overflow-hidden">

	<div class="prices"><span class="price-you-pay bold">$ {{ $productToShow->price }}</span></div>
	<br>
	<div class="boton boton-show text-center d-md-flex flex-md-equal">

		<div class="col-md-8">

		@auth
		@if($selectedProductsId->contains($productToShow->id))
		<form method = "get" action = "/cart/edit/{{ $productToShow->id }}" >
			 @csrf
		<button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
		</form>
		@else
			<a class="btn btn-outline-info" href="/add-to-cart/{{ $productToShow->id }}">Agregar al carrito</a>
		@endif
		@endauth
		</div>
	</div>

	<br>
	@can('update', $productToShow)
		<form action="/products/destroy/{{ $productToShow->id }}" method="post" style="display: inline-block;">
			{{-- Siempre un formulario necesita el toke --}}
			@csrf
			{{-- Para usar el método HTTP que realmente queremos usar --}}

			<button type="submit" class="btn btn-danger">Eliminar</button>

		<a href="/products/edit/{{ $productToShow->id }}" class="btn btn-warning">Editar</a>
		@endcan
	</div>


</div>
<br>
<div class="col-md-12" style="margin-left: 10px" >
	<h4 class="font-weight-bold">DETALLE:</h3>
	<p class="font-weight-bold">
		{{ $productToShow->description}}
	</p>


</div>



</form>

<a href='/categoria/{{ $productToShow->category->id }}/{{ $productToShow->category->name }}' class="btn btn-success" style="margin-left: 10px">Volver atras</a>



@endsection
