<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/index/main.index.section.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/main.nosotros.css">
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.rs.css">
    <title>Nosotros</title>
</head>
<body>
    <?php include_once "../header.php"; ?>
    <main>
        <div class="contenedor-banner">
            <div class="contenedor-imagen">
                <img src="<?php echo $_ENV["RESOURCES"]; ?>\Body\imagen_señor_2.png" alt="banner-nosotros">
            </div>
        </div>
        <div class="contenedor-boton-what-nos">
            <a class="contact" href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/slider-whatsapp.svg" alt="whatsapp"></a>
        </div> 
        <!-- Seccion Nosotros -->
        <section class="sd-section">
            <h2>NOSOTROS</h2>
            <p>En Genateb ofrece soluciones especializadas en gestíon ambiental, monitoreo ocupaciones y seguridad. Elaboramos instrumentos técnicos adaptables a cada sector productivo.Nuestro enfoque cambia sostenibilidad, cumplimineto normativo y bienestar laboral. Acompañamos a nuestros clientes en el desarrollo de proyectos responsables.</p>
            <a href="https://wa.link/drs6v5" target="_blank" class="green-button">cotiza aqui</a>
        </section>
        <!-- Seccion Nuestros Pilares -->
        <section class="pilares">
            <div class="pilares-content center-r">
                <h3>NUESTROS PILARES</h3>
                <div class="pilar">
                    <div class="pilar-image">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Mision.png" alt="mision">
                    </div>
                    <div>
                        <h4>Misión:</h4>
                        <p>Brindar   soluciones   sostenibles  e innovadoras en proyectos ambientales, construcción  y sociales, con enfoque en el  respeto del medio ambiente, el bienestar  social   y  la  viabilidad económica,   generando   un   impacto positivo en las comunidades.</p>
                    </div>
                </div>
                <div class="pilar">
                    <div class="pilar-image">
                        <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Vision.png" alt="vision">
                    </div>
                    <div>
                        <h4>Visión:</h4>
                        <p>Ser   lideres  en  el  desarrollo  de proyectos integales que equilibran lo ambiental, lo social y lo  económico, contribuyendo   a   un   futuro   más sostenible y próspero.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="valores">
            <div class="valores-content center-r">
                <h3>NUESTROS VALORES</h3>
                <div class="valor">
                    <!-- Compromiso -->
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Compromiso.png" alt="compromiso">
                    <strong>Compromiso</strong>
                </div>
                <div class="valor">
                    <!-- Profesionalismo -->
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Profesionalismo.png" alt="profesionalismo">
                    <strong>Profesionalismo</strong>
                </div>
                <div class="valor">
                    <!-- Prevención -->
                    <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Prevencion.png" alt="prevencion">
                    <strong>Prevención</strong>
                </div>
                <div class="valor">
    
                     <img src="<?php echo $_ENV["RESOURCES"]; ?>/Body/Confianza.png" alt="confianza">
                    <strong>Confianza</strong>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../footer.php"; ?>
</body>
</html>
