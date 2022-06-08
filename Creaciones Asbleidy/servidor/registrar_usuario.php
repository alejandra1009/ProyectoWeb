<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql="INSERT INTO usuario (nombre,email,pass) VALUES('$nombre','$email','$pass')";
$resultado=$mysqli ->query($sql);

if($resultado>0){
 //   echo 'REGISTRO AGREGADO';
 header("Location:../cliente/vistas/tienda.html");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 





?>