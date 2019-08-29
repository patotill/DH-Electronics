@extends('layouts.app')

@section('customStyles')
<link rel="stylesheet" href="/css/styles-register.css">
@endsection

@section('content')


<!-- Registro -->
<div class="register-container">
  <p style="text-align: center;">
    <i class="fab fa-digital-ocean"></i>
  </p>
  <h1>Completá tus datos</h1>

  <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- NOMBRE COMPLETO -->
      <label for="name">Nombre completo</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

      @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
       @enderror

      <!-- EMAIL -->
      <label for="email">Correo electrónico</label>
      <input id="email" type="email" name="email" placeholder="user@email.com" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email">

      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

      <!-- PAIS DE NACIMIENTO -->
    	<label for="country">País de nacimiento</label>

        <select class="form-control @error('country') is-invalid @enderror" name="country" {{ old('country') }}>
    			 <option value="">Elegí un país</option>
    			 <option value="Argentina">Argentina</option>
    			 <option value="Brasil">Brasil</option>
    			 <option value="Colombia">Colombia</option>
    	  </select>
    

    		@error('country')
    		<span class="invalid-feedback" role="alert">
    			<strong>{{ $message }}</strong>
    		</span>
    		@enderror

        <!-- PASSWORD -->
        <label for="password">Contraseña </label>
        <input id="password" type="password" name="password" placeholder="debe contener 'DH' con un minimo de 8 caracteres" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <!-- ConfirmPass -->
        <label for="ConfirmPass">Confirmar contraseña</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <!-- BOTON Crear cuenta -->
        <button type="submit" class="btn btn-primary">
            {{ __('Crear cuenta') }}
        </button>

 </form>
 </div>
@endsection
