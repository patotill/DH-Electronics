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
        <img src="/images/Boseagua.jpg" class="d-block w-100 h-80" alt="Bose">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Parlantes waterproof</h1>
            <p> Bose - UE - Apple</p>
            <p><a class="btn btn-lg btn-outline-info" href="{{ url('/categoria/3/audio') }}" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/foto.jpg" class="d-block w-100 h-80" alt="Bose">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Fotografia</h1>
            <p>Nikon - Sony - DJI</p>
            <p><a class="btn btn-lg btn-outline-info" href="{{ url('/categoria/1/fotografia') }}" role="button">Ver más</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/smartphone.jpg" class="d-bloITEck w-100 h-80" alt="celulares">
        <div class="containerCarousel">
          <div class="carousel-caption text-left">
            <h1>Smartphones</h1>
            <p> Samsung - Apple - Google</p>
            <p><a class="btn btn-lg btn-outline-info" href="{{ url('/categoria/4/mobile') }}" role="button">Ver más</a></p>
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
{{ session()->get('msj') }}


<div id="centerRegionContainer" class="centerRegionContainer ">

<div class="pro d-md-flex flex-md-equal my-md-3 pl-md-3">

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <img src="/images/BoseSPeaker.jpeg" class="img-fluid w-50 h-50" alt="audio">
      <br><br>
        <a class="btn btn-outline-secondary" href="{{ url('/categoria/3/audio') }}">Parlantes</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3 justify-content ">
      <img src="/images/Fotografia.jpg" class="img-fluid w-50 h-50" alt="fotografia">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/1/fotografia') }}">Fotografía</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/images/dron.jpg" class="img-fluid w-50 h-50 " alt="fotografia">
      <br><br>
        <a class="btn btn-outline-secondary" href="{{ url('/categoria/1/fotografia') }}">Drones & VideoCamaras</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center text-white overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/images/iphone.jpeg" class="img-fluid w-50 h-50" alt="celulares">
      <br><br>
          <a class="btn btn-outline-secondary" href="{{ url('/categoria/4/mobile') }}">Celulares</a>
    </div>
  </div>
</div>

<div class="pro d-md-flex flex-md-equal my-md-3 pl-md-3">
  <div class="pro bg-inherit mr-md-3 pt-4 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/images/nintendo.jpg" class="img-fluid w-50 h-50" alt="tv">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/5/tv') }}">Gaming</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-white text-center overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/images/Accesorios.jpeg" class="img-fluid w-50 h-50" alt="accesorios">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/6/accesorios') }}">Accesorios</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 p-3">
      <img src="/storage/images/fotoDH/lenovo.jpg" class="img-fluid w-50 h-50" alt="compu">
      <br><br>
      <a class="btn btn-outline-secondary" href="{{ url('/categoria/2/computadoras') }}">Computadoras</a>
    </div>
  </div>

  <div class="pro bg-inherit mr-md-3 pt-3 px-3 pt-md-3 px-md-3 text-center overflow-hidden">
    <div class="pro my-3 py-3">
      <img src="/storage/images/fotoDH/samsung_.jpg" class="img-fluid w-50 h-50" alt="TV">
      <br><br>
        <a class="btn btn-outline-secondary" href="{{ url('/categoria/5/tv') }}">Televisores</a>
    </div>
  </div>
</div>

</div>
</main>




@endsection
<!-- INCLUYO EL FOOTER -->
