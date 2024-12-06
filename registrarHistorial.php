<?php 

    include("conexion.php");
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

    $idpaciente = $_POST['idpaciente'];
    $padecimiento = $_POST['padecimiento'];
    $tiposangre = $_POST['tipo-sangre'];
    $alergias = $_POST['alergias'];
    


    $sql = "INSERT INTO historial (id_paciente, padecimiento, tipoSangre, alergias) 
            VALUES ( '$idpaciente', '$padecimiento', '$tiposangre', '$alergias')";

if ($conexion->query($sql) === TRUE) {
    echo "
        <html><body><script> Swal.fire({
  title: 'Registro exitoso',
  text: 'El historial del paciente se ha registrado con éxito',
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
