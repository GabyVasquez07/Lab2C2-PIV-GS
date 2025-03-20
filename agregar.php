<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Película</title>
</head>
<body>
    <h1>Agregar Nueva Película</h1>
    <form action="" method="post">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" required>
        
        <label for="director">Título</label>
        <input type="text" name="director" id="director" required>

        <label for="año">Año</label>
        <input type="number" name="año" id="año" required>

        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria" required>

        <button type="submit">Ingresar Película</button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $titulo = $_POST["titulo"];
            $director = $_POST["director"];
            $año = $_POST["año"];
            $categoria = $_POST["categoria"];

            $insercion = $conn->prepare("INSERT INTO pelis (titulo, director, año, categoria) VALUES (?, ?, ?, ?)");
            $insercion->bind_param("sis", $titulo, $director, $año, $categoria);

            if ($insercion->execute()) {
                header("Location: index.php"); 
                exit();
            } else {
                echo "<p>Error al ingresar la película: " . $conn->error . "</p>";
            }
        }
    ?>
</body>
</html>
