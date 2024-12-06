<?php

include("conexion.php");
echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
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
    echo "
        <html><body><script> Swal.fire({
  title: 'Registro exitoso',
  text: 'El enfermero se ha registrado con éxito',
  icon: 'success'
}).then((result) => {
                if (result.isConfirmed) {
         window.location.href = 'dashboard.php'                                }
            }); </script></body></html>
        ";
} else {
    echo "

    <html><body><script> Swal.fire({
title: 'Error al registrar',
text: 'Error en el sistema, intentelo más tarde.',
icon: 'error'
}).then((result) => {
            if (result.isConfirmed) {
     window.location.href = 'dashboard.php'                                }
        }); </script></body></html>
    ";
}
