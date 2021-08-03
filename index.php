<?php

ini_set('display_errors', "1");

// INCLUI O AUTOLOAD
require __DIR__."/vendor/autoload.php";

// usa o autoload
use CoffeeCode\Router\Router;
use Source\Migrations\Migrations;

// preenche a tabela de produtos
// Migrations::fillTbProdutos(10);

// NOVO OBJ DO TIPO ROUTER
$router = new Router(URL);



// ADICIONA AS ROTAS INCIAIS
include_once __DIR__."/Source/Routes/main.php";

// EXECUTA AS ROTAS
$router->dispatch();

// REDIRECIONA TODOS ERROS
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}