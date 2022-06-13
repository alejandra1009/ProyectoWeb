<?php
include 'conexion.php';



$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//imagen

$sql="UPDATE producto SET nombre='$nombre',precio=$precio,imagen='$imagen' WHERE codigo = $codigo;";

$resultado=$mysqli ->query($sql);
//UPDATE producto SET nombre='',precio='' where codigo='$codigo';
if($resultado>0){

 echo 'ACTUALIZADO';
 header("Location:../cliente/vistas/productos.php");
 
 //exit();
 
 }else{
     echo 'EROOR AL ACTUALIZAR PRODUCTO';
 }
 ?>


?>