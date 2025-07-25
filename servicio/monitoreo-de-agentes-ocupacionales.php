<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/main.monitero-ocupacional.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <title>Monitoreo Ocupacional</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\Monitoreo_Ocupacional.png" alt="monitoreo ambiental">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div>
        <section class="monitoreos">
            <div class="font-inter">
                <div class="sd-section">
                    <h2 class="font-inter-tag">MONITOREO DE AGENTES<br class="salto-celular"> OCUPACIONALES</h2>
                    <p>Realizamos el monitoreo y evaluación, de aquellos factores/agentes de riesgo que pueden llegar a perjudicar la salud de los trabajadores.</p>
                    <a class="green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">COTIZA AQUI</a>
                </div>
                <div>
                    <div class="monitoreo-content mc-1 center-r">
                        <h3>AGENTES FÍSICOS</h3>
                        <ul>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-1.png" alt="ocupacional-1" class="botella">
                                <p>Sonometría</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-2.png" alt="ocupacional-2">
                                <p>Dosimetría</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-3.png" alt="ocupacional-3">
                                <p>Iluminación</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-4.png" alt="ocupacional-4">
                                <p>Vibración</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-5.png" alt="ocupacional-5">
                                <p>Estrés<br>térmico</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-6.png" alt="ocupacional-6">
                                <p>Radiaciones<br>utravioletas</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ocupacional-7.png" alt="ocupacional-7">
                                <p>Radiaciones no<br>ionizantes</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="monitoreo-content mc-2 center-r">
                        <h3>AGENTES QUÍMICOS</h3>
                        <ul>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Respirables.png" alt="respirables">
                                <p>Partículas<br>respirables</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Inhalables.png" alt="inhalables">
                                <p>Partículas<br>inhalables</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Metalicos.png" alt="metalicos">
                                <p>Humos<br>metálicos</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Organicos.png" alt="organicos">
                                <p>Compuestos<br>orgánicos<br>volátiles</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Gases.png" alt="gases">
                                <p>Gases y vapores<br>orgánicos e<br>inorgánicos</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="monitoreo-content mc-3 center-r">
                        <h3>AGENTES BIOLÓGICOS</h3>
                        <ul>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Microorganismos.png" alt="microorganismos">
                                <p>Microorganismos en<br>superficies vivas e inertes</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Mohos.png" alt="Mohos.png">
                                <p>Mohos y<br>levaduras</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Agua.png" alt="Agua">
                                <p>Agua para<br>consumo</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="monitoreo-content mc-4 center-r">
                        <h3>AGENTES PSICOSOCIALES</h3>
                        <ul>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/COPSOg.png" alt="copsoq">
                                <p>Cuestionario<br>COPSOq-ISTAS 21</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/SUCESO.png" alt="suceso">
                                <p>Cuestionario<br>SUCESO-ISTAS 21</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/CENSOPAS.png" alt="censopas">
                                <p>Cuestionario<br><span>CENSOPAS</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="monitoreo-content mc-5 center-r">
                        <h3>FACTORES DE RIESGO DISERGONÓMICOS</h3>
                        <ul>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/OWAS.png" alt="owas">
                                <p>Metodología de análisis<br>OWAS</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ROSA.png" alt="rosa">
                                <p>Metodología de análisis<br>ROSA</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/REBA.png" alt="reba" class="reba">
                                <p>Metodología de análisis<br>REBA</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/RULA.png" alt="rula" class="rula">
                                <p>Metodología de análisis<br>RULA</p>
                            </li>
                            <li>
                                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/ISO.png" alt="iso">
                                <p>Metodología de análisis<br>ISO</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-servicios">
            <div class="center-r">
              <h2 class="texto-servicio" style="margin-bottom:40px;margin-top:-10px">OTROS SERVICIOS</h2>
                <div class="carrusel-wrapper">
                  <div class="services-car font-inter">
                     <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="ambiental">
                        <p class="texto-sobre-imagen">Monitoreo de<br>calidad ambiental</p>
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
                       <a href="<?php echo $_ENV["RESOURCES"]; ?>/estudios-complementarios.php" class="green-button boton-sobre-imagen">ver más</a>
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
