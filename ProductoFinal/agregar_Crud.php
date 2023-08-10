<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="agregar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login</title>
</head>
<body>
    <div class="medical-form-container">
        <div class="logo-container">
            <img src="img/Logo_Cur-A-id.png" alt="Logo" class="logo"/>
        </div>
        <form action="agregar.php" method="post" class="medical-form">
            <h2>Nuevo Registro Medico</h2>
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
            <label for="">Fecha</label>
            <input type="date" name="fecha" placeholder="Ingresa fecha">
            
            <label for="">Tratamiento</label>
            <input type="text" name="tratamiento" placeholder="Tratamiento">

            <label for="">Padecimiento</label>
            <input type="text" name="motivo" placeholder="¿Por qué acudió el paciente?">

            <label for="">Medicamento</label>
            <input type="text" name="medicamento" placeholder="Medicamento recetado">
            
            <label for="archivo_pdf">Archivo Relacionado:</label>
            <input type="file" name="archivo_pdf" accept=".pdf">
            <br>
            <br>

            
            <button type="submit"> Enviar </button>
        </form>
    </div>
</body>

</html> 