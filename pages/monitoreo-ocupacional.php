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
            <div class="sd font-inter">
                <div class="sd-section">
                    <h2 class="font-inter-tag">MONITOREO DE AGENTES OCUPACIONALES</h2>
                    <p>Realizamos el monitoreo y evaluación, de aquellos factores/agentes de riesgo que pueden llegar a perjudicar la salud de los trabajadores.</p>
                    <a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" class="green-button">COTIZA AQUI</a>
                </div>
                <div>
                    <div class="monitoreo-content mc-1 center-r">
                        <h3>AGENTES FÍSICOS</h3>
                        <ul>
                            <li>
                                <img src="../recursos/Body/ocupacional-1.png" alt="ocupacional-1">
                                <p>Sonometría</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ocupacional-2.png" alt="ocupacional-2">
                                <p>Dosimetría</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ocupacional-3.png" alt="ocupacional-3">
                                <p>Iluminación</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ocupacional-4.png" alt="ocupacional-4">
                                <p>Vibración</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ocupacional-5.png" alt="ocupacional-5">
                                <p>Estrés<br>térmico</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ocupacional-6.png" alt="ocupacional-6">
                                <p>Radiaciones<br>utravioletas</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ocupacional-7.png" alt="ocupacional-7">
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
                                <img src="../recursos/Body/Respirables.png" alt="respirables">
                                <p>Partículas<br>respirables</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/Inhalables.png" alt="inhalables">
                                <p>Partículas<br>inhalables</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/Metalicos.png" alt="metalicos">
                                <p>Humos<br>metálicos</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/Organicos.png" alt="organicos">
                                <p>Compuestos<br>orgánicos<br>volátiles</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/Gases.png" alt="gases">
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
                                <img src="../recursos/Body/Microorganismos.png" alt="microorganismos">
                                <p>Microorganismos en<br>superficies vivas e inertes</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/Mohos.png" alt="Mohos.png">
                                <p>Mohos y<br>levaduras</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/Agua.png" alt="Agua">
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
                                <img src="../recursos/Body/COPSOg.png" alt="copsoq">
                                <p>Cuestionario<br>COPSOq-ISTAS 21</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/SUCESO.png" alt="suceso">
                                <p>Cuestionario<br>SUCESO-ISTAS 21</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/CENSOPAS.png" alt="censopas">
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
                                <img src="../recursos/Body/OWAS.png" alt="owas">
                                <p>Metodología de análisis<br>OWAS</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ROSA.png" alt="rosa">
                                <p>Metodología de análisis<br>ROSA</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/REBA.png" alt="reba">
                                <p>Metodología de análisis<br>REBA</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/RULA.png" alt="rula">
                                <p>Metodología de análisis<br>RULA</p>
                            </li>
                            <li>
                                <img src="../recursos/Body/ISO.png" alt="iso">
                                <p>Metodología de análisis<br>ISO</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-servicios">
            <div class="center-r">
                <h2 class="texto-servicio">OTROS SERVICIOS</h2>
                <div class="services font-inter">
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="ambiental">
                        <p class="texto-sobre-imagen">Monitero de agentes<br>ambientales</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["PAGES"]; ?>/monitoreo_ambiental.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="elaboracion">
                        <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["PAGES"]; ?>/elaboracion_instrumentos.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_permisologia_minera.png" alt="minera">
                        <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["PAGES"]; ?>/permisología-ambiental-minera.php">VER MÁS</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>
