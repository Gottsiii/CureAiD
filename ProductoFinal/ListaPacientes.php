<?php
// Incluye el archivo de conexión a la base de datos
include("conexion.php");

// Inicia la sesión
session_start();

// Depura y muestra el contenido de la sesión para verificar
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>

    <!-- Enlaces a tus archivos de estilo y scripts -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="homeMed.php"><img src="img/Logo.png" alt="Home"></a></li>
            </ul>
        </nav>
    </header>
    
    <div class="button-container">
        <a href="homeMed.php"><button class="custom-button"> Ir al inicio </button></a>
    </div>

    <div class="col md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Medicamentos Recetados</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tratamiento</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Verifica si 'cedula' está en la sesión antes de usarlo
                if(isset($_SESSION['cedula'])) {
                    $medico_cedula = $_SESSION['cedula'];
                    
                    // Consulta para obtener los registros de pacientes relacionados con el médico
                    $query = "SELECT id_registro, fecha, medicamento, nombre_usuario, apellido_usuario, r.tratamiento, usuario_usuario
                    FROM usuarios AS u
                    INNER JOIN registros AS r ON u.usuario_usuario = r.paciente
                    INNER JOIN medicos AS m ON m.cedula = r.medico
                    WHERE r.medico = '" . $medico_cedula . "'";
    
                    $result = mysqli_query($conexion, $query);
                    
                    // Recorre los resultados y muestra los datos en la tabla
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['medicamento']; ?></td>
                            <td><?php echo $row['nombre_usuario']; ?></td>
                            <td><?php echo $row['apellido_usuario']; ?></td>
                            <td><?php echo $row['tratamiento']; ?></td>
                            <td><?php echo $row['usuario_usuario']; ?></td> 
                            <td>
                                <a href="editUserList.php?usuario_usuario=<?php echo $row['usuario_usuario'] ?>"><button>Modificar</button></a>
                                <a href="deleteUserList.php?id_registro=<?php echo $row['id_registro']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')"><button>Eliminar</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    // Manejar el caso en que 'cedula' no está en la sesión
                    echo "La cédula del médico no está disponible en la sesión.";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
