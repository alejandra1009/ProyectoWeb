<?php

 include 'conexion.php';

 $email = $_POST['email'];
 $pass = $_POST['pass'];
 //$tipo = // validar con el tipo de usuario si es admin llevarlo a inicio


 $ux = '';
 $t = '*';
 $consulta = "SELECT $t from usuario";

 $resultado = mysqli_query($mysqli, $consulta);

 if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $email_v = $row['email'];
      $pass_v = $row['pass'];
      

     // echo $email_v;
     // echo $pass_v;

      if ($email===$email_v and $pass==$pass_v){
        //header("Location:../cliente/vistas/login.html");
      
        header("Location:../cliente/vistas/tiendaa.php");

        //valida en cascada OJO


      }else{
       // header("Location:../cliente/vistas/tienda.html");
      echo '<script type ="text/JavaScript">';  
      echo 'alert("ACCESO DENEGADO")';  
      echo '</script>';  

      //PENDIENTE CONTENTENER LA ALTERTA Y LUEGO LLEVARLA A LA VISTA

       header("Location:../cliente/vistas/login.html");
      }
    }

    
  }
 


//aqui ya muestra la consulta