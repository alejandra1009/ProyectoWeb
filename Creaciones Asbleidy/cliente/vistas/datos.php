<?php

include '../../servidor/conexion.php';

$nombre_text = $_POST['nombre_text'];
//  $color = $_POST['color'];
// $talla = $_POST['talla'];
$precio_text = $_POST['precio_text'];

//$cantidad = $_POST['cantidad'];
                
$sql="INSERT INTO salida(nombre) VALUES('$nombre_text')"; // agregar el registro de salida
$resultado=$mysqli ->query($sql);

if($resultado>0){
    //echo 'REGISTRO AGREGADO';
 //header("Location:../cliente/vistas/historiale.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 
///////////////////////////////////////////////AQUI ESTA RELIZANDO EL REGISRO DE SALIDA


?>
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
    </header>
    <main>
        <form class="formulario" action="metodop.php" method="POST" >
            <h1>Completar información</h1>
            <div class="cont">
                <div class="input-cont">
                    <i class="fas fa-house-user icon"></i>
                    <input type="text" placeholder="Ingrese su dirección" id="direccion" name="direccion" required>
                </div>
                <div class="input-cont">
                    <i class="fas fa-map-marker-alt icon"></i>
                    <input type="text"
                        placeholder="Ingrese su ciudad" id="ciudad"  name="ciudad" required>
                </div>
                <div class="input-cont">
                    <i class="fas fa-mobile-alt icon"></i>
                    <input type="number" min="1"
                        placeholder="Ingrese su teléfono" id="telefono" name="telefono" required>
                </div>
                <input type="submit" value="Continuar" class="button">
                
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
       <p><?php  

        $subtotal_text = $_POST['subtotal_text'];
      //echo $subtotal_text;?></p> 
    </footer>
</body>

</html>