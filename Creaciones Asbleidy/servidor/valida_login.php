<?php

 include 'conexion.php'

 $todos = '*';
 $consulta = "SELECT $todos from usuario";

 $resultado = mysqli_query($mysqli, $consulta);

 if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      $email = $row['email'];
      $pass = $row['pass'];


      echo $email;
      echo $pass;
    }
 }
