@extends('layouts.app')
@section('title', "Celulares")
@section('content')

<div class="containerProductos" id="containerProductos" style="">
<!-- primer producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/Samsung-4K-UltraHD.jpeg" class="img-fluid rounded w-50 h-50" alt="google">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h3><a href="#" class="link">
          <span itemprop="brand">Samsung 4K UltraHD</span>
        </a></h3>
      </div>
      <div class="sect text-left">
        <div class="descripcion">
          <h4>Descripcion</h4>
          <ul class="lista">
          <li><h>Colores:</h>
            <ul>
              <li> Blanco</li>
              <li> Negro</li>
              <li> Lila </li>
            </ul>
          </li>
            <li>Storage: 64 GB</li>
            <li>Size: 5.6" con OLED display</li>
            <li>Asistente de Google</li>
            <li>12.2MP Rear Dual-Pixel Camera</li>
            <li>8MP Front-Facing Camera</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <!-- <br><br> -->
    <div class="prices"><span class="price-you-pay bold">$22.500</span></div>
    <br>
    <div class="boton"><a class="btn" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

<!-- SEGUNDO producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/SonyTV.jpeg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h3><a href="#" class="link">
          <span itemprop="brand">SONY</span>
        </a></h3>
      </div>
      <div class="sect text-left">
        <div class="descripcion">
          <h4>Descripcion</h4>
          <ul class="lista">
            <li><h>Colores:</h>
              <ul>
                <li>Blanco ceramico</li>
                <li>Azul prisma</li>
                <li>Negro prisma </li>
              </ul>
            </li>
            <li><h>Capacidad:</h>
              <ul>
                <li>128 GB</li>
                <li>512 GB</li>
              </ul>
            </li>
            <li>Pantalla: 6.1" con OLED display</li>
            <li>16MP/12MP/12MP Rear Triple-Camera </li>
            <li>Ultra-Wide / Wide / 2x Telephoto Cameras</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">$50.400</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

<!-- producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/fotosDH/nintendo_switch.jpg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h3><a href="#" class="link">
          <span itemprop="brand">Nintendo Switch</span>
        </a></h3>
      </div>
      <a class="line"><i class="fal fa-horizontal-rule"></i></a>
      <div class="sect text-left">
        <div class="descripcion">
          <h4>Descripcion</h4>
          <ul class="lista">
            <li><h>Colores:</h>
              <ul>
                <li>Azul ocean</li>
                <li>Negro Piano</li>
              </ul>
            </li>
            <li>Capacidad: 64 GB</li>
            <li>Rear 48MP / 16MP / 12MP Camera System</li>
            <li>Front 20MP Selfie Camera</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">$24.200</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

<!-- producto -->
<div class="contItems d-md-flex flex-md-equal">
  <div class="img-zone col-md-4 text-center overflow-hidden">
    <div class="padding js-displayHoverImg">
      <a name="image" class="itemImg" href="#">
        <img src="/images/fotosDH/Play4.jpg" class="img-fluid rounded w-50 h-50" alt="asus">
      </a>
    </div>
  </div>

    <div class="desc_zone col-md-4 text-center overflow-hidden">
      <div class="itemHeader">
        <h3><a href="#" class="link">
          <span itemprop="brand">Playstation 4</span>
        </a></h3>
      </div>
      <a class="line"><i class="fal fa-horizontal-rule"></i></a>
      <div class="sect text-left">
        <div class="descripcion">
          <h4>Descripcion</h4>
          <ul class="lista">
            <li><h>Colores:</h>
              <ul>
                <li>Azul ocean</li>
                <li>Negro Piano</li>
              </ul>
            </li>
            <li>Capacidad: 64 GB</li>
            <li>Rear 48MP / 16MP / 12MP Camera System</li>
            <li>Front 20MP Selfie Camera</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="buy-zone col-md-4 text-center overflow-hidden">
    <div class="prices text-center"><span class="price-you-pay bold">$24.200</span></div>
    <br>
    <div class="boton text-center"><a class="btn btn-outline-secondary" href="{{ url('/audio') }}">Agregar al carrito</a></div>
  </div>
</div>

@endsection
