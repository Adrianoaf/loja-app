<?php
date_default_timezone_set('America/Sao_Paulo');
//bootstrap.php

$autoloader = require __DIR__ . '/vendor/autoload.php';
Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);


define('HOME', 'http://localhost:3030');
define('APP_DEBUG', true);
define('TEMPLATES', __DIR__ . '/templates');

// Database configs

define('DB_HOST', 'localhost');
define('DB_NAME', 'loja_app');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

//PagSeguro

define('PAGSEGURO_EMAIL', 'a987040010@gmail.com');
define('PAGSEGURO_TOKEN', 'BE23AB9186D246A0B56EBD300914091F');
define('PAGSEGURO_SANDBOX', true);

ini_set('display_errors', APP_DEBUG);
error_reporting(E_ALL | E_NOTICE | E_ERROR | E_WARNING | E_PARSE);