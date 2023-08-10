<?php
session_start();
include('conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header("Location: index.php?error=El Usuario es Requerido");
        exit();
    } else if (empty($Clave)) {
        header("Location: index.php?error=La contraseña es Requerida");
        exit();
    } else {
        //$Clave = md5($Clave);

        $sqlUsuario = "SELECT * FROM usuarios WHERE usuario_usuario = '$Usuario' AND clave = '$Clave'";
        $resultUsuario = mysqli_query($conexion, $sqlUsuario);

        $sqlMedico = "SELECT * FROM medicos WHERE usuario_medico = '$Usuario' AND clave = '$Clave'";
        $resultMedico = mysqli_query($conexion, $sqlMedico);

        if (mysqli_num_rows($resultUsuario) === 1) {
            $row = mysqli_fetch_assoc($resultUsuario);
            $_SESSION['usuario'] = $row['usuario_usuario'];
            $_SESSION['nombre'] = $row['nombre_usuario'];
            header("Location: homeUser.php");
            exit();
        } elseif (mysqli_num_rows($resultMedico) === 1) {
            $row = mysqli_fetch_assoc($resultMedico);
            $_SESSION['usuario'] = $row['usuario_medico'];
            $_SESSION['nombre'] = $row['nombre_medico'];
            $_SESSION['cedula'] = $row['cedula']; // Asegúrate de que cedula se establezca correctamente
            header("Location: homeMed.php");
            exit();            
        } else {
            header("Location: index.php?error=El Usuario o contraseña son incorrectos");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
