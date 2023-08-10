<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="home.css">
    <script src="JS/bootstrap.min.js"></script>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#Cur-A-iD"><img src="img/Logo.png" alt="Home"></a></li>
                <li><a href="historialUser1.php">Acceso a Historial Medico</a></li>
                <li><a href="#contacto">Soporte</a></li>
                <li><a href="CerrarSesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <div class="contenedor">
        <div class="contenido">

            <section id="inicio">
                <center><h1>Cur-A-iD</h1></center>
                <p>
                    La iniciativa de Cur-A-iD nace de la problematica que se enfrentan pacientes con enfermedades en donde los profesionales en la salud necesitan tener conocimiento del tratamiento y los procesos medicos que ha llevado a cabo el paciente
                </p>
            </section>

            
                <hr>
                <h1>Sugerencias Medicas</h1>
            
            <section>
                <h2>12 Consejos para tu salud</h2>
                <p>
                    Un cambio de hábitos, pequeñas decisiones del día a día, ideas y actos sencillos que mejorarán tu salud.
                    <br>
                    En la Voz de la Salud vamos a ponértelo fácil, porque ya hay demasiadas cuestas arriba. Si sigues estas recomendaciones, garantizado, tu salud mejorará y tu cuerpo y tu mente nos lo agradecerán.
                    
                </p>
                <img src="img/contenido-salud.png" alt="">
                <a href="https://www.lavozdegalicia.es/noticia/lavozdelasalud/vida-saludable/2022/12/31/12-meses-12-consejos-vivir-mejor-2023/00031672479591613465938.htm">Para saber más ingresa aquí...</a>
            </section>

            <section>
                <h2>Actualizaciones sobre Covid-19</h2>
                <p>
                    En este sitio web se compartimos información y orientaciones de la OMS acerca del actual brote de enfermedad por coronavirus (COVID-19) que fue notificado por primera vez en Wuhan (China) el 31 de diciembre de 2019. En esta página figura información actualizada diariamente.
                    <br><br>
                    La OMS está colaborando estrechamente con expertos mundiales, gobiernos y asociados para ampliar rápidamente los conocimientos científicos sobre este nuevo virus, rastrear su propagación y virulencia y asesorar a los países y las personas sobre la medidas para proteger la salud y prevenir la propagación del brote.

                </p>
                <img src="img/contenido-salud-2.jpg" alt="">
                <br><br>
                <a href="https://www.paho.org/es/temas/coronavirus/brote-enfermedad-por-coronavirus-covid-19">Para saber más aquí...</a>
            </section>

        </div>
        
        <aside>
            <h2>Otras opciones...</h2>
            <ul>
                <li><a href="#inicio">Citas Proximas</a></li>
                <li><a href="#inicio">Historial de Citas</a></li>
            </ul>
        </aside>
    </div>
    
    <footer>

        <div  id="contacto" class="contacto">
            <h2>Sugerencias, quejas y contacto</h2>
            <ul>
                <li>Telefono: 01 800 117 167 98</li>
                <li>Email: utp0155269@alumno.utpuebla.edu.mx </li>
                <li>Direccion: Universidad Tecnológica de Puebla</li>
            </ul>
        </div>

        <div>
            <h2>Soporte<h2>
            
            <form>
                <p>¿Cómo calificas tu experiencia en nuestro sitio web?</p>
                <textarea name="comentarios" id="comments" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" value="Enviar">
                <br>
                <br>
            </form>
        </div>

    </footer>
    

</body>
</html>