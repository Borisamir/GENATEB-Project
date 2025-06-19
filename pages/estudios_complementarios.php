<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/h-f.css">
    <title>Estudios Complementarios</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Imagenes_Estudios_Complementarios\Banner_Estudios.png">
            </div>
        </div>
        <div class="contenedor-boton-what">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto" style="text-align:center">
                <h2>ESTUDIOS<br class="salto-celular"> COMPLEMENTARIOS</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <p>Realizamos estudios técnicos adicionales<br class="salto-celular-net"> que <br class="salto-celular">complementan los instrumentos de <br class="salto-celular">gestión ambiental.</p>
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
            <div class="imagen-texto" style="width: 400px;margin-top:50px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Lupa.png" style="width: 137px;height: 131px;">
                <p>Respuestas ante emergencias y<br>conflictos socioambientales</p>
            </div>
            <div class="imagen-texto" style="width: 400px;margin-top:65px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Gotas.png" style="width: 117px;height: 117px;" >
                <p>Acreditación de disponibilidad<br>hidrica y derechos de uso de agua</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 400px;margin-top:50px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Planeta.png" style="width: 128px;height: 128px;">
                <p>Expendientes para la Declaración<br>de Compatibilidad y de<br>Investigaciones dentro de<br>un ANP SERNANP</p>
            </div>
            <div class="imagen-texto" style="width: 400px;margin-top:45px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Hojas.png" style="width: 107px;height: 132px;" >
                <p>Modificacion y actualización<br>de Estudio de Impacto <br>Ambiental</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 400px;margin-top:50px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Toxico.png" style="width: 102px;height: 129px;">
                <p>Inscripcion en el Registro<br>Autoritativo de Empresas<br>Operadoras de Residuos Sólidos</p>
            </div>
            <div class="imagen-texto" style="width: 400px;margin-top:60px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Flechas.png" style="width: 131px;height: 121px;" >
                <p>Estudios de Impacto<br>Vial(EIV)</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 300px;margin-top:-10px">
                <img src="..\recursos\Imagenes_Estudios_Complementarios\Peligro.png" style="width: 143px;height: 143px;">
                <p>Estudio de evaluación<br>de riesgos(EVAR)</p>
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