<?php

// Invocamos y cremos las variable de entorno.

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Invocacion de Rutas.
require 'Routes/routes.php';

?>
