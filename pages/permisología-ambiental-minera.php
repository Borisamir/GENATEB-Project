<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/h-f.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <title>Permisología ambiental minera</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Imagenes_Permisologia_Ambiental\Banner_Permisologia.png">
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto">
                <h2>Permisologia Ambiental Minera</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <p>Brindamos asesoría y gestion integral en la obtención de permisos,<br>licencias y autorizaciones ambientales requeridas para proyectos mineros.</p>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-boton">
                <a href="https://wa.link/drs6v5" class="boton-verde">
                    COTIZA AQUI
                </a>
            </div>
        </div>
        <div class="contenedor-imagen-texto" >
            <div class="imagen-texto ancho-400">
                <img src="..\recursos\Imagenes_Permisologia_Ambiental\Estadistica.png" style="width: 163px;height: 130px;margin-bottom:20px;margin-right:-15px">
                <p>Inicio de actividades de<br>Exploración y Explotación</p>
            </div>
            <div class="imagen-texto" style="width:500px">
                <img src="..\recursos\Imagenes_Permisologia_Ambiental\Logro.png" style="width: 131px;height: 131px;margin-bottom:20px;margin-right:-15px">
                <p>Certificado de inexistencia de restos<br>arqueologicos, (CIRA)Diagnósticos<br>arqueológicos superficiales</p>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto ancho-400">
                <img src="..\recursos\Imagenes_Permisologia_Ambiental\Sello.png" style="width: 142px;height: 142px;margin-bottom:20px;margin-right:-28px">
                <p>Autorizaciones de uso de aguas,<br>licencia de uso de agua,<br>autorizaciones de vertímiento</p>
            </div>
            <div class="imagen-texto ancho-500" style="margin-top:10px">
                <img src="..\recursos\Imagenes_Permisologia_Ambiental\Mina.png" style="width: 132px;height: 132px;margin-bottom:20px;margin-left:11px">
                <p>Conseciones de beneficio,<br>procesamiento y transporte de<br>mineral.</>
            </div>
        </div>
        <section class="container-servicios center-r">
            <h2 class="texto-servicio">OTROS SERVICIOS</h2>
            <div class="services">
                <div class="servicio-item">
                    <img src="..\recursos\Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="Ocupacional">
                    <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                    <a href="..\pages\monitoreo-ocupacional.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="..\recursos\Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="Elaboracion">
                    <p class="texto-sobre-imagen">Monitoreo de agentes<br>ambientales</p>
                    <a href="..\pages\monitoreo_ambiental.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="..\recursos\Servicios_Imagenes\imagen_elaboracion_ambiental.png" alt="Minera">
                    <p class="texto-sobre-imagen">Elaboracion de instrumentos<br>de gestion ambiental</p>
                    <a href="..\pages\elaboracion_instrumentos.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>