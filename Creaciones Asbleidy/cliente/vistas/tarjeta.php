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
        <form class="formulario"   method="POST">
            <!-- action="../../servidor/registro_tarjeta.php" -->
            <!---->
            <h1>Tarjeta</h1>
            <div class="cont">
                <div class="input-cont">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Ingrese el nombre del titular" id="nombre" name="nombre" required
                        onkeypress='return event.charCode < 48 || event.charCode > 57'>
                </div>
                <div class="input-cont">
                    <i class="fa fa-credit-card-alt icon"></i>
                    <input type="text" placeholder="Ingrese el número de la tarjeta" id="numero_t" name="numero_t" required
                        type="number" min="1" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
                <div class="input-cont">
                    <i class="fa fa-calendar icon"></i>
                    <input type="date" placeholder="Ingrese la fecha de caducidad" id="fecha_c" name="fecha_c" required>
                </div>
                <div class="input-cont">
                    <i class="fa fa-home icon"></i>
                    <select  id="banco" name="banco" required>
                        <option value="">Seleccione un banco</option>
                        <option value="BANCOLOMBIA">Bancolombia</option>
                        <option value="DAVIVIENDA">Davivienda</option>
                        <option value="AGRARIO">Banco Agrario</option>
                        <option value="BANCO_POPULAR">Banco Popular</option>
                        <option value="BBVA">BBVA</option>
                    </select>
                </div>
                <div class="input-cont">
                    <i class="fa fa-th-list icon"></i>
                    <input type="number" placeholder="Ingrese el cvv" name="cvv" required min="100" max="999"
                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
                <input type="submit" value="Guardar" class="button" >
                <!-- onclick="location.href='confirmacion.php'" -->
               
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