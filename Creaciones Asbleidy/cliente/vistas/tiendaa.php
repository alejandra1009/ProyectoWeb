<?php
$nombre = '';
$precio = 0;
$cantidad = 0;
                    //if(isset($_POST['submit'])){
                        $nombre = $_POST['nombre'];
                      //  $color = $_POST['color'];
                       // $talla = $_POST['talla'];
                        $precio = $_POST['precio'];
                        $cantidad = $_POST['cantidad'];
                    //}
                    
                ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creaciones Asbleidy</title>
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/tienda.css">
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

    <div class="usuario">
        <i class="fas fa-user icon" style="margin-left: 15px">
            <a href="datosu.html">Bienvenido Danny!</a>
        </i>
    </div>

    <h3 class="titulo">Catálogo de productos</h3>
    <section id="produtos">        
    <!-- CODIGO PHP -->
    <?php
            include '../../servidor/conexion.php';
            $consulta="SELECT * from producto";
            $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){ while($row = $resultado->fetch_array()){
                        $nombre = $row['nombre'];
                        //IMAGEN
                        $precio = $row['precio'];
                        //$ima
                
                        ?>

                    <section class="produto">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                        <h1 id="nombre"><?php echo $nombre; ?></h1>
                        <img id="imagenp" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>">
                        <h2 name="precio" id="precio"> <?php echo $precio; ?></h2>
                        <input type="number" id="cantidad" name="cantidad" min="1"  placeholder="Cantidad"
                         onkeypress='return event.charCode >= 48 && event.charCode <= 57' />

                        
                         <input type="submit" id="submit" name="submit" value="Agregar" class="button-add">
                         <!-- CARRITO() -->
                    </form>
                        </section> 
                        
    
    <?php 
                    }
                    
                     } ?>
   
   </section>
      
    <?php


    ?>


    <div class="tabla">
        <form class="formulario" action="datos.php" method="POST">
        <form class="formulario" action="../../servidor/registrar_salida.php" method="POST">
        <h3 class="titulo">Carrito de compras</h3>
        <table class="listado">
            <tr class="tre">
                <th>Nombre</th>
                <th>Foto</th>
                <th>Color</th>
                <th>Talla</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acción</th>
            </tr>
            <tr>
                <td><input type="text" id="nombre_text" name="nombre_text"  value="<?php echo($nombre)  ?>"></td>
                <td><img src="../img/product-9.jpg" id="imgt"></td>
                <td>
                    <select name="color" id="color" required>
                        <option value="">Seleccione un color</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                        <option value="Marron">Marrón</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Azul">Azul</option>
                        <option value="Gris">Gris</option>
                        <option selected value="Rosado">Rosado</option>
                    </select>
                </td>
                <td>
                    <select name="talla" id="talla" required>
                        <option value="">Seleccione una talla</option>
                        <option selected value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                </td>
                <td><input type="text" name="precio_text" id="precio_text" value="<?php echo($precio) ?>" ></td>
                <td ><input type="text" name="cantidad_text" id="cantidad_text"  value="<?php echo($cantidad) ?>"></td>
                <?php
                $subtotal=$precio*$cantidad;
                ?>
                <td><input type="text" name="subtotal_text" id="subtotal_text" value="<?php echo $subtotal ?>"></td>
                <td>Eliminar</td>
            </tr>
            <tr>
                <td colspan="5" style="text-align: right">Total</td>
                <td><?php echo $subtotal ?></td>
                <td> <input type="submit" value="PAGAR"></td>
                <input type="submit" value="">
                <!-- <td><a href="datos.html"><b>Pagar</b></a></td> -->
            </tr>
            </form>
            </form>
            
        </table>
    </div>

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


   <!-- <script src="../js/carrito.js"></script> -->
</body>

</html>