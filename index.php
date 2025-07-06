<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocupacional</title>
    <?php include_once "global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index-rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.slider.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.slider-rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section-rs.css">
    <script src="main.js" defer></script>
</head>
<body>
    <?php include_once "header.php"; ?>
    <main>
        <section class="slider-container center">
            <div class="slider">
                <div id="slide-1" class="slide">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Slider_1.png" alt="slider-1">
                    <div class="content">
                        <div class="center-r">
                            <p>MONITOREO<br>DE AGENTES<br>OCUPACIONALES</p>
                            <div>
                                <a class="quote green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">cotizar</a>
                                <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide-2" class="slide">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Slider_2.png" alt="slider-2">
                    <div class="content">
                        <div class="center-r">
                            <p>MONITOREO<br>DE CALIDAD<br>AMBIENTAL</p>
                            <div>
                                <a class="quote green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">cotizar</a>
                                <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slide-3" class="slide">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Slider_3.png" alt="slider-3">
                    <div class="content">
                        <div class="center-r">
                            <p>CAPACITACIONES</p>
                            <div>
                                <a class="quote green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">cotizar</a>
                                <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-buttons">
                <div class="directions">
                    <div id="left-arrow"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Flecha_Izquierda.png" alt="left-arrow"></div>
                    <div id="right-arrow"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Flecha_Izquierda.png" alt="right-arrow"></div>
                </div>
                <div class="indicators">
                    <div class="ind-1 active"></div>
                    <div class="ind-2"></div>
                    <div class="ind-3"></div>
                </div>
            </div>
        </section>
        <div class="container-informacion">
            <div class="grupo-informacion font-inter">
                <div class="informacion">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\map.svg" alt="mapa">
                    <h3><a href="<?php echo $_ENV["LOCATION_LINK"]; ?>" target="_blank">Jr. Fitzcarrald 1504, Los Olivos.</a></h3>
                </div>
                <div class="informacion">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>\Logos\mail.svg" alt="correo">
                    <h3><a href="#formulario">comercial@genateb.com</a></h3>
                </div>
                <div class="informacion">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>\Logos\logo-whatsapp.svg" alt="whatsapp">
                    <a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">933 257 830</a>
                </div>
            </div>
            <a class="green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">COTIZA AQUI</a>
        </div>
        <section class="contenedor-logros">
            <div class="center-r">
                <div>
                    <div class="logros-texto">
                        <h3>NUESTROS LOGROS</h3>
                        <h2>Vamos 7 años asesorando en permisos ambientales y sociales<br>a lo largo y ancho del Perú brindando</h2>
                    </div>
                    <div class="logros-cifras">
                        <div class="logro">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body\imagen_pulgar_arriba.png" alt="logro">
                            <div class="logro-texto">
                                <h3>+7</h3>
                                <h2>Años de experiencia</h2>
                            </div>
                        </div>
                        <div class="logro edificio">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_edificio.png" alt="logro">
                            <div class="logro-texto">
                                <h3>+100</h3>
                                <h2>Empresas atendidas</h2>
                            </div>
                        </div>
                        <div class="logro estrella">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body\imagen_hombre_estrella.png" alt="logro">
                            <div class="logro-texto">
                                <h3>+30</h3>
                                <h2>Capacitaciones técnicas</h2>
                            </div>
                        </div>
                        <div class="logro">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body\imagen_estrella_pulgar.png" alt="logro">
                            <div class="logro-texto">
                                <h3>100%</h3>
                                <h2>Satisfacción</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_senor_3.png" alt="logro">
            </div>
        </section>
        <div class="container-ayuda">
            <div class="ayuda-content center-r">
                <div class="container-texto">
                    <h2>¿Necesitas Ayuda?</h2>
                    <h3>Nuestros especialistas se comunicarán lo más pronto contigo.</h3>
                </div>
                <a class="green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">ESCRÍBENOS</a>
            </div>
        </div>
        <section class="container-servicios cs-pd">
            <div class="center-r">
                <h2 class="texto-servicio">NUESTROS SERVICIOS</h2>
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
        <div class="container-clientes">
            <div class="clientes-content center-r">
                <h2 class="texto-cliente">NUESTROS CLIENTES</h2>
                <div class="slider center-r">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Aenor.png" alt="aenor">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Applus.png" alt="applus">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Abz.png" alt="abz">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Contugas.png" alt="confugas">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Oss.png" alt="oss">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Abai.png" alt="abai">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Grafi.png" alt="grafi">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Auna.png" alt="auna">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Ochosur.png" alt="ochosur">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\ByV.png" alt="byv">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Amphos.png" alt="amphis">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\MDH.png" alt="mdh">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Vanguard.png" alt="vanguard">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Proagro.png" alt="proagro">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Typsa.png" alt="typsa">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Promet.png" alt="promet">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Usat.png" alt="usat">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\San_Luis.png" alt="san luis">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\San_Juan.png" alt="san juan">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Covinca.png" alt="covinca">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Aenor.png" alt="aenor">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Applus.png" alt="applus">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Abz.png" alt="abz">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Contugas.png" alt="confugas">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Oss.png" alt="oss">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Abai.png" alt="abai">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Grafi.png" alt="grafi">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Auna.png" alt="auna">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Ochosur.png" alt="ochosur">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\ByV.png" alt="byv">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Amphos.png" alt="amphis">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\MDH.png" alt="mdh">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Vanguard.png" alt="vanguard">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Proagro.png" alt="proagro">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Typsa.png" alt="typsa">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Promet.png" alt="promet">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Usat.png" alt="usat">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\San_Luis.png" alt="san luis">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\San_Juan.png" alt="san juan">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Covinca.png" alt="covinca">
                </div>
            </div>
        </div>
        <section class="container-formulario center" id="formulario">
            <div>
                <div class="form-content center-r">
                    <div class="formulario-texto">
                        <h2 class="titulo-contacto" >CONTÁCTANOS</h2>
                        <form class="form font-inter" action="contact.php" method="post" onsubmit="return Validar()">
                          
                            <label for="nombre">
                                Nombre y Apellidos
                                <input id="nombre" type="text" name="name" required>
                            </label>
                            <label for="correo_electronico">
                                Correo Electronico
                                <input id="correo_electronico" type="email" name="email" required>
                            </label>
                          
                            <label for="telefono">
                                Número de teléfono
                                <input id="telefono" type="number" name="phone" required>
                            </label>
                            <label for="tipo_servicio">
                                Tipo de servicio que le interesa
                                <select id="tipo_servicio" name="service" required>
                                    <option value="Monitoreo de agentes ocupacionales">Monitoreo de agentes ocupacionales</option>
                                    <option value="Monitoreo de calidad ambiental">Monitoreo de calidad ambiental</option>
                                    <option value="Elaboración de instrumentos de Gestión Ambiental">Elaboración de instrumentos de Gestión Ambiental</option>
                                    <option value="Permisología Ambiental Minera">Permisologia Ambiental Minera</option>
                                    <option value="Estudios Complementarios">Estudios Complementarios</option>
                                    <option value="Seguridad y Salud en el Trabajo">Seguridad y Salud en el trabajo</option>
                                    <option value="Capacitaciones">Capacitaciones</option>
                                </select>
                            </label>
                            <label for="mensaje">
                                Mensaje o consulta
                                <textarea id="mensaje" type="text" name="message" required style="margin-top:10px"></textarea>
                            </label>
                            <label class="terms">
                                <input id="terms" type="checkbox" name="terms" required>
                                Acepto término y condiciones
                            </label>
                            <p id="mensaje-error"></p>
                            <button type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cf-img">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/imagen_formulario.png" alt="trabajador" class="solo-pc">
            </div>
        </section>
    </main>
    <?php include_once "footer.php"; ?>
</body>
</html>
