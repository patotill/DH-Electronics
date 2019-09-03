@extends('layouts.app')
@section('title', "Productos")
@section('content')



  {{ isset($_GET['borrar']) ? $_GET['borrar'] : null }}

<div class="containerProductos" id="containerProductos" style="">


@foreach ($products as $product)

<div class="contItems d-md-flex flex-md-equal">

  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="{{ Storage::url($product->image) }}" class="img-fluid rounded w-50 h-50" alt="#">
      </a>
    </div>
  </div>

  <div class="desc_zone col-md-4 text-center overflow-hidden">

    <div class="itemHeader">
      <h3>
        <span itemprop="name">{{ $product->name }}</span>
      </h3>
    </div>
    <div class="sect text-left">
      <div class="descripcion">
        <h4>Descripción</h4>
        <ul class="lista">
        <li>Categoría: <h>{{ $product->category->name ?? 'Sin categoria'}}</h>
        <li> Descripción y caracteristicas técnicas:</li>
            <ul>
              <span itemprop="name">{{ $product->description }}</span>
            </ul>
      </div>
    </div>
  </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">

    <div class="prices"><span class="price-you-pay bold">$ {{ $product->price }}</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="/add-to-cart/{{ $product->id }}">Agregar al carrito</a></div>
		<br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="/products/{{ $product->id }}" role="button">Ver detalle</a></div>
  </div>
</div>
</div>
@endforeach

@endsection
