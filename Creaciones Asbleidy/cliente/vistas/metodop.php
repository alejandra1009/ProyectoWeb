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

<?php
 $subtotal_text = $_POST['subtotal_text'];

?>


<body>
    <header class="encabezado">
        <img src="../img/marca.png" alt="Logo" height="70px">
        <nav>
            <a href="../index.html">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <div class="formulario">
            <h1>Método de pago</h1>
            <div class="cont">
                <div class="input-cont">
                    <i class="fa fa-address-card-o icon"></i>
                    <select name="tipo" id="documento" required>
                        <option value="">Seleccione un tipo de documento</option>
                        <option value="ti">Tarjeta de indentidad</option>
                        <option value="cc">Cédula de ciudadanía</option>
                        <option value="ce">Cédula de extranjería</option>
                    </select>
                </div>
                <div class="input-cont">
                    <i class="fa fa-credit-card icon"></i>
                    <input type="number" min="1" 
                        placeholder="Ingrese su número de documento" name="pass" required>
                </div>
                <p>Seleccione el método de pago:</p>
                <input type="submit" value="Tarjeta" class="button" onclick="location.href='tarjeta.php'">
                <input type="submit" value="PSE" class="button" onclick="location.href='pse.php'">
            </div>
        </div>
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
        <?php
        echo $subtotal_text;
        ?>
    </footer>
</body>

</html>