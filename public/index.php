<?php
require __DIR__ .'/../bootstrap.php';

//Iniciar o mapeamento de controllers e ações
$request = ltrim($_SERVER['REQUEST_URI'], '/');
$url = explode('/', $request);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'home';
$controller = '\\LojaApp\\Controller\\' . ucfirst($controller) . 'Controller';

$action     = isset($url[1]) && $url[1] ? $url[1] : 'index';
$parameter  = isset($url[2]) && $url[2] ? $url[2] : null;

if(!class_exists($controller)
|| !method_exists(new $controller, $action)) {
    die('Página não encontrada!');
}

//new Products() ->index
$response = call_user_func_array([new $controller, $action], [$parameter]);
print $response;