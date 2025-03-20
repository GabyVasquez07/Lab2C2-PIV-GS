<?php include "conexion.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelis</title>
</head>
<body>
<h1>Cartelera de peliculas</h1>
    <a href="agregar.php"><button type="button">Agregar nueva pelicula</button></a>
    <h2>Listado de Peliculas</h2>
    <?php 
        $listado = $conexion->query("SELECT * FROM pelis");

        echo "<table>
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Director</th>
                            <th>Año</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>";
        while ($dato = $listado->fetch_assoc()){
            echo "<tr>
                    <td>{$dato['Titulo']}</td>
                    <td>{$dato['Director']}</td>
                    <td>{$dato['Año']}</td>
                    <td>{$dato['Categoria']}</td>
                    <td>
                        <a href='editar.php?id={$dato['id_peli']}'>
                            <button>Editar</button>
                        </a>
                        <a href='eliminar.php?id={$dato['id_peli']}'>
                            <button>Borrar</button>
                        </a>
                    </td>
                </tr>
            ";
        }
        echo "</tbody>
                </table>";
    ?>
</body>
</html>