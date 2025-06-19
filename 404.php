<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <?php include_once "global.php"; ?>
    <link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/404.css">
</head>
<body>
    <?php include_once "header.php"; ?>
    <main>
        <div class="fzf-container font-inter">
            <h1 class="font-inter-tag">404</h1>
            <p>Lo sentimos, la página que estás buscando no existe</p>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
</body>
</html>
