<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- FONT AWESOME -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

   <!-- conecto a bootstrap -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DH Electronics - Ingresar</title>
  <link rel="stylesheet" href="CSS/styles2.css">
</head>

<body>
  <div class="container">
  <div class="login-container">
    <p style="text-align: center;">
      <i class="fab fa-digital-ocean"></i>
    </p>
    <h1>Bienvenido a DH Electronics</h1>
    <p style="color: rgba(240,59,28,.66); text-align: center;"> <?= $loginError ?></p>
       <form method="POST" action="{{ route('login') }}">
                        @csrf

                <!-- USERNAME -->
                <label for="username">Nombre de usuario</label>
                <input id="username" type="text" name="username">
                

                <!-- PASSWORD -->
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" >
              <div class="checkbox">
                <input id="rem" type="checkbox" name="remember" value="">
                <label for="rem">Recordarme</label>
              </div>
                <button type="submit" name="button">Iniciar sesión</button>

                <a href="#">¿Olvidó su contraseña?</a><br>
                <a href="register.php">Cree una cuenta</a>

      </form>
  </div>
@include('partials.footer')
</div>
</body>

<!-- INCLUYO EL FOOTER -->


 <!-- JAVA de bootstrap  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
