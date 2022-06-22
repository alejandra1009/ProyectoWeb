<?php
    include 'conexion.php';

    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre']; //esto va a entradas
    $cantidad = $_POST['cantidad'];
    $color = $_POST['color'];
    $talla = $_POST['talla'];
    //debo registrar el inventario y la entrada, pendiente el nombre que va en select

    /* UPDATE INVENTARIO SET UNIDADES_I=0 WHERE ID_E=4

    //CONSULTAR DEL CODIGO DEL PRODUCTO

    */
    //SI EL PRODUCTO EXISTE Y ESTA EL INVENTARIO DEBE ACTUALIZAR AL MISMO INVENTARIO
$sql="INSERT INTO inventario (unidades_d,color,talla) VALUES($cantidad,'$color',$talla)"; //QUEDA PENDIENTE EL CODIGO
//FECHA AÑO, MES Y DIA 0000-00-00 2022-06-13
$sql2="INSERT INTO entrada (fecha,unidades_i,nombre,color,talla) VALUES('$fecha',$cantidad,'$nombre','$color',$talla)"; //QUEDA PENDIENTE ID_I
$resultado=$mysqli ->query($sql);
$resultado2=$mysqli ->query($sql2);

// aqui voy hacerle un update al inventario


if($resultado>0){
    //echo 'REGISTRO AGREGADO';
 header("Location:../cliente/vistas/historiale.php");
 
 //exit();
 
 }else{
     echo 'ERROOR AL AGREGAR REGISTRO';
 }
 

?>