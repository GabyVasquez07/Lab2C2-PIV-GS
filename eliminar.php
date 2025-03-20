<?php include("conexion.php");  

    $id = $_GET["id"];
    $conexion->query("DELETE FROM pelis 
                    WHERE id=$id");  
    header("Location:index.php");  

?>