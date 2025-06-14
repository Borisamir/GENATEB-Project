<header>
    <div class="header-wrapper center-r font-inter">
        <div class="brand">
            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/brand.svg" alt="genateb">
        </div>
        <div>
            <nav class="menu-container">
                <!-- <input type="checkbox" id="menu-toggle" hidden>
                <label for="menu-toggle" class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label> -->
                <ul>
                    <li><a href="<?php echo $_ENV["ROOT"]; ?>/">inicio</a></li>
                    <li><a href="<?php echo $_ENV["PAGES"]; ?>/nosotros.php">nosotros</a></li>
                    <li>
                        <a href="#">servicios</a>
                        <ul class="submenu">
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">monitoreo de agentes ocupacionales</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">monitoreo de agentes ambientales</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">elaboración de instrumentos de gestión ambiental</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">permisología ambiental minera</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">estudios complementarios</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">seguridad y salud en el trabajo</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>">capacitaciones</a></li>
                        </ul>
                    </li>
                    <li><a href="#">blog</a></li>
                </ul>
            </nav>
            <div class="social-container">
                <ul>
                    <li><a href="<?php echo $_ENV["FACEBOOK_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/Logo_Facebook.svg" alt="facebook"></a></li>
                    <li><a href="<?php echo $_ENV["INSTAGRAM_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/Logo_Instagram.svg" alt="instagram"></a></li>
                    <li><a href="<?php echo $_ENV["LINKEDIN_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/Logo_Linkedin.svg" alt="linkedin"></a></li>
                    <li><a href="<?php echo $_ENV["WHATSAPP_LINK"]; ?>" target="_blank"><img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/Logo_Whatsapp.svg" alt="whatsapp"></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
