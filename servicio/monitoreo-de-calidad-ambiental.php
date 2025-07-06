<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/h-f.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Monitoreo Ambiental</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Imagenes_Monitoreo_Ambiental\Banner_Monitoreo.png" alt="monitoreo ambiental">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto" style="text-align:center">
                <h2>MONITOREO DE CALIDAD<br class="salto-celular"> AMBIENTAL</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <p>Realizaremos monitoreos especializados para evaluar la calidad del aire, agua,<br class="salto-celular-net">suelo y ruido ambiental, asegurando el cumplimiento de<br class="salto-celular-net"> la normativa vigente y la protección del entorno.</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-boton">
                <a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank" rel="noopener noreferrer" class="boton-verde">
                    COTIZA AQUI
                </a>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto-aire">
                <h2>MONITOREO DE CALIDAD DE AIRE</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto" style="border-bottom:3px #083D29 dotted">
            <div class="imagen-texto ancho-400">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Aire/Flecha_Arriba.png" style="width: 116px;height: 116px;">
                <p>Material particulado,<br>gases y de condiciones<br>meteorológicas</p>
            </div>
            <div class="imagen-texto ancho-400">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Aire/Hombre.png" style="width: 116px;height: 116px;" >
                <p>Medición y/o<br>modelamiento de niveles<br>de ruido ambiental</p>
            </div>
            <div class="imagen-texto ancho-400" >
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Aire/Fabrica.png" style="width: 116px;height: 116px;">
                <p>Análisis de emisiones<br>de fuentes fijas y<br>móviles</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto-aire">
                <h2>MONITOREO DE CALIDAD DE SUELO</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto" style="border-bottom:3px #083D29 dotted">
            <div class="imagen-texto ancho-500">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Suelo/Ph.png" style="width: 116px;height: 116px;">
                <p>Análisis de parámetros físicos,<br>químicos, orgánicos e<br>inorgánicos</p>
            </div>
            <div class="imagen-texto ancho-500">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Suelo/Planta_wifi.png" style="width: 116px;height: 116px;">
                <p>Análisis de sedimientos, suelo<br>agrícola, residencial/parques y suelo<br>comercial/ industrial/extrativo</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto-aire">
                <h2>MONITOREO BIOLÓGICO E HIDROBIOLÓGICO</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto-cap" style="border-bottom:3px #083D29 dotted">
            <div class="imagen-texto-cap ancho-400 rana">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Biologico/Rana.png" style="width: 125px;height: 74.34px;margin-top:25px">
                <p>Anfibios y<br>reptiles</p>
            </div>
            <div class="imagen-texto-cap ancho-400 ballena">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Biologico/Ballena.png" style="width: 103px;height: 103px;">
                <p>Mamiferos mayores<br>y menores</p>
            </div>
            <div class="imagen-texto-cap ancho-400 paloma ">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Biologico/Paloma.png" style="width: 100px;height: 88px;margin-top:15px">
                <p>Ornitofauna</p>
            </div>
            <div class="imagen-texto-cap ancho-400 flora">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Biologico/Planta.png">
                <p>Flora</p>
            </div>
            <div class="imagen-texto-cap ancho-400 fauna">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Biologico/Elefante.png" style="width: 109px;height: 109px;margin-top:15px;">
                <p>Fauna</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto-aire">
                <h2>MONITOREO DE CALIDAD DE AGUA</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto" style="border-bottom:3px #083D29 dotted">
            <div class="imagen-texto ancho-400">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Agua/Gota.png" style="width: 122px;height: 120px;margin-top:25px;">
                <p>Análisis de parámetros físicos,<br>químicos, orgánicos, inorgánicos,<br>microbiológicos, parasitolícos y organolépticos</p>
            </div>
            <div class="imagen-texto ancho-400">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Imagenes_Monitoreo_Ambiental/Monitoreo_Agua/Tubo.png" style="width: 125px;height: 123px;margin-top:25px">
                <p>Aguas superficiales,<br>subterránea, consumo<br>humano y efluentes.</p>
            </div>
        </div>
        <section class="container-servicios">
            <div class="center-r">
              <h2 class="texto-servicio" style="margin-bottom:40px;margin-top:-10px">OTROS SERVICIOS</h2>
                <div class="carrusel-wrapper">
                  <div class="services-car font-inter">
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="ocupacional">
                         <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-agentes-ocupacionales.php">VER MÁS</a>
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
                         <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/monitoreo-de-agentes-ocupacionales.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="elaboracion">
                         <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/elaboracion-de-instrumentos-de-gestion-ambiental.php">VER MÁS</a>
                     </div>
                     <div class="servicio-item">
                         <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                         <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                         <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["SERVICES"]; ?>/permisología-ambiental-minera.php">VER MÁS</a>
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
