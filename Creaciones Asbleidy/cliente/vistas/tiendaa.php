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
            <a href="datosu.html">Nombre del usuario</a>
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
                        <h1 id="nombre"><?php echo $nombre; ?></h1>
                        <img id="imagenp" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>">
                        <h2><?php echo $precio; ?></h2>
                        <input type="number" id="cantidad" name="cantidad" min="1"  placeholder="Cantidad"
                         onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                         <input type="submit" name="agregar" value="Agregar" class="button-add"  onclick="carrito()">
    
                        </section> 
                        
    
    <?php 
                    }
                    
                     } ?>
   
   </section>
      
    <?php


    ?>


    <div class="tabla">
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
                <td>producto1</td>
                <td><img src="../img/product-1.jpg" id="imgt"></td>
                <td>
                    <select name="colores" id="color" required>
                        <option value="">Seleccione un color</option>
                        <option value="c1">Blanco</option>
                        <option value="c2">Negro</option>
                        <option value="c3">Marrón</option>
                        <option value="c4">Rojo</option>
                        <option value="c5">Azul</option>
                        <option value="c6">Gris</option>
                        <option value="c7">Rosado</option>
                    </select>
                </td>
                <td>
                    <select name="tallas" id="talla" required>
                        <option value="">Seleccione una talla</option>
                        <option value="t1">23</option>
                        <option value="t2">24</option>
                        <option value="t3">25</option>
                        <option value="t4">26</option>
                        <option value="t5">27</option>
                        <option value="t6">28</option>
                        <option value="t7">29</option>
                        <option value="t8">30</option>
                        <option value="t9">31</option>
                        <option value="t10">32</option>
                        <option value="t11">33</option>
                        <option value="t12">34</option>
                        <option value="t13">35</option>
                        <option value="t14">36</option>
                        <option value="t15">37</option>
                        <option value="t16">38</option>
                        <option value="t17">39</option>
                        <option value="t18">40</option>
                        <option value="t19">41</option>
                        <option value="t20">42</option>
                </td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Subtotal</td>
                <td>Eliminar</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: right">Total</td>
                <td>$total</td>
                <td><a href="datos.html">Pagar</a></td>
            </tr>
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


    <script src="../js/carrito.js"></script>
</body>

</html>