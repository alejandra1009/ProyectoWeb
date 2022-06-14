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

        $nombre = $_POST['nombre'];
        $numero_t = $_POST['numero_t']; 
        $fecha_c = $_POST['fecha_c'];
        $banco = $_POST['banco'];
        $cvv = $_POST['cvv'];

        ?>
        <!-- DEBO TRAREME LOS DATOS DEL ANTERIOR FORMULARIO-->
        <form class="formulario"  action="../../servidor/registro_tarjeta.php" method="POST">
            <h1>Confirmación</h1>
            <div class="cont">
                <p style="margin-bottom: 30px;">Verifica la información presentada y presiona "Pagar" para efectuar el
                    pago, y si ya no deseas efectuar el pago presiona "Cancelar"</p>
                <div class="input-cont">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="<?php echo $nombre; ?>" name="nombre" disabled>
                </div>
                <div class="input-cont">
                    <i class="fa fa-credit-card-alt icon"></i>
                    <input type="text" placeholder="Tipo de pago" name="tipop" disabled>
                </div>
                <div class="input-cont">
                    <i class="fa fa-home icon"></i>
                    <input type="text" placeholder=" <?php echo $banco; ?> " name="banco" disabled>
                </div>
                <div class="input-cont">
                    <i class="fa fa-money icon"></i>
                    <input type="text" placeholder="Total a pagar" name="total" disabled>
                </div>
                <input type="submit" value="Cancelar" class="button" onclick="location.href='tienda.html'">
                <input type="submit" value="Guardar" class="button" >
                <!-- onclick="location.href='comprobante.html'"-->
            </div>
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

</html>