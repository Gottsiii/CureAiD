<?php
session_start();
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['fecha']) && isset($_POST['tratamiento']) && isset($_POST['motivo']) && isset($_POST['medicamento'])) {
        $fecha = $_POST['fecha'];
        $tratamiento = $_POST['tratamiento'];
        $motivo = $_POST['motivo'];
        $medicamento = $_POST['medicamento'];

        // Obtener valores de las sesiones
        $usuario = $_SESSION['usuario'];
        $cedula = $_SESSION['cedula'];

        // Insertar datos en la tabla 'registros'
        $insertQuery = "INSERT INTO registros (fecha, tratamiento, motivo, medicamento, paciente, medico) 
                        VALUES ('$fecha', '$tratamiento', '$motivo', '$medicamento', '$usuario', '$cedula')";

        if (mysqli_query($conexion, $insertQuery)) {
            header("Location: historialUser.php"); // Redireccionar a la página del historial
            exit();
        } else {
            header("Location: agregar.php?error=Error al agregar el registro");
            exit();
        }
    } else {
        header("Location: agregar.php?error=Todos los campos son requeridos");
        exit();
    }
} else {
    header("Location: agregar.php");
    exit();
}
?>
