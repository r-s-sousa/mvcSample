<?php

// MOSTRA OS ERROS
ini_set('display_errors', "1");

// INLCUI A CLASSE ROUTER
use CoffeeCode\Router\Router;

// INCLUI O AUTOLOAD
require __DIR__."/vendor/autoload.php";

// NOVO OBJ DO TIPO ROUTER
$router = new Router(URL);

// DEFINE O NAMESPACE DOS CONTROLADORES
$router->namespace("Source\Controllers");

// 
// BASE PAGE
// 
$router->group(null);
$router->get("/", "Web:home", "web.home");
$router->get("/sobre", "Web:about", "web.about");

// 
// ERRORS
// 
$router->group("error")->namespace("Source\App");
$router->get("/{errcode}", "Error:error", "error.error");


// EXECUTA AS ROTAS
$router->dispatch();

// REDIRECIONA TODOS ERROS
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}