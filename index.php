<?php

// MOSTRA OS ERROS
ini_set('display_errors', true);

// INICIA A SESSÃO
session_start();

// INLCUI A CLASSE ROUTER
use CoffeeCode\Router\Router;

// INCLUI O AUTOLOAD
require __DIR__ . "/vendor/autoload.php";

// NOVO OBJ DO TIPO ROUTER
$router = new Router(URL);

// DEFINE O NAMESPACE DOS CONTROLADORES
$router->namespace("Source\Controllers");

// TERMOS E INICIO
require_once __DIR__."/source/routes/web_routes.php";

// QUESTIONARIO
require_once __DIR__."/source/routes/questionario_routes.php";

// ERRORS
require_once __DIR__."/source/routes/errors_routes.php";

// EXECUTA AS ROTAS
$router->dispatch();

// REDIRECIONA TODOS ERROS
if ($router->error()) $router->redirect('error.error', ['errcode' => $router->error()]);
