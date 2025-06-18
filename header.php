<header>
    <div class="header-wrapper center-r font-inter">
        <div class="brand" for="menu-toggle">
            <img src="<?php echo $_ENV["RESOURCES"]; ?>/Logos/brand.png" alt="genateb">
        </div>
        <div>
            <input id="menu-toggle" type="checkbox" hidden>
            <label class="menu-icon" for="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div id="bg-menu" class="bg-menu"></div>
            <nav id="menu" class="menu-container">
                <ul>
                    <li><a href="<?php echo $_ENV["ROOT"]; ?>">INICIO</a></li>
                    <li><a href="<?php echo $_ENV["PAGES"]; ?>/nosotros.php">NOSOTROS</a></li>
                    <li>
                        <a href="<?php echo $_ENV["PAGES"]; ?>/servicios.php">SERVICIO</a>
                        <ul class="submenu">
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/monitoreo-ocupacional.php">Monitoreo de agentes ocupacionales</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/monitoreo_ambiental.php">Monitoreo de agentes ambientales</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/elaboracion_instrumentos.php">Elaboración de instrumentos de gestión ambiental</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/permisología-ambiental-minera.php">Permisología ambiental minera</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/estudios_complementarios.php">Estudios complementarios</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/sst.php">Seguridad y salud en el trabajo</a></li>
                            <li><a href="<?php echo $_ENV["PAGES"]; ?>/capacitaciones.php">Capacitaciones</a></li>
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
    <script>
        const css$media = window.matchMedia("(max-width: 899px)");
        const div$bg_menu = document.getElementById("bg-menu");
        const nav$menu = document.getElementById("menu");
        const input$menu_toggle = document.getElementById("menu-toggle");

        function headerScroll() {
            div$bg_menu.classList.toggle("header-scroller", this.window.scrollY > 99)
            nav$menu.classList.toggle("header-scroller", this.window.scrollY > 99)
        }

        css$media.addEventListener("change", function(evt) {
            if (!evt.matches && input$menu_toggle.checked) {
                window.removeEventListener("scroll", headerScroll);
                return;
            }

            if (input$menu_toggle.checked) {
                if (window.scrollY < 99) {
                    div$bg_menu.classList.remove("header-scroller");
                    nav$menu.classList.remove("header-scroller");
                } else {
                    div$bg_menu.classList.add("header-scroller");
                    nav$menu.classList.add("header-scroller");
                }

                window.addEventListener("scroll", headerScroll);
            }
        })

        input$menu_toggle.addEventListener("change", function() {
            if (this.checked) {
                window.addEventListener("scroll", headerScroll);
            } else {
                window.removeEventListener("scroll", headerScroll)
            }
        })

        div$bg_menu.addEventListener("click", function() {
            if (input$menu_toggle.checked) {
                input$menu_toggle.checked = false;
            }
        })
    </script>
</header>
