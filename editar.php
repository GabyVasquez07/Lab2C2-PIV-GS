<?php include("conexion.php");

    $id = $_GET["id"];
    $resultado = $conexion->query("SELECT * FROM pelis 
                    WHERE id_peli=$id"); 
    $titulo = $resultado->fetch_assoc(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Titulo</label>
        <input type="text" name="titulo" id="" 
        value="<?php echo $titulo["Titulo"]?>">
        <label for="">Director</label>
        <input type="text" name="director" id=""
        value="<?php echo $titulo["Director"]?>">
        <label for="">Año</label>
        <input type="date" name="año" id=""
        value="<?php echo $titulo["Año"]?>">
        <label for="">Categoria</label>
        <input type="text" name="categoria" id=""
        value="<?php echo $titulo["Categoria"]?>">
        <button type="submit">Ingresar datos</button>
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $titulo = $_POST["titulo"];
            $director = $_POST["director"];
            $año = $_POST["año"];
            $categoria = $_POST["categoria"];


            $actualizacion = $conexion->prepare("UPDATE 
            pelis SET Titulo=?, Director=?,Año=?, Categoria=?
            WHERE id_peli=$id");
            $actualizacion->bind_param("ssss", 
            $titulo, $director, $año, $categoria);
            $actualizacion->execute();
            header("Location:index.php");
        }

    ?>
</body>
</html>