<?php 

    include("conexion.php");
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

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
    echo "
        <html><body><script> Swal.fire({
  title: 'Registro exitoso',
  text: 'El paciente se ha registrado con éxito',
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

?>
