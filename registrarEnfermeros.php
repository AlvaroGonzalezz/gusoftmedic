<?php 

    include("conexion.php");
    $cedulaProfesional = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apPaterno'];
    $apellidoMaterno = $_POST['apMaterno'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $especialidad = $_POST['especialidad'];

    $sql = "INSERT INTO enfermeros (cedulaProfesional, nombre, apellidoPaterno, apellidoMaterno, email, telefono, especialidad) 
            VALUES ('$cedulaProfesional', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$email', '$telefono', '$especialidad')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso');</script>";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

?>
