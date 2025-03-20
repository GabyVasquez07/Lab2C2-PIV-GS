<?php

    $conexion = mysqli_connect("localhost",
    "root","","peliss");
    if(mysqli_connect_errno()){
        echo "Error: ".mysqli_connect_error();
    }
    else{
        /*echo "Conexion realizada exitosamente";*/
    }
?>