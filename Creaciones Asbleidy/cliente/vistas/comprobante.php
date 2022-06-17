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
        <form class="formulario" action="conexion.php" method="POST">
            <h1>Comprobante de pago</h1>
            <div class="cont">
                <div class="input-cont">
                    <i class="fa fa-calendar icon"></i>
                    <input type="text" placeholder="Fecha" name="fecha" readonly>
                </div>
                <div class="input-cont">
                    <i class="fa fa-file-text-o icon"></i>
                    <input type="text" placeholder="No. de factura" name="factura" readonly>
                </div>
                <div class="input-cont">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Nombre del usuario" name="user" readonly>
                </div>
                <div class="input-cont">
                    <i class="fa fa-money icon"></i>
                    <input type="text" placeholder="Total pagado" name="total" readonly>
                </div>
                <a href="tiendaa.php" id="enlaces">Volver a la tienda</a>
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