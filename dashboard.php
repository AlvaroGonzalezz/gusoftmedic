<?php
include('conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/imgs/icon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Gusoft Medic</title>
</head>

<body>
    <header>
        <img src="imgs/logo.png" alt="Logo">
        <a href="index.html">Inicio</a>
        <a href="index.html#info">¿Qué es?</a>
        <a href="https://www.gusoft.com.mx">Conócenos</a>

    </header>
    <div class="text">
        <h1>DASHBOARD</h1>
    </div>
    <div class="dashboard">
        <div class="item">
            <img src="imgs/registros.png" alt="Registros">
            <h3><a href="#registros">Registros</a></h3>
        </div>
        <div class="item">
            <img src="imgs/pacientes.png" alt="Pacientes">
            <h3><a href="#enfermeros">Enfermeros y Pacientes</a></h3>
        </div>
        <div class="item">
            <img src="imgs/citas.png" alt="Citas">
            <h3><a href="#visitas">Historiales y Visitas</a></h3>
        </div>
    </div>
    <div class="registros" id="registros">
        <div class="container">
            <div class="left">
                <form class="form" action="registrarEnfermeros.php" method="post">
                    <h3>Registro - Enfermero</h3>
                    <div class="input-block">
                        <input class="input" type="text" name="nombre" name="nombre" required="">
                        <label for="email">Nombre</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="apPaterno" required="">
                        <label for="email">Apellido paterno</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="apMaterno" required="">
                        <label for="email">Apellido materno</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="email" name="email" required="">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="telefono" required="">
                        <label for="email">Teléfono</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="especialidad" required="">
                        <label for="email">Especialidad</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="cedula" required="">
                        <label for="email">Cedula profesional</label>
                    </div>

                    <div class="input-block">
                        <button>Registrar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="left">
                <form class="form" action="registrarPacientes.php" method="post">
                    <h3>Registro - Paciente</h3>
                    <div class="input-block">
                        <input class="input" type="text" name="nombre" required="">
                        <label for="email">Nombre</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="apPaterno" required="">
                        <label for="email">Apellido paterno</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="apMaterno" required="">
                        <label for="email">Apellido materno</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="date" name="fecha" required="" style="color: gray;">
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="genero" required="">
                        <label for="email">Género</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="direccion" required="">
                        <label for="email">Dirección</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="telefono" required="">
                        <label for="email">Télefono</label>
                    </div>

                    <div class="input-block">
                        <button>Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="registros" id="registros">
        <div class="container">
            <div class="left">
                <form class="form" action="registrarHistorial.php" method="post">
                    <h3>Registro - Historial Médico</h3>
                    <div class="input-block">
                        <input class="input" type="text" name="idpaciente" required="">
                        <label for="email">ID Paciente</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="padecimiento" required="">
                        <label for="email">Padecimiento (s)</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="tipo-sangre" required="">
                        <label for="email">Tipo de sangre</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="alergias" required="">
                        <label for="email">Alergias</label>
                    </div>
                    <div class="input-block">
                        <button>Registrar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="left">
                <form class="form" action="registrarVisita.php" method="post">
                    <h3>Registro - Visita</h3>
                    <div class="input-block">
                        <input class="input" type="text" name="id-paciente" required="">
                        <label for="email">ID Paciente</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="id-enfermero" required="">
                        <label for="email">Enfermero ID</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="motivo" required="">
                        <label for="email">Motivo</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="presion-arterial" required="">
                        <label for="email">Presión Arterial</label>
                    </div>
                    <div class="input-block">
                        <input class="input" type="text" name="frecuencia-cardiaca" required="">
                        <label for="email">Frecuencia Cardiaca</label>
                    </div>
                    <div class="input-block">
                        <button>Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="views">
        <h2 id="enfermeros">Enfermeros</h2>
        <?php
        $sql = "SELECT * FROM enfermeros";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            echo '
            <table border="1">
                <thead>
                    <tr>
                        <th>Enfermero ID</th>
                        <th>Cédula Profesional</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Especialidad</th>
                    </tr>
                </thead>
                <tbody>';

            // Mostrar los datos de cada enfermero
            while ($row = $resultado->fetch_assoc()) {
                echo '
                <tr>
                    <td>' . $row['enfermero_id'] . '</td>
                    <td>' . $row['cedulaProfesional'] . '</td>
                    <td>' . $row['nombre'] . '</td>
                    <td>' . $row['apellidoPaterno'] . '</td>
                    <td>' . $row['apellidoMaterno'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['telefono'] . '</td>
                    <td>' . $row['especialidad'] . '</td>
                </tr>';
            }

            echo '
                </tbody>
            </table>';
        } else {
            echo "No se encontraron registros.";
        }
        ?>

        <h2>Pacientes</h2>
        <?php
        $sql = "SELECT * FROM pacientes";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            echo '
            <table border="1">
                <thead>
                    <tr>
                        <th>Paciente ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Género</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>';

            // Mostrar los datos de cada enfermero
            while ($row = $resultado->fetch_assoc()) {
                echo '
                <tr>
                    <td>' . $row['paciente_id'] . '</td>
                    <td>' . $row['nombre'] . '</td>
                    <td>' . $row['apellidoPaterno'] . '</td>
                    <td>' . $row['apellidoMaterno'] . '</td>
                    <td>' . $row['fecha_nacimiento'] . '</td>
                    <td>' . $row['sexo'] . '</td>
                    <td>' . $row['direccion'] . '</td>
                    <td>' . $row['telefono'] . '</td>
                </tr>';
            }

            echo '
                </tbody>
            </table>';
        } else {
            echo "No se encontraron registros.";
        }
        ?>

        <h2 id="historial">Historiales médicos</h2>
        <?php
        $sql = "
        SELECT 
           h.*, p.nombre AS nombre_paciente, p.apellidoPaterno AS apellido_paterno_paciente, 
            p.apellidoMaterno AS apellido_materno_paciente, p.paciente_id as paciente_id
               FROM historial h
                INNER JOIN pacientes p ON h.id_paciente = p.paciente_id
        ";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            echo '
            <table border="1">
                <thead>
                    <tr>
                        <th>ID Historial</th>
                        <th>ID Paciente</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Padecimiento</th>
                        <th>Tipo de Sangre</th>
                        <th>Alergías</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>';

            // Mostrar los datos de cada enfermero
            while ($row = $resultado->fetch_assoc()) {
                echo '
                <tr>
                    <td>' . $row['historial_id'] . '</td>
                    <td>' . $row['paciente_id'] . '</td>
                    <td>' . $row['nombre_paciente'] . '</td>
                    <td>' . $row['apellido_paterno_paciente'] . '</td>
                    <td>' . $row['apellido_materno_paciente'] . '</td>
                    <td>' . $row['padecimiento'] . '</td>
                    <td>' . $row['tipoSangre'] . '</td>
                    <td>' . $row['alergias'] . '</td>
                    <td>' . $row['fecha_registro'] . '</td>
                </tr>';
            }

            echo '
                </tbody>
            </table>';
        } else {
            echo "No se encontraron registros.";
        }
        ?>

        <h2 id="visitas">Visitas</h2>
        <?php
        $sql = "
        SELECT 
            v.visita_id, 
            v.id_paciente, 
            CONCAT(p.nombre, ' ', p.apellidoPaterno, ' ', p.apellidoMaterno) AS nombre_completo_paciente,
            v.id_enfermero, 
            CONCAT(e.nombre, ' ', e.apellidoPaterno, ' ', e.apellidoMaterno) AS nombre_completo_enfermero,
            v.motivo_visita, 
            v.presion_arterial, 
            v.frecuencia_cardiaca, 
            v.fecha_visita
        FROM visitas v
        INNER JOIN pacientes p ON v.id_paciente = p.paciente_id
        INNER JOIN enfermeros e ON v.id_enfermero = e.enfermero_id
    ";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            echo '
            <table border="1">
                <thead>
                    <tr>
                        <th>ID Visita</th>
                        <th>ID Paciente</th>
                        <th>Nombre del Paciente</th>
                        <th>ID Enfermero</th>
                        <th>Nombre del Enfermero</th>
                        <th>Motivo</th>
                        <th>Presión arterial</th>
                        <th>Frecuencia cardiaca</th>
                        <th>Fecha de la Visita</th>
                    </tr>
                </thead>
                <tbody>';

            // Mostrar los datos de cada enfermero
            while ($row = $resultado->fetch_assoc()) {
                echo '
                <tr>
            <td>' . $row['visita_id'] . '</td>
            <td>' . $row['id_paciente'] . '</td>
            <td>' . $row['nombre_completo_paciente'] . '</td>
            <td>' . $row['id_enfermero'] . '</td>
            <td>' . $row['nombre_completo_enfermero'] . '</td>
            <td>' . $row['motivo_visita'] . '</td>
            <td>' . $row['presion_arterial'] . '</td>
            <td>' . $row['frecuencia_cardiaca'] . '</td>
            <td>' . $row['fecha_visita'] . '</td>
                </tr>';
            }

            echo '
                </tbody>
            </table>';
        } else {
            echo "No se encontraron registros.";
        }
        ?>

    </div>
</body>

</html>