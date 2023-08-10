<?php include ("conexion.php");
// Inicia la sesión
session_start();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial Medico</title>

    <link rel="stylesheet" href="home.css">
    <script src="JS/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="homeUser.php"><img src="img/Logo.png" alt="Home"></a></li>
            </ul>
    </header>
    <div class="button-container">
        <a href="homeUser.php"><button class="custom-button"> Ir al inicio </button></a>
    </div>
    <div class="col md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tratamiento</th>
                    <th>Fecha</th>
                    <th>Medicamentos</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Archivos</th>
                </tr>
            </thead>
        
        <tbody>
        
        <?php
        $usuario_sesion = $_SESSION['usuario'];
        $query = "SELECT id_registro, fecha, medicamento, nombre_medico, apellido_medico, r.tratamiento, usuario_usuario
                  FROM usuarios AS u
                  INNER JOIN registros AS r ON u.usuario_usuario = r.paciente
                  INNER JOIN medicos AS m ON m.cedula = r.medico
                  WHERE u.usuario_usuario = '" . $usuario_sesion . "'";
        
        $result = mysqli_query($conexion, $query);
        
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['tratamiento']; ?></td>
                <td><?php echo $row['fecha']; ?></td>
                <td><?php echo $row['medicamento']; ?></td>
                <td><?php echo $row['nombre_medico']; ?></td>
                <td><?php echo $row['apellido_medico']; ?></td>
                <td>Ingresa aqui tu Archivo </td>
            </tr>
        <?php
        }
        ?>
        
        </tbody>
        </table>
    </div>

    
</body>
</html>