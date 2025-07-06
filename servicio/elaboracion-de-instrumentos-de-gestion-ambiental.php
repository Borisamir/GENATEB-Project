<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/h-f.css">
    <title>Elaboracion de instrumentos</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Imagenes_Elaboracion_Instrumentos\Banner_Elaboracion.png">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto" style="text-align:center">
                <h2>ELABORACIÓN DE<br class="salto-celular"> INSTRUMENTOS DE<br>GESTIÓN AMBIENTAL</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <p>Desarrollamos estudios y documentos técnicos requeridos por la<br> normativa ambiental peruana</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-boton">
                <a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" class="boton-verde" target="_blank">
                    COTIZA AQUI
                </a>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto paj" style="width: 300px;margin-top:55px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Elaboracion_Instrumentos\Eia.png" style="width: 187px;height: 100px;">
                <p>Estudios de Impacto<br>Ambiental<br>(EIA)</p>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Elaboracion_Instrumentos\Hoja_Estadistica.png" style="width: 109px;height: 109px;margin-left:-19px">
                <p>Evaluación Ambiental<br>Preliminar y Planes de<br>Manejo (EVAP Y PMA)</p>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Elaboracion_Instrumentos\Hoja_Planta.png" style="width: 116px;height: 115px;">
                <p>Declaración de Impacto<br>y Adecuación Ambiental<br>(DIA, DAA)</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Elaboracion_Instrumentos\Hoja_Logro.png" style="width: 118px;height: 118px;margin-right:-10px">
                <p>Instrumentos Técnicos<br>Sustentatorios<br>(ITS)</p>
            </div>
            <div class="imagen-texto fit" style="width: 300px;margin-top:50px">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Elaboracion_Instrumentos\Hoja_Mas.png" style="width: 93px;height: 118px;" >
                <p>Ficha Técnica<br>Sociambiental<br>(FITSA)</p>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px;">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Elaboracion_Instrumentos\Hoja_Check.png" style="width: 128px;height: 128px;margin-right:-10px">
                <p>Informe de gestión<br>ambiental<br>(IGA)</p>
            </div>
        </div>
         <section class="container-servicios">
            <div class="center-r">
              <h2 class="texto-servicio" style="margin-bottom:40px;margin-top:-10px">OTROS SERVICIOS</h2>
                <div class="carrusel-wrapper">
                  <div class="services-car font-inter">
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="ambinetal">
                         <p class="texto-sobre-imagen">Monitoreo de agentes<br>ocupacionales</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-agentes-ocupacionales.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="ambiental">
                        <p class="texto-sobre-imagen">Monitoreo de<br>calidad ambiental</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-calidad-ambiental.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                         <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/permisologia-ambiental-minera.php">VER MÁS</a>
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
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>/estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
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
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                         <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/permisologia-ambiental-minera.php">VER MÁS</a>
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
                       <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\Estudios_Complementarios.png" alt="Seguridad">
                       <p class="texto-sobre-imagen">Estudios<br>complementarios</p>
                       <a href="<?php echo $_ENV["SERVICES"]; ?>/estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
                     </div>
                   </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>