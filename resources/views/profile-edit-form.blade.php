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
            <a class="nav-link" href="{{ url('/profile/edit') }}">Datos de usuario</a>
        </li>

      </ul>
    </div>



    <div class="register-container" style = "width: auto; margin: 20px 40px;">
  <p style="text-align: center;">
    <i class="fab fa-digital-ocean"></i>
  </p>

  <h2 class = "text-center">Editar:  <span style = "Color: black;">{{ $userToEdit->name }}</span></h2>

  @if ($errors)
    @foreach ($errors->all() as $oneError)
      <p style="color: red;">{{ $oneError }}</p>
    @endforeach
  @endif

  <form action="/profile/edit/{{ $userToEdit->id }}" method="post" enctype="multipart/form-data">
    @csrf


    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" type="text" name="name" value="{{ old('name', $userToEdit->name) }}" placeholder="Ingresá el nombre del producto">
          @if ($errors->has('name'))
            <p style="color: red;">{{ $errors->first('name') }}</p>
          @endif
        </div>
      </div>

      <div class="col-6">
        <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="{{ old('email', $userToEdit->email) }}">
          @error ('email')
            <p style="color: red;">{{ $errors->first('email') }}</p>
          @enderror
        </div>
      </div>

     

    </div>
    <br>
    <button type="submit" class="actualizar btn btn-success">Actualizar</button>

  </form>
</div>

</div>




</main>




@endsection

