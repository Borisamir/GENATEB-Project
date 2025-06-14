<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>\index_styles\main.index.section.css">
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
        <div class="contenedor-monitoreo">
            <div class="contenedor-texto" style="text-align:center">
                <h2>ELABORACION DE INSTRUMENTOS DE<br> GESTION AMBIENTAL</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-parrafo" >
                <h2>Desarrollamos estudios y documentos tecnicos requeridos por la<br> normativa ambiental peruana</h2>
            </div>
        </div>
        <div class="contenedor-monitoreo">
            <div class="contenedor-boton">
                <a href="https://wa.link/drs6v5" class="boton-verde">
                    COTIZA AQUI
                </a>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="/GENATE_WEB/recursos\Imagenes_Elaboracion_Instrumentos\Eia.png" style="width: 187px;height: 100px;">
                <h2>Estudios de Impacto<br>Ambiental<br>(EIA)</h2>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="/GENATE_WEB/recursos\Imagenes_Elaboracion_Instrumentos\Hoja_Estadistica.png" style="width: 109px;height: 109px;">
                <h2>Evaluacion Ambiental<br>Preliminar y Planes de<br>Manejo(EVAP Y PMA)</h2>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="/GENATE_WEB/recursos\Imagenes_Elaboracion_Instrumentos\Hoja_Planta.png" style="width: 116px;height: 115px;">
                <h2>Declaracion de Impacto<br>y Adecuacion Ambiental<br>(DIA,DAA)</h2>
            </div>
        </div>
        <div class="contenedor-imagen-texto">
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="/GENATE_WEB/recursos\Imagenes_Elaboracion_Instrumentos\Hoja_Logro.png" style="width: 118px;height: 118px;">
                <h2>Instrumentos Tecnicos<br>Sustentatorios<br>(ITS)</h2>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="/GENATE_WEB/recursos\Imagenes_Elaboracion_Instrumentos\Hoja_Mas.png" style="width: 93px;height: 118px;" >
                <h2>Ficha Tecnica<br>Sociambiental<br>(FITSA)</h2>
            </div>
            <div class="imagen-texto" style="width: 300px;margin-top:50px">
                <img src="/GENATE_WEB/recursos\Imagenes_Elaboracion_Instrumentos\Hoja_Check.png" style="width: 128px;height: 128px;">
                <h2>Informe de gestion<br>ambiental<br>(IGA)</h2>
            </div>
        </div>
        <section class="container-servicios center-r" style="height:802px">
            <h2 class="texto-servicio">OTROS SERVICIOS</h2>
            <div class="services">
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_monitoreo_ocupacionales.png" alt="Ocupacional">
                    <p class="texto-sobre-imagen">Monitoreo de agentes ocupacionales</p>
                    <a href="..\pages\monitoreo-ocupacional.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_monitoreo_ambientales.png" alt="Elaboracion">
                    <p class="texto-sobre-imagen">Monitoreo de agentes<br>ambientales</p>
                    <a href="..\pages\monitoreo_ambiental.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
                <div class="servicio-item">
                    <img src="/GENATE_WEB/recursos\Servicios_Imagenes\imagen_permisologia_minera.png" alt="Minera">
                    <p class="texto-sobre-imagen">Permisologia ambiental<br>minera</p>
                    <a href="..\pages\permisología-ambiental-minera.php" class="green-button boton-sobre-imagen">ver más</a>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>