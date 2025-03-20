<?php include("conexion.php");  

    $id = $_GET["id"];
    $conexion->query("DELETE FROM pelis 
                    WHERE id_peli=$id");  
    header("Location:index.php");  

?>