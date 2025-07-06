<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/h-f.css">
    <title>Seguridad y salud en el trabajo</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Imagenes_Seguridad_Salud\Banner_Seguridad.png">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto" style="text-align:center">
                <h2>SEGURIDAD Y SALUD EN <br class="salto-celular"> EL TRABAJO</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <p>Ejecutamos una supervisión eficiente<br class="salto-celular">cumpliendo con<br class="salto-celular-net">los requisitos legales en los<br clas="salto-celular">sectores de: construcción,<br class="salto-celular">minería e industria.</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-boton">
                <a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" class="boton-verde" target="_blank">
                    COTIZA AQUI
                </a>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto-aire">
                <h2>NUESTROS SERVICIOS INCLUYEN</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 400px;">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Archivo.png" style="width: 158px;height: 151px;">
                <p>Elaboración y actualización<br>de documentación</p>
            </div>
            <div class="imagen-texto" style="width: 400px;">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Cronometro.png" style="width: 159px;height: 159px;" >
                <p>Seguimiento y<br>mantenimiento de SGSST</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto" style="border-bottom:3px #083D29 dotted">
            <div class="imagen-texto" style="width: 400px;">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Pregunta.png" style="width: 168px;height: 151px;">
                <p>Asesoría<br>personalizada</p>
            </div>
            <div class="imagen-texto" style="width: 400px;">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Checks.png" style="width: 174px;height: 151px;" >
                <p>Supervision<br>SSOMA en campo</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto-aire" style="margin-left:-180px">
                <h2>LE OFRECEMOS</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto ancho-300">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Mas.png" style="width: 129px;height: 144px;">
                <p>Valores agregados<br>incorporados</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Flecha_arriba.png" style="width: 145px;height: 145px;" >
                <p>Personal experto<br>y capacitado</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Lapiz.png" style="width: 124px;height: 137px;margin-top:-10px;" >
                <p>Verificación y<br>capacitación de<br>estándares del cliente</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Escudo.png" style="width: 112px;height: 130px;">
                <p>Mantenimiento y<br>actualización de la<br>documentación SSOMA</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Calendario.png" style="width: 152px;height: 153px;" >
                <p>Reportes semanales<br>y/o mensuales</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Seguridad_Salud\Audit.png" style="width: 139px;height: 144px;" >
                <p>Auditorias y/o<br>homologaciones<br>vigentes</p>
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
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                         <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/permisologia-ambiental-minera.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>/\estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
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
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                         <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/permisologia-ambiental-minera.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>/\estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
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