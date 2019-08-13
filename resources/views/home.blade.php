@extends('layouts.app')
@section("title", "Bienvenido a DH Electronics")

@section('content')

<!-- Carousel -->

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/Boseagua.jpg" class="d-block w-100 h-100" alt="Bose">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Speaker Bose waterproof</h1>
            <p> Parlantes</p>
            <p><a class="btn btn-lg btn-outline-info" href="#" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/Boseagua.jpg" class="d-block w-100 h-100" alt="Bose">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Prueba - 2</h1>
            <p> Parlantes</p>
            <p><a class="btn btn-lg btn-outline-info" href="#" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/celulares-2019.jpg" class="d-block w-100 h-100" alt="BoseSPeaker">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Prueba - 3</h1>
            <p> Parlantes</p>
            <p><a class="btn btn-lg btn-outline-info" href="#" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class=" carousel-control carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>


<!-- PRODUCTOS -->



<div id="centerRegionContainer" class="centerRegionContainer ">

<div class="pro d-md-flex flex-md-equal my-md-3 pl-md-3">

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <img src="/images/BoseSPeaker.jpeg" class="img-fluid w-50 h-50" alt="imagen">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Parlantes</button>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3 justify-content ">
      <img src="/images/Fotografia.jpg" class="img-fluid w-50 h-50" alt="fotografia">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Fotografía</button>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/images/dron.jpg" class="img-fluid w-50 h-50 " alt="dron">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Drones & VideoCamaras</button>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center text-white overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/images/iphone.jpeg" class="img-fluid w-50 h-50" alt="celulares">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Celulares</button>
    </div>
  </div>
</div>

<div class="pro d-md-flex flex-md-equal my-md-3 pl-md-3">
  <div class="pro bg-inherit mr-md-3 pt-4 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/images/nintendo.jpg" class="img-fluid w-50 h-50" alt="dron">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Gaming</button>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-white text-center overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/images/Accesorios.jpeg" class="img-fluid w-50 h-50" alt="celulares">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Accesorios</button>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/images/DellCompu.jpg" class="img-fluid w-50 h-50" alt="compu">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">Computadoras</button>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/images/SamsungTV.jpg" class="img-fluid w-50 h-50" alt="TV">
      <br><br>
      <button type="button" class="btn btn-outline-secondary">TV & Entretenimiento</button>
    </div>
  </div>
</div>

</div>
</main>


@endsection
<!-- INCLUYO EL FOOTER -->



