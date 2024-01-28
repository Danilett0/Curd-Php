<link rel="stylesheet" href="styles.css">
<?php

include_once "./db.php";

$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$cargo = $_POST["cargo"];

$sql = "INSERT INTO usuarios (documento, nombre,edad,cargo) VALUES ($documento, '$nombre', $edad, '$cargo')";

try {
    if ($conexion->query($sql)) {
        header("Location: index.php");
    }
} catch (\Throwable $th) {
    echo "<div class='Alert' >Ops! Algo salió mal: " . $th->getMessage() .
    " <br> <br><a class='Btn Error' href='index.php'>Volver a Inicio</a></div>";

}
