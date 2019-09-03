@extends('layouts.app')
@section("title", "Bienvenido a DH Electronics")

@section('content')

<!-- Carousel -->
<main role="main">

<div class="container">
  <div class="row">
    <div class="col-md-4 my-2">
    <p class="h2 text-center text-md-left"> Hola,
      {{ Auth::user()->name }} </p>
      <ul class="nav flex-column text-center text-md-left">
          <li class="nav-item">
            <a class="nav-link" href="#">Compras</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Productos guardados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/profile/edit/{{ Auth::user()->id }}">Datos de usuario</a>
        </li>

      </ul>
    </div>



    <div class="col my-2">
      <p class="h2 text-center"> Resumen de cuenta </p>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <a href="">Compras</a>
            <span class="badge badge-primary badge-pill">14</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="">Productos guardados</a>
            <span class="badge badge-primary badge-pill">2</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="">Productos vistos</a>
            <span class="badge badge-primary badge-pill">1</span>
          </li>
        </ul>
    </div>

</div>




</main>




@endsection
<!-- INCLUYO EL FOOTER -->
