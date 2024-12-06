<?php 

    include("conexion.php");

    $idpaciente = $_POST['idpaciente'];
    $padecimiento = $_POST['padecimiento'];
    $tiposangre = $_POST['tipo-sangre'];
    $alergias = $_POST['alergias'];
    


    $sql = "INSERT INTO historial (id_paciente, padecimiento, tipoSangre, alergias) 
            VALUES ( '$idpaciente', '$padecimiento', '$tiposangre', '$alergias')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso');</script>";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

?>
