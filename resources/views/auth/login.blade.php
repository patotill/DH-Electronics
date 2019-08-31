@extends('layouts.app')

@section('customStyles')
<link rel="stylesheet" href="/css/styles-login.css">
@endsection

@section('content')

<p class='alert alert-danger text-center'>{{ session()->get('mensaje') }}</p>


  <div class="login-container">
    <p style="text-align: center;"><i class="fab fa-digital-ocean"></i></p>
    <h1>Bienvenido a DH Electronics</h1>

    <form method="POST" action="{{ route('login') }}">
     @csrf

      <!-- EMAIL -->
      <label for="email">Email</label>
        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

            <!-- CONTRASEÑA -->
      <label for="password">Contraseña</label>
        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" >
        @error('password')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
          </span>
        @enderror

          <!-- RECORDARME -->
        <div class="checkbox">
          <input id="rem" type="checkbox" name="remember" value="">
            <label for="rem">Recordarme</label>
        </div>

          <!-- Boton INICIO SESION -->
        <button type="submit" name="button">Iniciar sesión</button>

        @if (Route::has('password.request'))
          <a style="font-size: 14px"  class="btn btn-link" href="{{ route('password.request') }}">
             {{ __('¿Olvidó su contraseña?') }}
          </a>
        @endif
    </form>
  </div>

@endsection
