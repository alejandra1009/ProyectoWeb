<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creaciones Asbleidy</title>
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/formulario.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/18dd3f8795.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="encabezado">
        <img src="../img/marca.png" alt="Logo" height="70px">
        <nav>
            <a href="../index.html">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <?php

        include '../../servidor/registro_tarjeta.php';// realiza el registro de tarjeta
      //  include '../../servidor/registrar_salida.php';
        /* cuando se realize el registro de tarjeta quiero realizar tambien la salida del producto
        */






        
        //AQUI DEBO VALIDAR SI EL USUARIO ES TARJETA O PSE Y HACER EL REGISTRO SEGUN SEA
        $nombre = $_POST['nombre'];
        $tipo_pago = 'tarjeta';
        // tipo de pago
        $numero = $_POST['numero_t']; 
    //    $fecha_c2 = $_POST['fecha_c'];
        $banco = $_POST['banco'];
   //     $cvv2 = $_POST['cvv'];

        ?>
        <!-- DEBO TRAREME LOS DATOS DEL ANTERIOR FORMULARIO-->
        <form class="formulario" action="comprobante.php"   method="POST">
            <h1>Confirmación</h1>
            <div class="cont">
                <p style="margin-bottom: 30px;">Verifica la información presentada y presiona "Pagar" para efectuar el
                    pago, y si ya no deseas efectuar el pago presiona "Cancelar"</p>
                <div class="input-cont">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="<?php echo $nombre; ?>" id="nombre_2" name="nombre_2" disabled>
                </div>
                <div class="input-cont">
                    <i class="fa fa-credit-card-alt icon"></i>
                    <input type="text" placeholder="<?php echo $tipo_pago?>" id="tipop" name="tipop" disabled>
                </div>
                <div class="input-cont">
                    <i class="fa fa-home icon"></i>
                    <input type="text" placeholder=" <?php echo $banco; ?>" id="banco" name="banco" disabled>
                </div>
                <div class="input-cont">
                    <i class="fa fa-money icon"></i>
                    <input type="text" placeholder="Total a pagar" name="total" disabled>
                </div>
                <input type="submit" value="Cancelar" class="button" onclick="location.href='tiendaa.php'">
                <input type="submit" value="Pagar" class="button" >
                <!-- onclick="location.href='comprobante.html'"-->
            </div>
            <?php
        $aux= $nombre;
?>
        </form>
    </main>
    <footer>
        <div class="contenedor-footer" id="contact">
            <div class="content-foo">
                <h4><i class="fab fa-whatsapp-square"></i> WhatsApp</h4>
                <p>3124567890</p>
            </div>
            <div class="content-foo">
                <h4><i class="fas fa-envelope"></i> Email</h4>
                <p>casbleidy@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4><i class="fab fa-facebook-square"></i> Facebook</h4>
                <p>Creaciones Asbleidy</p>
            </div>
            <div class="content-foo">
                <h4><i class="fab fa-instagram-square"></i> Instagram</h4>
                <p>creaciones_asbleidy</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Creaciones Asbleidy</h2>
    </footer>
</body>

<!--email nombre, numero_t,fecha_c,banco,cvv -->
</html>