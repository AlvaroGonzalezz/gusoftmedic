<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "gusoft_medic";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error al conectar: " . $conexion->connect_error);
}

// echo "Conexión exitosa.";



?>
