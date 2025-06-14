<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <title>Servicios</title>
    <!-- Enlace a tu CSS principal servicios -->
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>\main.servicios.css"> 
    <!-- CONTAINER SERVICIOS -->
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <!-- Encabezado con imagen -->
        <div class="banner center">
            <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_laboratorio.jpeg" alt="laboratorio">
        </div>   
        <!-- Sección services -->
        <section class="sd-section">
            <h2>NUESTROS SERVICIOS</h2>
            <p>En GENATEB, ofrecemos una amplia gama de servicios especializados en los sectores ambiental, de construcción, social y de higiene y seguridad ocupacional. Nuestro compromiso es brindar soluciones integrales y sostenibles que se adapten a las necesidades específicas de cada cliente.</p>
            <a href="https://wa.link/drs6v5" class="green-button">cotiza aqui</a>
        </section>
        <section class="container-servicios center-r">
            <div class="services">
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="Ocupacional">
                    <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                    <a href="..\pages\monitoreo-ocupacional.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="Ambiental">
                    <p class="texto-sobre-imagen">Monitero de agentes<br>ambientales</p>
                    <a href="..\pages\monitoreo_ambiental.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="Elaboracion">
                    <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                    <a href="..\pages\elaboracion_instrumentos.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\imagen_permisologia_minera.png" alt="Minera">
                    <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                    <a href="..\pages\permisología-ambiental-minera.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                    <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                    <a href="..\pages\estudios_complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\imagen_seguridad_salud.png" alt="Capacitacion">
                    <p class="texto-sobre-imagen">Seguridad y salud<br> en el trabajo</p>
                    <a href="..\pages\sst.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="../recursos\Servicios_Imagenes\imagen_capacitaciones.png" alt="Capacitacion">
                    <p class="texto-sobre-imagen">Capacitaciones</p>
                    <a href="..\pages\capacitaciones.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>
