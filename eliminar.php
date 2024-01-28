<?php

include_once "./db.php";


if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM usuarios WHERE documento = $id ";
    echo $sql;
    $resultado = $conexion->query($sql);

    if($resultado){
     header("Location: index.php");
    }

}