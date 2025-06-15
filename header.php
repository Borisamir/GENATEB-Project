<header>
    <div class="header-wrapper center-r font-inter">
        <input id="menu-toggle" type="checkbox" hidden>
        <label class="brand" for="menu-toggle" style="--touch-image: url(<?php echo $_ENV["RESOURCES"]; ?>/touch.svg)">
            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/brand.png" alt="genateb">
        </label>
        <div>
            <!-- <label class="menu-icon" for="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </label> -->
            <nav class="menu-container">
                <ul>
                    <li><a href="<?php echo $_ENV["ROOT"]; ?>">INICIO</a></li>
                    <li><a href="<?php echo $_ENV["PAGES"]; ?>/nosotros.php">NOSOTROS</a></li>
                    <li>
                        <a href="<?php echo $_ENV["PAGES"]; ?>/servicios.php">SERVICIO</a>
                        <ul class="submenu">
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Monitoreo de agentes ocupacionales</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Monitoreo de agentes ambientales</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Elaboración de instrumentos de gestión ambiental</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Permisología ambiental minera</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Estudios complementarios</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Seguridad y salud en el trabajo</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">Capacitaciones</a></li>
                        </ul>
                    </li>
                    <li><a href="#">BLOG</a></li>
                </ul>
            </nav>
            <ul class="social-list">
                <li><a href="<?php echo $_ENV["FACEBOOK_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/logo-facebook.svg" alt="facebook"></a></li>
                <li><a href="<?php echo $_ENV["INSTAGRAM_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/logo-instagram.svg" alt="instagram"></a></li>
                <li><a href="<?php echo $_ENV["LINKEDIN_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/logo-linkedin.svg" alt="linkedin"></a></li>
                <li><a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/logo-whatsapp.svg" alt="whatsapp"></a></li>
            </ul>
        </div>
    </div>
</header>
