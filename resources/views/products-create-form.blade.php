@extends('layouts.app')

@section('title', 'Crear un producto')

@section('customStyles')
<link rel="stylesheet" href="/css/styles-register.css">
@endsection

@section('content')

<div class="register-container">
  <p style="text-align: center;">
    <i class="fab fa-digital-ocean"></i>
  </p>

	<h2 class="text-center">Crear productos</h2>

	@if ($errors)
		@foreach ($errors->all() as $oneError)
			<p style="color: red;">{{ $oneError }}</p>
		@endforeach
	@endif

	<form action="/products/store" method="post" enctype="multipart/form-data">
		{{-- Token de Seguridad --}}
		{{-- Genera un input de tipo hidden con el token en el value --}}
		{{-- También se puede así: --}}
		{{-- {{ csrf_field() }} --}}
		@csrf

		<label for="name">Nombre</label>
		<input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Ingresar el nombre de producto">
		@error('name')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
		 @enderror

		<!-- @if ($errors->has('name'))
			<p style="color: red;">{{ $errors->first('name') }}</p>
		@endif -->


						<label for ="descripcion">Descripción</label>
						<input class="form-control" type="text" name="description" value="{{ old('description') }}" placeholder="Ingrese una descripcion del producto">
						@if ($errors->has('description'))
							<p style="color: red;">{{ $errors->first('description') }}</p>
						@endif



					<label for="precio">Precio</label>
					<input class="form-control" type="number" name="price" value="{{ old('price') }}">
					@error ('price')
						<p style="color: red;">{{ $errors->first('price') }}</p>
					@enderror



					<label for="stock">Stock</label>
					<input class="form-control" type="number" name="stock" value="{{ old('stock') }}">
					@error ('stock')
						<p style="color: red;">{{ $errors->first('stock') }}</p>
					@enderror


          <label for ="image">Imagen</label>
          <input type="file" name="file" id="file" class="inputfile"/>
          <label for="file"><strong class="btn btn-outline-success">Subir imagen</strong></label>

					@error ('image')
						<p style="color: red;">{{ $errors->first('image') }}</p>
					@enderror



					<label for ="categoria">Marcas</label>
					<select class="form-control" name="category_id">
						@foreach ($brands as $brand)
							<option value="{{ $brand->id }}"> {{ $brand->name }} </option>
						@endforeach
					</select>

					<label for ="categoria">Categoria</label>
					<select class="form-control" name="category_id">
						@foreach ($categories as $category)
							<option value="{{ $category->id }}"> {{ $category->name }} </option>
						@endforeach
					</select>


<br>

		<button type="submit" class="btn btn-success">Guardar</button>

	</form>
</div>


	@endsection
