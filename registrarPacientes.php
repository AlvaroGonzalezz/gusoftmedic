<?php 

    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apPaterno'];
    $apellidoMaterno = $_POST['apMaterno'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $sexo = $_POST['genero'];
    $direccion = $_POST['direccion'];


    $sql = "INSERT INTO pacientes (nombre, apellidoPaterno, apellidoMaterno, fecha_nacimiento, sexo, direccion, telefono) 
            VALUES ( '$nombre', '$apellidoPaterno', '$apellidoMaterno','$fecha', '$sexo', '$direccion', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso');</script>";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

?>
