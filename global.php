<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv -> safeLoad();

?>

<link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/global.css">
<link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/header-footer.css">
<link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/header-footer-rs.css">
<link rel="stylesheet" href="<?php echo $_ENV["STYLES"]; ?>/ambiental_styles/banner.css">

