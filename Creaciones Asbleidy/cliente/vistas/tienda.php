<?php
    session_start();
    require_once 'database.php';
    if(isset($_POST['agregar'])){
        if(isset($_SESSION['add_carro'])){
            $item_array_id_cart = array_column($_SESSION['add_carro'],'item_id');
            if(!in_array($_GET['id'],$item_array_id_cart)){
                $count = count($_SESSION['add_carro']);
                $item_array = array(
                    'item_id' => $_GET['id'],
                    'item_nombre' => $_POST['hidden_nombre'],
                    'item_img' => $_POST['hidden_img'],
                    'item_precio' => $_POST['hidden_precio'],
                    'item_cantidad' => $_POST['cantidad'],
                );
                $_SESSION['add_carro'][$count] = $item_array;
            } else{
                echo '<script> alert("¡El producto ya existe!");</script>';
            }
        } else{
            $item_array = array(
                'item_id' => $_GET['id'],
                'item_nombre' => $_POST['hidden_nombre'],
                'item_img' => $_POST['hidden_img'],
                'item_precio' => $_POST['hidden_precio'],
                'item_cantidad' => $_POST['cantidad'],
            );
            $_SESSION['add_carro'][0] = $item_array;
        }
    }
    if(isset($_GET['action'])){
        if($_GET['action'] == 'delete'){
            foreach($_SESSION['add_carro'] AS $key => $value){
                if($value['item_id'] == $_GET['id']){
                    unset($_SESSION['add_carro'][$key]);
                    echo '<script>alert("¡El producto fue eliminado!");</script>';
                    echo '<script>window.location = "tienda.php";</script>';                    
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creaciones Asbleidy</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/18dd3f8795.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="encabezado">
        <img src="img/marca.png" alt="Logo" height="70px">
        <nav>
            <a href="index.html">Cerrar sesión</a>
        </nav>
    </header>

    <div class="page-nav" style="margin-top: 100px">
        <i class="fas fa-user icon" style="margin-left: 15px"><a href="datosu.html" style="color: black;
                                                                                            font-weight: 300;
                                                                                            text-decoration: none;
                                                                                            margin-left: 10px;">Nombre del usuario</a></i>
    </div>
    <?php
        $sql="SELECT id,nombre,precio,img FROM productos";
        $respuesta = mysqli_query($conn,$sql);
        if(mysqli_num_rows($respuesta)>0){
            while($row = mysqli_fetch_array($respuesta)){
            ?>
            <div class="page-content">
                <form method="POST" action="tienda.php?action=add&id=<?php echo $row['id'];?>">
                    <div class="product-container">
                        <h3 name="item_nombre"><?php echo $row['nombre'];?></h3>
                        <img src="img/<?php echo $row['img'];?>" />
                        <h1><?php echo $row['precio'];?></h1>
                        <input type="text" name="cantidad" valor="1" style="border: 2px solid #DD6222;; 
                                                                            border-radius: 5px; 
                                                                            margin: 0px 0px 15px 15px;
                                                                            width: 100px;"/>
                        <input type="hidden" name="hidden_nombre" value="<?php echo $row['nombre'];?>">
                        <input type="hidden" name="hidden_img" value="<?php echo $row['img'];?>">
                        <input type="hidden" name="hidden_precio" value="<?php echo $row['precio'];?>">
                        <input type="submit" name="agregar" class="btn button-add" style="..." value="Agregar">
                    </div>
                </form>
            </div>
            <?php
            }
        }
    ?>
    <div class="registros">
        <table class="listado">
            <tr>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Color</th>
                <th>Talla</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acción</th>
            </tr>
            <?php
                if(!empty($_SESSION['add_carro'])){
                    $total = 0;
                    foreach($_SESSION['add_carro'] AS $key => $value){
            ?>
                <tr>
                    <td><?php echo $value['item_nombre'];?></td>
                    <td><img src="img/<?php echo $value['item_img'];?>" class="img_carro" width="90px" object-fit="cover" /></td>
                    <td>
                        <?php
                            include("database.php");
                            $resultado = mysqli_query($conn,"SELECT * FROM colores");
                        ?>
                        <select name="colores" style="font-size: 16px;
                                                    height: 30px;
                                                    padding: 5px;
                                                    width: 200px;">
                        <option disabled selected="">Seleccione un color</option>
                        <?php
                        while($fila=$resultado->fetch_assoc()):
                            $id = $fila['id'];
                            $color = $fila['color'];
                            echo "<option value=$id>$color</option>";
                        endwhile;
                        ?>
                        </select>
                    </td>
                    <td>
                        <?php
                            include("database.php");
                            $resultado2 = mysqli_query($conn,"SELECT * FROM tallas");
                        ?>
                        <select name="tallas" style="font-size: 16px;
                                                    height: 30px;
                                                    padding: 5px;
                                                    width: 200px;">
                        <option disabled selected="">Seleccione una talla</option>
                        <?php
                        while($fila2=$resultado2->fetch_assoc()):
                            $id = $fila2['id'];
                            $numero = $fila2['numero'];
                            echo "<option value=$id>$numero</option>";
                        endwhile;
                        ?>
                        </select>
                    </td>
                    <td>$<?php echo $value['item_precio'];?></td>
                    <td><?php echo $value['item_cantidad'];?></td>
                    <td>$<?php echo number_format($value['item_cantidad'] * $value['item_precio'], 2);?></td>
                    <td><a href="tienda.php?action=delete&id=<?php echo $value['item_id'];?>">Eliminar</a></td>
                </tr>
                <?php
                    $total = $total + ($value['item_cantidad'] * $value['item_precio']);
                }
                ?>
                <tr>
                    <td colspan="6" style="align: right;">Total</td>
                    <td style="align: right;">$<?php echo number_format($total,2);?></td>
                    <td><a href="datos.html">Pagar</a></td>
                </tr>
                <?php
                    }else{
                        ?>
                <tr>
                    <td colspan="7" style="align: center;"><strong>¡No hay producto agregado!</strong></td>
                </tr>
            <?php
                }
            ?>
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
</body>

</html>