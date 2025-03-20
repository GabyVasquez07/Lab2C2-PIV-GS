<?php include "conexion.php"; ?>
<?php include "header.php"; ?>

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

<?php include "footer.php"; ?>