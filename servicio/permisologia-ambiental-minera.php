<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/h-f.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <title>Permisología ambiental minera</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Imagenes_Permisologia_Ambiental\Banner_Permisologia.png">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto">
                <h2>PERMISOLOGÍA <br class="salto-celular"> AMBIENTAL MINERA</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <p>Brindamos asesoría y gestion integral en la obtención de permisos,<br class="salto-celular-net"> licencias y autorizaciones ambientales requeridas para proyectos mineros.</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-boton">
                <a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" class="boton-verde" target="_blank">
                    COTIZA AQUI
                </a>
            </div>
        </div>
        <div class="contenedor-imagen-texto" >
            <div class="imagen-texto ancho-400 iac">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Permisologia_Ambiental\Estadistica.png" style="width: 163px;height: 130px;margin-bottom:20px;margin-right:-15px">
                <p>Inicio de actividades de<br>Exploración y Explotación</p>
            </div>
            <div class="imagen-texto" style="width:500px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Permisologia_Ambiental\Logro.png" style="width: 131px;height: 131px;margin-bottom:20px;margin-right:-15px">
                <p>Certificado de inexistencia de restos<br>arqueologicos, (CIRA)Diagnósticos<br>arqueológicos superficiales</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto ancho-400">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Permisologia_Ambiental\Sello.png" style="width: 142px;height: 142px;margin-bottom:20px;margin-right:-28px">
                <p>Autorizaciones de uso de aguas,<br>licencia de uso de agua,<br>autorizaciones de vertímiento</p>
            </div>
            <div class="imagen-texto ancho-500" style="margin-top:10px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Permisologia_Ambiental\Mina.png" style="width: 132px;height: 132px;margin-bottom:20px;margin-left:11px">
                <p>Conseciones de beneficio,<br>procesamiento y transporte de<br>mineral.</>
            </div>
        </div>
        <section class="container-servicios">
            <div class="center-r">
              <h2 class="texto-servicio" style="margin-bottom:40px;margin-top:-10px">OTROS SERVICIOS</h2>
                <div class="carrusel-wrapper">
                  <div class="services-car font-inter">
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="ocupacional">
                         <p class="texto-sobre-imagen">Monitoreo de agentes<br>ocupacionales</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-agentes-ocupacionales.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="ambiental">
                        <p class="texto-sobre-imagen">Monitoreo de<br>calidad ambiental</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-calidad-ambiental.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="elaboracion">
                         <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/elaboracion-de-instrumentos-de-gestion-ambiental.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>/estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
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
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="ocupacional">
                         <p class="texto-sobre-imagen">Monitoreo de agentes<br>ocupacionales</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-agentes-ocupacionales.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="ambiental">
                        <p class="texto-sobre-imagen">Monitoreo de<br>calidad ambiental</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-calidad-ambiental.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="elaboracion">
                         <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/elaboracion-de-instrumentos-de-gestion-ambiental.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>/estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
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
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>