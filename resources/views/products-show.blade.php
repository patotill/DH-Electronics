@extends('layouts.app')
@section('title', $productToShow->name)
@section('content')


@if(session('saved'))
	<p class="alert alert-success">El producto ha sido guardado</p>
@endif

<div class="col-md-12" style="margin-left: 10px" >
<h3 class="text-left">{{ $productToShow->name }}</h3>
</div>
<br>

<div class="prod-caja d-md-flex flex-md-equal">

	<div class="img-zone col-md-6 text-center overflow-hidden">
		<div class="padding js-displayHoverImg">
			<a name="image" class="itemImg" href="#">
				<img src="/storage/images/fotosDH/{{ $productToShow->image }}" class="img-fluid rounded w-50 h-50" alt="#">
			</a>
		</div>
	</div>

	<div class="buy-zone col-md-6 text-center overflow-hidden">

	<div class="prices"><span class="price-you-pay bold">$ {{ $productToShow->price }}</span></div>
	<br>
	<div class="boton boton-show text-center d-md-flex flex-md-equal">
		<div class="col-md-4">
			<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
			 <option selected>Cantidad</option>
				 <option value="{{ $productToShow->stock }}">
					 <option value="{{ $productToShow->stock }}">
					 {{ $productToShow->stock }}
				 	</option>
				 </option>
		 </select>


		</div>
		<div class="col-md-8">
			<a class="btn btn-outline-info" href="/add-to-cart/{{ $productToShow->id }}">Agregar al carrito</a>
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
	<p> {{ $productToShow->description}}</p>

</div>



</form>

<a href={{ URL::previous() }} class="btn btn-success" style="margin-left: 10px">Volver atras</a>



@endsection
