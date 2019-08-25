@extends('layouts.app')

@section('title', "Editar producto $productToEdit->name")

@section('content')
	<h2>Formulario para editar: {{ $productToEdit->name }}</h2>

	@if ($errors)
		@foreach ($errors->all() as $oneError)
			<p style="color: red;">{{ $oneError }}</p>
		@endforeach
	@endif

	<form action="/products/{{ $productToEdit->id }}" method="post" enctype="multipart/form-data">
		@csrf
		{{ method_field('put') }}

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label>Nombre:</label>
					<input class="form-control" type="text" name="name" value="{{ old('name', $productToEdit->name) }}" placeholder="Ingresá el nombre del producto">
					@if ($errors->has('name'))
						<p style="color: red;">{{ $errors->first('name') }}</p>
					@endif
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Precio:</label>
					<input class="form-control" type="number" name="price" value="{{ old('price', $productToEdit->price) }}">
					@error ('price')
						<p style="color: red;">{{ $errors->first('price') }}</p>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Stock:</label>
					<input class="form-control" type="number" name="stock" value="{{ old('stock', $productToEdit->stock) }}">
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Descripción:</label>
					<input class="form-control" type="text" name="description" value="{{ old('description', $productToEdit->description) }}" placeholder="Ingresá una descripcion del producto">
					@if ($errors->has('description'))
						<p style="color: red;">{{ $errors->first('description') }}</p>
					@endif
				</div>
			</div>


			<div class="col-6">
				<div class="form-group">
					<label>Imagen:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="image">
						<label class="custom-file-label">Elegir imagen</label>
					</div>
					@error ('image')
						<p style="color: red;">{{ $errors->first('image') }}</p>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Categoria:</label>
					<select class="form-control" name="genre_id">
						@foreach ($categories as $oneCategory)
							<option
								value="{{ $oneCategory->id }}"
								{{ $productToEdit->category_id == $oneCategory->id ? 'selected' : null }}
							> {{ $oneCategory->name }} </option>
						@endforeach
					</select>
				</div>
			</div>

		</div>

		<button type="submit" class="btn btn-success">Actualizar</button>
	</form>
	@endsection
