@extends('layouts.app')

@section('title', 'Crear un producto')

@section('content')
	<h2>Formulario para crear productos</h2>

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

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label>Nombre:</label>
					<input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Ingresar el nombre de producto">
					@if ($errors->has('name'))
						<p style="color: red;">{{ $errors->first('name') }}</p>
					@endif
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Precio:</label>
					<input class="form-control" type="number" name="price" value="{{ old('price') }}">
					@error ('price')
						<p style="color: red;">{{ $errors->first('price') }}</p>
					@enderror
				</div>
			</div>

			<div class="col-6">
				<div class="form-group">
					<label>Imagen:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="image">
						<label class="custom-file-label">Elegir Imagen</label>
					</div>
					@error ('image')
						<p style="color: red;">{{ $errors->first('image') }}</p>
					@enderror
				</div>
			</div>

			 {{--
			 <div class="col-6">
				<div class="form-group">
					<label>Marca:</label>
					<select class="form-control" name="brand_id">
						@foreach ($brands as $brand)
							<option value="{{ $brand->id }}"> {{ $brand->name }} </option>
						@endforeach
					</select>
				</div>
			</div>
			--}}
			
			<div class="col-6">
				<div class="form-group">
					<label>Categoria:</label>
					<select class="form-control" name="category_id">
						@foreach ($categories as $category)
							<option value="{{ $category->id }}"> {{ $category->name }} </option>
						@endforeach
					</select>
				</div>
			</div>

		</div>

		<button type="submit" class="btn btn-success">Guardar</button>
	</form>
	@endsection
