<?php 

    include("conexion.php");
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

    $id_paciente = $_POST['id-paciente'];
    $id_enfermero = $_POST['id-enfermero'];
    $motivo = $_POST['motivo'];
    $presion_arterial = $_POST['presion-arterial'];
    $frecuencia_cardiaca = $_POST['frecuencia-cardiaca'];


    $sql = "INSERT INTO visitas (id_paciente, id_enfermero, motivo_visita, presion_arterial, frecuencia_cardiaca) 
            VALUES ( '$id_paciente', '$id_enfermero', '$motivo', '$presion_arterial', '$frecuencia_cardiaca')";

if ($conexion->query($sql) === TRUE) {
    echo "
        <html><body><script> Swal.fire({
  title: 'Registro exitoso',
  text: 'La visita se ha registrado con éxito',
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
