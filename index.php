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
                    <a href="#" id="left-arrow"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Flecha_Izquierda.png" alt="left-arrow"></a>
                    <a href="#" id="right-arrow"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Flecha_Izquierda.png" alt="right-arrow"></a>
                </div>
                <div class="indicators">
                    <a href="#slide-1" class="ind-1 active"></a>
                    <a href="#slide-2" class="ind-2"></a>
                    <a href="#slide-3" class="ind-3"></a>
                </div>
            </div>
        </section>
        <div class="container-informacion">
            <div class="grupo-informacion font-inter">
                <div class="informacion">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\map.svg" alt="mapa">
                    <h3>Jr. Fitzcarrald 1504, Los Olivos.</h3>
                </div>
                <div class="informacion">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>\Logos\mail.svg" alt="correo">
                    <h3>comercial@genateb.com</h3>
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
                        <h2>Vamos 7 años asesorando en permisos ambientales y sociales<br>a lo largo y ancho del Peru brindado.</h2>
                    </div>
                    <div class="logros-cifras">
                        <div class="logro">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body\imagen_pulgar_arriba.png" alt=logro">
                            <div class="logro-texto">
                                <h3>+7</h3>
                                <h2>Años de experiencia</h2>
                            </div>
                        </div>
                        <div class="logro">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_edificio.png" alt="logro">
                            <div class="logro-texto">
                                <h3>+100</h3>
                                <h2>Empresas atendidas</h2>
                            </div>
                        </div>
                        <div class="logro">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body\imagen_hombre_estrella.png" alt="logro">
                            <div class="logro-texto">
                                <h3>+30</h3>
                                <h2>Capacitaciones tecnicas</h2>
                            </div>
                        </div>
                        <div class="logro">
                            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body\imagen_estrella_pulgar.png" alt="logro">
                            <div class="logro-texto">
                                <h3>100%</h3>
                                <h2>Satisfaccion</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_señor_3.png" alt="logro">
            </div>
        </section>
        <div class="container-ayuda">
            <div class="ayuda-content center-r">
                <div class="container-texto">
                    <h2>¿Necesitas Ayuda?</h2>
                    <h3>Nuestros especialistas se comunicaran los mas pronto contigo.</h3>
                </div>
                <a class="green-button" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank">ESCRÍBENOS</a>
            </div>
        </div>
        <section class="container-servicios">
            <div class="center-r">
                <h2 class="texto-servicio">NUESTROS SERVICIOS</h2>
                <div class="services font-inter">
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="ocupacional">
                        <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["PAGES"]; ?>/monitoreo-ocupacional.php">VER MÁS</a>
                    </div>
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
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_seguridad_salud.png" alt="seguridad">
                        <p class="texto-sobre-imagen">Seguridad y salud<br> en el trabajo</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["PAGES"]; ?>/sst.php">VER MÁS</a>
                    </div>
                    <div class="servicio-item">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Servicios_Imagenes\imagen_capacitaciones.png" alt="capacitacion">
                        <p class="texto-sobre-imagen">Capacitaciones</p>
                        <a class="green-button boton-sobre-imagen" href="<?php echo $_ENV["PAGES"]; ?>/capacitaciones.php">VER MÁS</a>
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
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Aenor.png" alt="aenor">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Applus.png" alt="applus">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Abz.png" alt="abz">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Contugas.png" alt="confugas">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Oss.png" alt="oss">
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos\Abai.png" alt="abai">
                </div>
            </div>
        </div>
        <section class="container-formulario center">
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
                                <input id="mensaje" type="text" name="message" required>
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
                <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/señor3_fondo.png" alt="trabajador" class="solo-pc">
            </div>
        </section>
    </main>
    <?php include_once "footer.php"; ?>
</body>
</html>
