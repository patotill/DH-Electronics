@extends('layouts.app')
@section('title', $productToShow->name)
@section('content')

	<div class="text-center">

		@if(session('saved'))
			<p class="alert alert-success">El producto ha sido guardado</p>
		@endif

		<h2>DETALLE DEL PRODUCTO</h2>
		<h3>{{ $productToShow->name }}</h3>
		<h4><b>Precio: $</b> {{ $productToShow->price }}</h4>
		<p><b>Categoria:</b> {{ $productToShow->category->name}}</p>
		<p><b>Descripción:</b> {{ $productToShow->description}}</p>

		<img src="/storage/images/fotosDH/{{ $productToShow->image }}" width="200">
		{{---	{{Storage:url($productToShow->image) --}}
		<hr>

		@can('update', $productToShow)
			<form action="/products/destroy/{{ $productToShow->id }}" method="post" style="display: inline-block;">
				{{-- Siempre un formulario necesita el toke --}}
				@csrf
				{{-- Para usar el método HTTP que realmente queremos usar --}}

				<button type="submit" class="btn btn-danger">Eliminar</button>
			</form>


			<a href="/products/edit/{{ $productToShow->id }}" class="btn btn-warning">Editar</a>
			@endcan

			</form>


		<a href={{ URL::previous() }} class="btn btn-success">Volver atras</a>
	</div>


@endsection
