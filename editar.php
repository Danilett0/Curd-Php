<link rel="stylesheet" href="styles.css">


<?php

include_once "./db.php";


if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM usuarios WHERE documento = $id ";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) { ?>

        <form action="editar.php" method="post">

            <?php
            while ($fila = $resultado->fetch_assoc()) { ?>
                <input hidden required value="<?php echo $fila["documento"] ?>" type="text" name="documento">
                <input required value="<?php echo $fila["nombre"] ?>" type="text" name="nombre">
                <input required value="<?php echo $fila["edad"] ?>" type="text" name="edad">
                <input required value="<?php echo $fila["cargo"] ?>" type="text" name="cargo">

                <input class="Editar" type="submit" value="Guardar" name="editar">

            <?php }
            
            ?>

        </form>
        <?php
    }

}

if (isset($_POST["editar"])) {

    $id = $_POST["documento"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $cargo = $_POST["cargo"];

    $sql = "UPDATE usuarios SET nombre='$nombre', edad=$edad, cargo='$cargo' WHERE documento = $id";
    $resultado = $conexion->query($sql);

    if($resultado){
        header("Location: index.php");
    }


}
