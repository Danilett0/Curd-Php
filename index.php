<link rel="stylesheet" href="styles.css">

<?php

include_once "./db.php";

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) { ?>

    <table>
        <caption></caption>

        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($fila = $resultado->fetch_assoc()) { ?>

                <tr>
                    <td>
                        <?php echo $fila["documento"] ?>
                    </td>
                    <td>
                        <?php echo $fila["nombre"] ?>
                    </td>
                    <td>
                        <?php echo $fila["edad"] ?>
                    </td>
                    <td>
                        <?php echo $fila["cargo"] ?>
                    </td>
                    <td>
                        <a class="Eliminar" href="eliminar.php?id=<?php echo $fila["documento"] ?>">Eliminar</a>
                        <a class="Editar" href="editar.php?id=<?php echo $fila["documento"] ?>">Editar</a>
                    </td>
                </tr>


            <?php } ?>
        </tbody>
    </table>
    <?php

} ?>

<form action="guardar.php" method="post">

    <input placeholder="documento" required type="number" name="documento">
    <input placeholder="nombre" required type="text" name="nombre">
    <input placeholder="edad" required type="number" name="edad">
    <input placeholder="cargo" required type="text" name="cargo">

    <input class="button" type="submit" value="Agregar Nuevo Usuario">

</form>