<?php

    include("config.php");

    // FORMA PARA SABER SI ESTA CONECTADO A LA BASE DE DATOS

    
    // if ($conn) {
    //     echo "Esta conectado";
    // }else {
    //     echo "No esta conectado";
    // }
    

    // if(isset($_POST['registro'])){
        //echo "<script>alert('Entrar');</script>";

        $nombreok = $_POST["nombre"];
        $correook = $_POST["correo"];
        $telenfok = $_POST["telefono"];
        $descriok = $_POST["descripcion"];
        $nombre_servicio = $_POST["nombre_servicio"];

        $registro="INSERT INTO formulario_cirud(nombre, correo, telefono, descripcion, nombre_servicio) 
        VALUES ('$nombreok', '$correook','$telenfok', '$descriok', '$nombre_servicio')";
        

        $result= mysqli_query($conn, $registro);

       echo $result;
    //    echo "Esta conectado" +$result;
        
    //   }
?>
