<?php
    include("conexion.php");

    if (isset($_GET['id_registro'])) {
        $id = $_GET['id_registro'];
        
        // Consulta para eliminar el registro correspondiente
        $deleteQuery = "DELETE FROM registros WHERE id_registro = '$id'";
        mysqli_query($conexion, $deleteQuery);
        
        // Cierra la conexión a la base de datos
        mysqli_close($conexion);
        
        // Redirige de nuevo a ListaPacientes.php
        header("Location: ListaPacientes.php");
        exit();
    } else {
        echo "ID de registro no proporcionado.";
        exit();
    }
?>
