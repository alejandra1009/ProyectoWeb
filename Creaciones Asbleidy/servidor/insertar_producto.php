<?php
include 'conexion.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
//$imagen = $_POST['imagen'];

$sql="INSERT INTO producto (codigo,nombre,precio,imagen) VALUES('$codigo','$nombre','$precio','$imagen')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
  //echo 'REGISTRO AGREGADO';
 header("Location:../cliente/vistas/productos.html");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>