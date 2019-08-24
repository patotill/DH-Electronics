@extends('layouts.app')

@section('title', $productToShow->name)

@section('content')
	<h2>Detalle de: {{ $productToShow->name }}</h2>
	<p><b>Precio:</b> {{ $productToShow->price }}</p>
	<p><b>Categoria:</b> {{ $productToShow->category->name}}</p>
	<img src="{{ $productToShow->image }}" width="200">
	<hr>

	{{-- @auth --}}
		<form action="/products/{{ $productToShow->id }}" method="post" style="display: inline-block;">
			{{-- Siempre un formulario necesita el toke --}}
			@csrf
			{{-- Para usar el método HTTP que realmente queremos usar --}}
			{{ method_field('delete') }}
			<button type="submit" class="btn btn-danger">Eliminar</button>
		</form>
		<a href="/products/edit/{{ $productToShow->id }}" class="btn btn-warning">Editar</a>
	{{-- @endauth --}}
@endsection
