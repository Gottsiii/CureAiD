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
        header("Location: InicioSesionMed.php?error=El Usuario es Requerido");
        exit();
    } else if (empty($Clave)) {
        header("Location: InicioSesionMed.php?error=La contraseña es Requerida");
        exit();
    } else {
        //$Clave = md5($Clave);

        $sqlUsuario = "SELECT * FROM usuarios WHERE usuario_usuario = '$Usuario' AND clave = '$Clave'";
        $resultUsuario = mysqli_query($conexion, $sqlUsuario);

        if (mysqli_num_rows($resultUsuario) === 1) {
            $row = mysqli_fetch_assoc($resultUsuario);
            $_SESSION['usuario'] = $row['usuario_usuario'];
            $_SESSION['nombre'] = $row['nombre_usuario'];
            header("Location: historialUser.php");
            exit();
        } else {
            header("Location: hitorialUser.php?error=El Usuario o contraseña son incorrectos");
            exit();
        }   
    }
} else {
    header("Location: InicioSesionMed.php");
    exit();
}
?>
