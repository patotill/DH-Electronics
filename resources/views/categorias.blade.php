@extends('layouts.app')
@section('title', "Productos")
@section('content')

<div class="containerProductos" id="containerProductos">

@foreach ($productsByCategory as $product)

  <div class="contItems d-md-flex flex-md-equal">

    <div class="img-zone col-md-4 text-center overflow-hidden">
      <div class="padding js-displayHoverImg">
        <a name="image" class="itemImg" href="#">
          <img src="{{ $product->image }}" class="img-fluid rounded w-50 h-50" alt="#">
        </a>
      </div>
    </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">

      <div class="itemHeader">
        <h3><a href="#" class="link">
          <span itemprop="brand">{{ $product->name }}</span>
        </a></h3>
      </div>
      <div class="sect text-left">
        <div class="descripcion">
          <h4>Descripcion</h4>
          <ul class="lista">
          <li><h>{{ $product->category->name }}</h>
            <ul>
              <li> Blanco</li>
              <li> Negro</li>
            </ul>
          </li>
            <li>Storage: 64 GB</li>
            <li>Size: 5.6" con OLED display</li>
            <li>12.2MP Rear Dual-Pixel Camera</li>
          </ul>
        </div>
      </div>
    </div>

<<<<<<< HEAD
    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">{{ $product->price }}</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('add-to-cart/'.$product->id) }}" role="button">Agregar</a></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="/products/{{ $product->id }}" role="button">Ver detalle</a></div>
=======
      <div class="buy-zone col-md-4 text-center overflow-hidden">
      <!-- <br><br> -->
      <div class="prices"><span class="price-you-pay bold">{{ $product->price }}</span></div>
      <br>
      <div class="boton"><a class="btn" href="{{ url('add-to-cart/'.$product->id) }}">Agregar al carrito</a></div>
    </div>
  </div>
>>>>>>> 3d8afe6a75c376d85145539ff7145865b0239fbd
  </div>
  @endforeach

@endsection
