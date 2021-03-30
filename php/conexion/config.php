<?php
  $serv="localhost";
  $user="root";
  $pass="";
  $namedb="cirud_formulario";
  $port="8889";

  $conn = mysqli_connect($serv, $user, $pass, $namedb, $port);

     if ($conn) {
         echo "Esta conectado";
     }else {
         echo "No esta conectado";
    }
?>