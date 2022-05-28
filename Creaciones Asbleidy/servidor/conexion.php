<?php

include("database.php");
session_start();
if(isset($_SESSION['nombreu'])){
    header('location: tienda.php');
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$tipo = $_POST["tipo"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$ciudad = $_POST["ciudad"];

//Login
if(isset($_POST["btningresar"])){
    $query = mysqli_query($conn,"SELECT * FROM usuarios WHERE email='$email' AND password='$pass'");
    $nr = mysqli_num_rows($query);
    if(!isset($_SESSION['nombreu'])){
        if($nr==1){
            session_start();
            $_SESSION['nombreu'] = $email;
            echo "<script> alert('Bienvenido $nombre'); window.location='tienda.php' </script>";
        } else{
            echo "<script> alert('Usuario no existe'); window.location='login.html' </script>";
        }
    }
}

//Registro
if(isset($_POST["btnregistrar"])){
    $sqlgrabar = "INSERT INTO usuarios(nombre,email,password) VALUES('$nombre','$email','$pass')";
    if(mysqli_query($conn,$sqlgrabar)){
        echo "<script> alert('Usuario registrado con éxito: $nombre'); window.location='login.html' </script>";
    } else{
        echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
    }
}

//Actualizar datos
if(isset($_POST["btnguardar"])){
    $sqlgrabar = "UPDATE usuarios set telefono='$telefono',direccion='$direccion',ciudad='$ciudad' WHERE email='$email'";
    if(mysqli_query($conn,$sqlgrabar)){
        echo "<script> alert('Compra realizada con éxito'); window.location='index.html' </script>";
    } else{
        echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
    }
}

?>


?>