<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="singIn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registrate</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('input[type=radio][name=rol]').change(function() {
            if (this.value == 'medico') {
                $('#cedulaField').show();
            }
            else if (this.value == 'usuario') {
                $('#cedulaField').hide();
            }
        });
    });
    </script>
</head>
<body>
    <div class="main-container">
        <div class="image-container">
            <div class="overlay-image-container">
                <img src="img/Logo.png" alt="">
            </div>
            <img src="img/Registro.jpg" alt="">
        </div>
    
        <div class="medical-form-container">
            <h1><ins>Registrarse</ins></h1>
            <br>
            <form action="Registrarse.php" method="post">
                <?php
                    if (isset($_GET['error']))
                    {
                        echo '<p class="error">' . $_GET['error'] . '</p>';
                    }

                    if (isset($_GET['success']))
                    {
                        echo '<p class="success">' . $_GET['success'] . '</p>';
                    }
                ?>
                <br>
                <label for="">
                    <i class="fa-solid fa-user"></i>
                    Usuario
                </label>
                <input type="text" placeholder="Ingrese Usuario" name="usuario">

                <label for="">
                    <i class="fa-solid fa-users"></i>
                    Nombre
                </label>
                <input type="text" placeholder="Ingrese su Nombre" name="nombre">

                <label for="">
                    <i class="fa-solid fa-users"></i>
                    Apellido
                </label>
                <input type="text" placeholder="Ingrese su Apellido" name="apellido">

                <label for="">
                    <i class="fa-solid fa-key"></i>
                    Ingresa Contraseña
                </label>
                <input type="password" placeholder="Ingresa Contraseña" name="clave">
            
                <label for="">
                    <i class="fa-solid fa-key"></i>
                    Repetir Contraseña
                </label>
                <input type="password" placeholder="Repita Contraseña" name="Rclave">
            
                <label for="">
                    <i class="fa-solid fa-users"></i>
                    Rol
                </label><br>

                <div class="radio-group">
                    <input type="radio" id="usuario" name="rol" value="usuario">
                    <label for="usuario">Usuario</label>
                    <input type="radio" id="medico" name="rol" value="medico">
                    <label for="medico">Médico</label>
                </div>

                <div id="cedulaField" style="display: none;">
                <label for="">
                    <i class="fa-solid fa-id-card"></i>
                    Cédula
                </label>
                <input type="text" placeholder="Ingrese su Cédula" name="cedula">
                </div>
            
                <input type="submit" class="button" value="Registrarse">
                <a href="index.php" class="Boton_Ingresar"> Ingresar </a>
            </form>
        </div>
    </div>
</body>
</html>
