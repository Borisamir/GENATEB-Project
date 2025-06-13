<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocupacional</title>
    <?php include_once "global.php"; ?>
    <link rel="stylesheet" href="styles/index_styles/main.index.css">
    <link rel="stylesheet" href="styles/index_styles/main.index.slider.css">
    <link rel="stylesheet" href="styles/index_styles/main.index.section.css">
    <script src="main.js" defer></script>
</head>
<body>
    <?php include_once "header.php"; ?>
    <main>
        <section class="slider-container center">
            <div class="slider">
                <div class="slide" id="slide-1">
                    <img src="recursos/Body/Slider_1.png" alt="slider-1">
                    <div class="content">
                        <p>monitoreo<br>de agentes<br>ocupacionales</p>
                        <div>
                            <a href="https://wa.link/drs6v5" class="quote green-button" target="_blank">cotizar</a>
                            <a href="https://wa.link/drs6v5" class="contact" target="_blank"><img src="recursos/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide-2">
                    <img src="recursos/Body/Slider_2.png" alt="slider-2">
                    <div class="content">
                        <p>monitoreo<br>de calidad<br>ambiental</p>
                        <div>
                            <a href="https://wa.link/drs6v5" class="quote green-button" target="_blank">cotizar</a>
                            <a href="https://wa.link/drs6v5" class="contact" target="_blank"><img src="recursos/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide-3">
                    <img src="recursos/Body/Slider_3.png" alt="slider-3">
                    <div class="content">
                        <p>capacitaciones</p>
                        <div>
                            <a href="https://wa.link/drs6v5" class="quote green-button" target="_blank">cotizar</a>
                            <a href="https://wa.link/drs6v5" class="contact" target="_blank"><img src="recursos/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-buttons">
                <div class="directions">
                    <a href="#" id="left-arrow"><img src="recursos/Body/Flecha_Izquierda.png" alt="left-arrow"></a>
                    <a href="#" id="right-arrow"><img src="recursos/Body/Flecha_Izquierda.png" alt="right-arrow"></a>
                </div>
                <div class="indicators">
                    <a href="#slide-1" class="ind-1 active"></a>
                    <a href="#slide-2" class="ind-2"></a>
                    <a href="#slide-3" class="ind-3"></a>
                </div>
            </div>
        </section>
        <div class="container-informacion">
            <div class="grupo-informacion">
                <div class="informacion">
                    <img src="recursos\Logos\mapa_blanco.png">
                    <h3>jr. fitzcarrald 1504, los olivos.</h3>
                </div>
                <div class="informacion">
                    <img src="recursos\Logos\mensaje_blanco.png">
                    <h3>comercial@genateb.com</h3>
                </div>
                <div class="informacion">
                    <img src="recursos\Logos\whatsapp_blanco.png">
                    <h3>933 257 830</h3>
                </div>
            </div>
            <a href="https://wa.link/drs6v5" class="green-button" target="_blank">COTIZA AQUI</a>
        </div>
        <section class="contenedor-logros center-r">
            <div>
                <div class="logros-texto">
                    <h3>NUESTROS LOGROS</h3>
                    <h2>Vamos 7 años asesorando en permisos ambientales y sociales<br>a lo largo y ancho del Peru brindado.</h2>
                </div>
                <div class="logros-cifras">
                    <div class="logro">
                        <img src="recursos\Body\imagen_pulgar_arriba.png">
                        <div class="logro-texto">
                            <h3>+7</h3>
                            <h2>Años de experiencia</h2>
                        </div>
                    </div>
                    <div class="logro">
                        <img src="recursos\Body\imagen_edificio.png">
                        <div class="logro-texto">
                            <h3>+100</h3>
                            <h2>Empresas atendidas</h2>
                        </div>
                    </div>
                    <div class="logro">
                        <img src="recursos\Body\imagen_hombre_estrella.png">
                        <div class="logro-texto">
                            <h3>+30</h3>
                            <h2>Capacitaciones tecnicas</h2>
                        </div>
                    </div>
                    <div class="logro">
                        <img src="recursos\Body\imagen_estrella_pulgar.png">
                        <div class="logro-texto">
                            <h3>100%</h3>
                            <h2>Satisfaccion</h2>
                        </div>
                    </div>
                </div>
            </div>
            <img src="recursos\Body\imagen_señor_3.png">
        </section>
        <div class="container-ayuda">
            <div class="ayuda-content center-r">
                <div class="container-texto">
                    <h2 class="estilo-texto-ayuda">¿Necesitas Ayuda?</h2>
                    <h3 class="estilo-texto-nosotros">Nuestros especialistas se comunicaran los mas pronto contigo.</h3>
                </div>
                <a href="https://wa.link/drs6v5" target="_blank" class="green-button">escríbenos</a>
            </div>
        </div>
        <section class="container-servicios center-r">
            <h2 class="texto-servicio">NUESTROS SERVICIOS</h2>
            <div class="services">
                <div class="servicio-item">
                    <img src="recursos\Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="Ocupacional">
                    <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                    <a href="pages\monitoreo-ocupacional.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="recursos\Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="Ambiental">
                    <p class="texto-sobre-imagen">Monitero de agentes<br>ambientales</p>
                    <a href="pages\monitoreo_ambiental.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="recursos\Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="Elaboracion">
                    <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                    <a href="pages\elaboracion_instrumentos.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="recursos\Servicios_Imagenes\imagen_permisologia_minera.png" alt="Minera">
                    <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                    <a href="pages\permisología-ambiental-minera.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="recursos\Servicios_Imagenes\imagen_seguridad_salud.png" alt="Seguridad">
                    <p class="texto-sobre-imagen">Seguridad y salud<br> en el trabajo</p>
                    <a href="pages\sst.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="recursos\Servicios_Imagenes\imagen_capacitaciones.png" alt="Capacitacion">
                    <p class="texto-sobre-imagen">Capacitaciones</p>
                    <a href="pages\capacitaciones.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
            </div>
        </section>
        <div class="container-clientes">
            <div class="clientes-content center-r">
                <h2 class="texto-cliente">NUESTROS CLIENTES</h2>
                <div class="slider">
                    <img src="recursos\Logos\Aenor.png" alt="Aenor">
                    <img src="recursos\Logos\Applus.png" alt="Appplus">
                    <img src="recursos\Logos\Abz.png" alt="Abz">
                    <img src="recursos\Logos\Contugas.png" alt="Confugas">
                    <img src="recursos\Logos\Oss.png" alt="Oss">
                    <img src="recursos\Logos\Abai.png" alt="Abai">
                    <img src="recursos\Logos\Aenor.png" alt="Aenor">
                    <img src="recursos\Logos\Applus.png" alt="Appplus">
                    <img src="recursos\Logos\Abz.png" alt="Abz">
                    <img src="recursos\Logos\Contugas.png" alt="Confugas">
                    <img src="recursos\Logos\Oss.png" alt="Oss">
                    <img src="recursos\Logos\Abai.png" alt="Abai">
                </div>
            </div>
        </div>
        <section class="container-formulario center">
            <img src="recursos/Body/señor3_fondo.png" alt="Trabajador">
            <div class="form-content center-r">
                <div class="formulario-texto">
                    <h2 class="titulo-contacto" >CONTACTANOS</h2>
                    <form class="form" action="contact.php" method="post" onsubmit="return Validar()">
                        <label for="nombre">
                            Nombre y Apellidos
                            <input type="text" id="nombre" name="name">
                        </label>
                        <label for="correo_electronico">
                            Correo Electronico
                            <input type="text" id="correo_electronico" name="email">
                        </label>
                        <label for="telefono">
                            Numero de telefono
                            <input type="number" id="telefono" name="phone">
                        </label>
                        <label for="tipo_servicio">
                            Tipo de servicio que le interesa
                            <select id="tipo_servicio" name="service">
                                <option value="Monitoreo_agentes_ocupacionales">Monitoreo de agentes ocupacionales</option>
                                <option value="Monitoreo_calidad_ambiental">Monitoreo de calidad ambiental</option>
                                <option value="Elaboracion_Instrumentos_Gestion_Ambiental">Elaboracion de Instrumentos de Gestion Ambiental</option>
                                <option value="Estudios_Complementarios">Estudios Complementarios</option>
                                <option value="Seguridad_Salud ">Seguridad y Salud en el trabajo</option>
                                <option value="Capacitaciones">Capacitaciones</option>
                            </select>
                        </label>
                        <label for="mensaje">
                            Mensaje o consulta
                            <input type="text" id="mensaje" name="message">
                        </label>
                        <label class="terms">
                            <input type="checkbox" name="terms">Acepto terminos y condiciones
                        </label>
                        <button type="submit">enviar</button>
                        <div id="mensaje-error" style="color: red; margin-top: 10px;font-size:20px"></div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "footer.php"; ?>
</body>
</html>
