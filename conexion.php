<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "comalaelonbd";


$conexion = new mysql($server, $user, $pass, $db) {
    die("Error de conexión: " . $conexion->connect_error)
} else {
    echo "conectado";
}

?>