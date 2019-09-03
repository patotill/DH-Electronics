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
<<<<<<< Updated upstream
      <select id = "country" class="form-control @error('country') is-invalid @enderror" name="country"></select>
      <br>
      <select id = 'state' class="form-control" name="state"></select>
=======

        <select class="form-control @error('password') is-invalid @enderror" name="country">
    			 
    	  </select>
    
        @error('country')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
>>>>>>> Stashed changes

    		
        <!-- PASSWORD -->
        <label for="password">Contraseña </label>
<<<<<<< Updated upstream
        <input id="password" type="password" name="password" placeholder="debe contener un minimo de 6 caracteres" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
=======
        <input id="password" type="password" name="password" placeholder="debe contener un minimo de 8 caracteres" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
<script src="js/register.js"></script>
@endsection
=======



@endsection

<script type='text/javascript'>
            
            campoPaises = document.querySelector ('select[name=country]');

            fetch('http://dev.digitalhouse.com/api/getProvincias')
              .then(function(response){
                return response.json();
              })
              .then(function(data){
                   console.log(data)
               for (pais of data){
                  console.log(paises)
                 var opt = document.createElement('option');
                 var optText = document.createTextNode(pais.state);  

                 opt.append(optText);
                 campoPaises.append(opt);

                }
                      
              })
              .catch(error => console.error(error));

            
          </script>
>>>>>>> Stashed changes
