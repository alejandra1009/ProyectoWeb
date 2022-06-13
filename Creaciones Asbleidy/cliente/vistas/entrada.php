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
        <form class="formulario" action="../../servidor/registro_inventario_entrada.php" method="POST">
            <h1>Entrada de producto</h1>
            <div class="cont">
                <div class="input-cont">
                    <i class="fa fa-calendar icon"></i>
                    <input type="text" placeholder="INGRESE FECHA AAAA-MM-DD" id="fecha" name="fecha">
                </div>
                <!-- -->
                <div class="input-cont">
                        <i class="fa fa-archive icon"></i>
                        <select name="nombre" id="nombre" required>
                            <option>Seleccione un producto</option> <!-- VALIDAR SI EL NOMBRE DEL PRODUCTO VA EN VALUE -->





                <!-- HACER LO DE LA FECHA ACTUAL..-->
                <?php
            include '../../servidor/conexion.php';
            $consulta="SELECT * from producto";
            $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){ while($row = $resultado->fetch_array()){
                        $codigo = $row['codigo'];
                        $nombre = $row['nombre'];

                    ?>

                        
                            <option value="p1"><?php echo $nombre; ?></option>
                        
                <?php

                    }
                }

                ?>

                           </select>
                           </div>

               
                <div class="input-cont">
                    <i class="fa fa-list-ol icon"></i>
                    <input type="number" min="1" onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                        placeholder="Ingrese una cantidad" id="cantidad" name="cantidad" required>
                </div>
                <div class="input-cont">
                    <i class="fa fa-sun-o icon"></i>
                    <select id="color" name="color"  required>
                        <option value="">Seleccione un color</option>
                        <option value="BLANCO">Blanco</option>
                        <option value="NEGRO">Negro</option>
                        <option value="MARRON">Marrón</option>
                        <option value="ROJO">Rojo</option>
                        <option value="AZUL">Azul</option>
                        <option value="GRIS">Gris</option>
                        <option value="ROSADO">Rosado</option>
                    </select>
                </div>
                <div class="input-cont">
                    <i class="fa fa-hashtag icon"></i>
                    <select id="talla" name="talla" required>
                        <option value="">Seleccione una talla</option>
                        <option value="23">23</option>
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
                    </select>
                </div>
                <input type="submit" value="Guardar" class="button" name="btnguardarpse"
                   >
                   <!-- onclick="location.href='inventario.html' -->
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