<?php
include 'conexion.php'


//$fecha = $_POST['fecha'];
$nombre_text = $_POST['nombre_text'];
$color = $_POST['color'];
$talla = $_POST['talla'];
$cantidad_text = $_POST['cantidad_text'];


$sql="INSERT INTO salida(nombre,color,talla,cantidad) VALUES('$nombre','$color',$talla,$cantidad)";
$resultado=$mysqli ->query($sql);

if($resultado>0){
    //echo 'REGISTRO AGREGADO';
 //header("Location:../cliente/vistas/historiale.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 
