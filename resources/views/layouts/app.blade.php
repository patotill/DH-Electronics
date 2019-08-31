 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <!-- FONT AWESOME -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- bootstrap -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- laravel -->
  <link rel="stylesheet" href="/css/app.css">
  <!-- Styles -->
  <link href="{{ asset('css/design2.css') }}" rel="stylesheet">

  <!--custom-styles-->
  @yield("customStyles")

</head>

<body>

<!-- <div id="app"> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ url('/') }}"><i class="fab fa-digital-ocean"></i></a>
    <a class="navbar-brand" href="{{ url('/') }}"> DH Electronics </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto text-right">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/faq') }}">Preguntas</a>
        </li>
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      @endguest
      </ul>
  </div>
</nav>


<!-- Segunda Tabla -->
<nav class="navbar navbar2 navbar-expand-lg navbar-light bg-light justify-content-around">

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto align-items-center">
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/categoria/1/fotografia') }}">Fotografía</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/categoria/2/computadoras') }}">Computadoras</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/categoria/3/audio') }}">Audio</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/categoria/4/mobile') }}">Mobile</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/categoria/5/tv') }}">TV & Entretenimiento</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/categoria/6/accesorios') }}">Accesorios</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{ url('/products') }}">Todos los productos</a>
       </li>

     </ul>

       <!-- search button - carrito -->

     <form class="form-inline justify-content-center my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-primary my-2 my-sm-0 mr-1" type="submit">
         <i class="fas fa-search"></i>
       </button>
       <a href="/cart">
         <i class="fas fa-shopping-cart" ></i>
       </a>
     </form>
  </div>
</nav>

  <main class="py-4">
    @yield('content')
  </main>


@include('partials.footer')


<!-- jQuery - Popper.js - JavaScript plugins -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>
