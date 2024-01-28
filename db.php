<?php 

$Servidor = "localhost";
$userName = "root";
$password = "";
$baseDatos = "prueba";


$conexion = new mysqli($Servidor, $userName, $password, $baseDatos);

if($conexion -> connect_error){
    echo "Error al conectarse!";
}