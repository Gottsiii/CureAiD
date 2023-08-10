<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login</title>
</head>
<body>
    <div class="medical-form-container">
        <div class="logo-container">
            <img src="img/Logo_Cur-A-id.png" alt="Logo" class="logo"/>
        </div>
        <form action="InicioSesionMed.php" method="post" class="medical-form">
            <h2>Paciente, Ingresa tu Usuario y contraseña</h2>
            <p>El medico podra ingresar datos a tu historial</p>
             <hr>
            
            <?php
                if (isset($_GET['error']))
                { ?>
                    <p class="error">
                    <?php
                    echo $_GET['error']
                    ?>
                    </p>
                    
            <?php
                }
            ?>
            
            <hr>
            <i class="fa-solid fa-user"></i>
            <label for="">Usuario</label>
            <input type="text" name="Usuario" placeholder="Nombre de Usuario">
            <br><br>
            <i class="fa-solid fa-unlock"></i>
            <label for="">Contraseña</label>
            <input type="password" name="Clave" placeholder="Clave">
            
            <button type="submit"> Iniciar Sesion </button>
            
        </form>
    </div>
</body>

</html>