<?php
    include ("conexion.php");

    include ("conexion.php");

    if(isset($_GET['usuario_usuario'])) {
        $usuario = $_GET['usuario_usuario'];
        $query = "SELECT * FROM registros WHERE paciente = '$usuario'";
        $result = mysqli_query($conexion, $query);

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $date = $row["fecha"];
            $med = $row["medicamento"];
            $trat = $row['tratamiento'];
        } else {
            mysqli_close($conexion); // Cerrar la conexión en caso de error
            echo "Usuario no encontrado.";
            exit();
        }
    } else {
        echo "Parámetro 'usuario_usuario' no encontrado en la URL.";
        exit();
    }

    if (isset($_POST['update'])) {
        $newDate = $_POST['date'];
        $newMed = $_POST['medicamento'];
        $newTrat = $_POST['tratamiento'];

        $updateQuery = "UPDATE registros SET fecha = '$newDate', medicamento = '$newMed', tratamiento = '$newTrat' WHERE paciente = '$usuario'";
        mysqli_query($conexion, $updateQuery);

        mysqli_close($conexion); // Cerrar la conexión después de todas las operaciones

        header('Location: ListaPacientes.php');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card car-body">
                    <form action="editUserList.php?usuario_usuario=<?php echo $usuario; ?>" method="POST">
                        <div class="form-group">
                            <label for="date">Fecha:</label>
                            <input type="date" name="date" value="<?php echo $date; ?>" class="form-control" placeholder="AAAA-MM-DD">
                        </div>
                        <div class="form-group">
                            <label for="medicamento">Medicamento:</label>
                            <input type="text" name="medicamento" value="<?php echo $med; ?>" class="form-control" placeholder="Medicamento">
                        </div>
                        <div class="form-group">
                            <label for="tratamiento">Tratamiento:</label>
                            <input type="text" name="tratamiento" value="<?php echo $trat; ?>" class="form-control" placeholder="Tratamiento">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="update">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    

   

