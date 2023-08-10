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
                <li><a href="#"><img src="img/Logo.png" alt="Home"></a></li>
                <li><a href="ListaPacientes.php">Lista de Pacientes</a></li>
                <li><a href="IngresaPaciente.php">Accede al historial del Paciente</a></li>
                <li><a href="#contacto">Soporte</a></li>
                <li><a href="CerrarSesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <div class="contenedor">
        <div class="contenido">

            <section id="inicio">
                <center><h1>¿Por qué Cur-A-iD?</h1></center>
                <p>
                Cur-A-iD beneficia a las personas al mejorar la calidad de la atención médica,
                garantizar la seguridad y confidencialidad de la información médica,
                proporcionar un acceso más fácil a los registros médicos, promover la
                coordinación y continuidad en la atención médica, y reducir los errores médicos.
                Estos beneficios contribuyen a una experiencia de atención médica más
                efectiva, segura y centrada en el paciente.
                </p>
            </section>

            
                <hr>
                <h1>Noticias Medicas</h1>
            
            <section>
                <h2>Conoce el nuevo medicamento para tratar la depresión posparto aprobado por la FDA</h2>
                <p>
                    La doctora Nirmaljit Dhami, Psiquiatra perinatal, El Camino Health nos comparte los avances de un nuevo medicamento contra la depresión Posparto
                    
                </p>
                <img src="img/medicament-que-es.jpg" alt="">
                <a href="https://cnnespanol.cnn.com/video/depresion-postparto-pastilla-fda-eeuu-vls/">Para saber más ingresa aquí...</a>
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
                <li><a href="#inicio">Agendar Cita</a></li>
                <li><a href="#inicio">Citas Pendientes</a></li>
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