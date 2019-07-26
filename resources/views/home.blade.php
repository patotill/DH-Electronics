<?php

//DESLOGUEA - DESTRUYE SESION Y COOKIE - REDIRIGE
 session_start();
 session_destroy();

 setcookie("username", null, -1);

 //require_once("header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="/css/design2.css">
  <!-- FONT AWESOME -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

   <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Bienvenido a DH Electronics</title>


</head>


<body>

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

</body>

<!-- INCLUYO EL FOOTER -->
<?php
  //include ("footer.blade.php");
?>


<!-- jQuery - Popper.js - JavaScript plugins -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>
