<?php
    session_start();
    include('conexion.php');

    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rol = $_POST['rol'];

        if ($rol == 'medico') {
            if (isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['clave']) && isset($_POST['Rclave']) && isset($_POST['cedula'])) {
                $usuario = validar($_POST['usuario']);
                $nombre = validar($_POST['nombre']);
                $apellido = validar($_POST['apellido']);
                $clave = validar($_POST['clave']);
                $Rclave = validar($_POST['Rclave']);
                $cedula = validar($_POST['cedula']);

                if (empty($usuario) || empty($nombre) || empty($apellido) || empty($clave) || empty($Rclave) || empty($cedula)) {
                    header('location: Registrarse.php?error=Todos los campos son requeridos');
                    exit();
                } elseif ($clave !== $Rclave) {
                    header('location: Registrarse.php?error=Las contraseñas no coinciden');
                    exit();
                } else {
                    $Sql = "SELECT * FROM medicos WHERE usuario_medico = '$usuario' OR cedula = '$cedula'";
                    $query = $conexion->query($Sql);

                    if (mysqli_num_rows($query) > 0) {
                        header('location: Registrarse.php?error=El medico ya existe!');
                        exit();
                    } else {
                        $sql2 = "INSERT INTO medicos (nombre_medico, apellido_medico, usuario_medico, clave, cedula) VALUES ('$nombre','$apellido','$usuario','$clave', '$cedula')";
                        $query2 = $conexion->query($sql2);

                        if ($query2) {
                            header('location: Index.php?success=Usuario Creado Existosamente');
                            exit();
                        } else {
                            header('location: Registrarse.php?error=Ocurrio un error');
                            exit();
                        }
                    }
                }
            } else {
                header('location: Registrarse.php?error=Todos los campos son requeridos');
                exit();
            }
        } elseif ($rol == 'usuario') {
            if (isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['clave']) && isset($_POST['Rclave'])) {
                $usuario = validar($_POST['usuario']);
                $nombre = validar($_POST['nombre']);
                $apellido = validar($_POST['apellido']);
                $clave = validar($_POST['clave']);
                $Rclave = validar($_POST['Rclave']);

                if (empty($usuario) || empty($nombre) || empty($apellido) || empty($clave) || empty($Rclave)) {
                    header('location: Registrarse.php?error=Todos los campos son requeridos');
                    exit();
                } elseif ($clave !== $Rclave) {
                    header('location: Registrarse.php?error=Las contraseñas no coinciden');
                    exit();
                } else {
                    $Sql = "SELECT * FROM usuarios WHERE usuario_usuario = '$usuario'";
                    $query = $conexion->query($Sql);

                    if (mysqli_num_rows($query) > 0) {
                        header('location: Registrarse.php?error=El usuario ya existe!');
                        exit();
                    } else {
                        $sql2 = "INSERT INTO usuarios (nombre_usuario, apellido_usuario, usuario_usuario, clave) VALUES ('$nombre','$apellido','$usuario','$clave')";
                        $query2 = $conexion->query($sql2);

                        if ($query2) {
                            header('location: Index.php?success=Usuario Creado Existosamente');
                            exit();
                        } else {
                            header('location: Registrarse.php?error=Ocurrio un error');
                            exit();
                        }
                    }
                }
            } else {
                header('location: Registrarse.php?error=Todos los campos son requeridos');
                exit();
            }
        }
    }
?>
