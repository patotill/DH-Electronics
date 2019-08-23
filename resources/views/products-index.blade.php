@extends('layouts.app')
@section('title', "Productos")
@section('content')

<div class="containerProductos" id="containerProductos" style="">

	<ul>
@foreach ($products as $product)


		<!-- producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="{{ $product->image }}" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h3><a href="#" class="link">
          <span itemprop="brand">{{ $product->name }}</span>
        </a></h3>
      </div>
      <a class="line"><i class="fal fa-horizontal-rule"></i></a>
      <div class="sect text-left">
        {{ $product->category_id->name }}
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">{{ $product->price }}</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>
</div>

		@endforeach
	</ul>
@endsection
