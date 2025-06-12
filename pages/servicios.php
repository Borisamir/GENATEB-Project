<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="/GENATE_WEB/styles\main.css">
    <title>Nuestros Servicios - GENATEB</title>

    <!-- Enlace a tu CSS principal servicios -->
    <link rel="stylesheet" href="/GENATE_WEB/styles\servicios.css"> 
    <!-- CONTAINER SERVICIOS -->
    <link rel="stylesheet" href="/GENATE_WEB/styles/index_styles/main.index.section.css">
    <!-- Estilos globales -->
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
    <?php include_once "../header.php"; ?>
  <!-- Encabezado con imagen -->
  <div class="header">
    <div class="header-img">
      <img src="/GENATE_WEB/recursos\Body\imagen_laboratorio.jpeg" alt="Imagen de seguridad">
      <div class="degradado-verde"></div>
    </div>
  </div>
<!-- Sección services -->
    <section class="services-section">
        <h2>NUESTROS SERVICIOS</h2>
            <p>
                En GENATEB, ofrecemos una amplia gama de servicios especializados en los sectores ambiental, de construcción, social y de higiene y seguridad ocupacional. Nuestro compromiso es brindar soluciones integrales y sostenibles que se adapten a las necesidades específicas de cada cliente.
            </p>
        <a href="https://wa.me/TUNUMERO" class="contacto-btn">
            Contáctanos
        </a>
    </section>

    <section class="container-servicios center-r">
            <h2 class="texto-servicio">NUESTROS SERVICIOS</h2>
            <div class="services">
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="Ocupacional">
                    <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                    <a href="#" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="Ambiental">
                    <p class="texto-sobre-imagen">Monitero de agentes<br>ambientales</p>
                    <a href="#" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="Elaboracion">
                    <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                    <a href="#" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_permisologia_minera.png" alt="Minera">
                    <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                    <a href="#" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_seguridad_salud.png" alt="Seguridad">
                    <p class="texto-sobre-imagen">Seguridad y salud<br> en el trabajo</p>
                    <a href="#" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_capacitaciones.png" alt="Capacitacion">
                    <p class="texto-sobre-imagen">Capacitaciones</p>
                    <a href="#" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_capacitaciones.png" alt="Capacitacion">
                    <p class="texto-sobre-imagen">Capacitaciones</p>
                    <a href="pages\capacitaciones.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
            </div>
        </section>
    <?php include_once "../footer.php"; ?>
</body>
</html>
