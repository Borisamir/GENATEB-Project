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
                <p>Ejecutamos una supervisión eficiente<br class="salto-celular"> cumpliendo con<br class="salto-celular-net"> los requisitos legales en los<br class="salto-celular"> sectores de: construcción,<br class="salto-celular-net">mineria e industria</p>
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
                <img src="..\recursos\Imagenes_Seguridad_Salud\Archivo.png" style="width: 158px;height: 151px;">
                <p>Elaboración y actualización<br>de documentacion</p>
            </div>
            <div class="imagen-texto" style="width: 400px;">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Cronometro.png" style="width: 159px;height: 159px;" >
                <p>Seguimiento y<br>mantenimiento de SGSST</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto" style="border-bottom:3px #083D29 dotted">
            <div class="imagen-texto" style="width: 400px;">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Pregunta.png" style="width: 168px;height: 151px;">
                <p>Asesoría<br>personalizada</p>
            </div>
            <div class="imagen-texto" style="width: 400px;">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Checks.png" style="width: 174px;height: 151px;" >
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
                <img src="..\recursos\Imagenes_Seguridad_Salud\Mas.png" style="width: 129px;height: 144px;">
                <p>Valores agregados<br>incorporados</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Flecha_arriba.png" style="width: 145px;height: 145px;" >
                <p>Personal experto<br>y capacitado</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Lapiz.png" style="width: 124px;height: 137px;margin-top:-10px;" >
                <p>Verificación y<br>capacitación de<br>estandares del cliente</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Escudo.png" style="width: 112px;height: 130px;">
                <p>Mantenimiento y<br>actualizacion de la<br>documentacion SSOMA</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Calendario.png" style="width: 152px;height: 153px;" >
                <p>Reportes semanales<br>y/o mensuales</p>
            </div>
            <div class="imagen-texto ancho-300">
                <img src="..\recursos\Imagenes_Seguridad_Salud\Audit.png" style="width: 139px;height: 144px;" >
                <p>Auditorias y/o<br>homologaciones<br>vigentes</p>
            </div>
        </div>
        <section class="container-servicios" style="padding-bottom: 70px;">
            <div class="center-r">
                <h2 class="texto-servicio">OTROS SERVICIOS</h2>
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