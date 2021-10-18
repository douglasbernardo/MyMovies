<?php

require "../vendor/autoload.php";

$rotas = require __DIR__ . '/../config/routes.php';
$caminho = $_SERVER['PATH_INFO'];

if(!array_key_exists($caminho,$rotas)){
    http_response_code(404); //erro quando a rota não é encontrada
    return;
}


session_start();

$classeControladora = $rotas[$caminho];
/** 
 * @var Requisicao
 */
$controlador = new $classeControladora();
$controlador->handle();

//var_dump($classeControladora);