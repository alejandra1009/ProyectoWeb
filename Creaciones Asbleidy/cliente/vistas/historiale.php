<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creaciones Asbleidy</title>
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/historial.css">
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
        <div class="inicio">
            <h1>Historial de entradas</h1>
            <table>
                <!-- AGREGAR NOMBRE COLOR Y TALLA-->
                <tr class="tre">
                  <th>Fecha</th>              
                  <th>Cantidad</th>             
                </tr>


                <?php
            include '../../servidor/conexion.php';
            $consulta="SELECT * from entrada";
            $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){ while($row = $resultado->fetch_array()){
                        $fecha = $row['fecha'];
                        $unidades_i = $row['unidades_i'];
                        //$ima
                
                        ?>
                    <tr>
                    <td><center><?php echo $fecha; ?></center></td>
                    <td><center><?php echo $unidades_i; ?></center></td>
                    </tr>
                    <?php 
                    }
                    
                     } ?>
               
            </table>

        </div>
        <div class="enlace">
            <a href="inventario.html" id="enlaces">Volver al inventario</a>
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
    </footer>
</body>

</html>