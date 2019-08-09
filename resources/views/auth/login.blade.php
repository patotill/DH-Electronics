@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="/css/styles-login.css">
  

  <div class="container">
  <div class="login-container">
    <p style="text-align: center;">
      <i class="fab fa-digital-ocean"></i>
    </p>
    <h1>Bienvenido a DH Electronics</h1>

    <form method="POST" action="{{ route('login') }}">
     @csrf

        <label for="email">Nombre de usuario</label>
        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
    


                    
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" >
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
             <div class="checkbox">
                <input id="rem" type="checkbox" name="remember" value="">
                <label for="rem">Recordarme</label>
              </div>       

                    
         <button type="submit" name="button">Iniciar sesión</button>

                
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                     {{ __('¿Olvidó su contraseña?') }}
                </a>
            @endif
      </form>
  </div>
  </div>


@endsection