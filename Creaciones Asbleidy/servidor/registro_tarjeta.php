<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$numero_t = $_POST['numero_t']; //esto va a entradas
$fecha_c = $_POST['fecha_c'];
$banco = $_POST['banco'];
$cvv = $_POST['cvv'];

$sql="INSERT INTO tarjeta(nombre,numero_t,fecha_c,banco,cvv) VALUES('$nombre',$numero_t,'$fecha_c','$banco',$cvv)"; 
$resultado=$mysqli ->query($sql);

if($resultado>0){
//echo 'REGISTRO AGREGADO';
 header("Location:../cliente/vistas/confirmacion.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }