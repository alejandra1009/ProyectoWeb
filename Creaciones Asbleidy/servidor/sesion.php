<?php
    if(isset($_POST['btncerrar'])){
        session_destroy();
        echo "<script> alert('Se ha cerrado la sesión correctamente'); window.location='../cliente/vistas/login.html' </script>";
    } else{
        if(isset($_SESSION['nombreu'])){
            $usuarioingresado = $_SESSION['nombreu'];
            header('location: tienda.php');
        } else{
            echo "<script> alert('Debe iniciar sesión para poder ingresar a la tienda'); window.location='login.html' </script>";
        }
    }
?>