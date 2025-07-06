<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "global.php"; ?>
    <title>Servicios</title>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
</head>
<body>
    <?php include_once "header.php"; ?>
    <main style="background-color: #ffffff;">
        <!-- Encabezado con imagen -->
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_laboratorio.png" alt="laboratorio">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div> 
        <!-- Sección services -->
        <section class="container-servicios">
            <div class="center-r">
                <div class="sd-section">
                    <h2 class="font-inter-tag">NUESTROS SERVICIOS</h2>
                    <p>En GENATEB, ofrecemos una amplia gama de servicios especializados en los sectores ambiental, de construcción, social y de higiene y seguridad ocupacional. Nuestro compromiso es brindar soluciones integrales y sostenibles que se adapten a las necesidades específicas de cada cliente.</p>
                    <a class="green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">COTIZA AQUI</a>
                </div>
                <div class="services font-inter">
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="ocupacional">
                        <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-agentes-ocupacionales.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="ambiental">
                        <p class="texto-sobre-imagen">Monitoreo de<br>calidad ambiental</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-calidad-ambiental.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="elaboracion">
                        <p class="texto-sobre-imagen">Elaboración de instrumentos<br>de gestión ambiental</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/elaboracion-de-instrumentos-de-gestion-ambiental.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                        <p class="texto-sobre-imagen">Permisología ambiental<br>minera</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/permisologia-ambiental-minera.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_seguridad_salud.png" alt="seguridad">
                        <p class="texto-sobre-imagen">Seguridad y salud<br> en el trabajo</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/seguridad-y-salud-en-el-trabajo.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_capacitaciones.png" alt="capacitacion">
                        <p class="texto-sobre-imagen">Capacitaciones</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/capacitaciones.php">VER MÁS</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "footer.php"; ?>
</body>
</html>
