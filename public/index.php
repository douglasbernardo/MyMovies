<?php

require "../vendor/autoload.php";

$rotas = require __DIR__ . '/../config/routes.php';
$caminho = $_SERVER['PATH_INFO'];

if(!array_key_exists($caminho,$rotas)){
    http_response_code(404); //erro quando a rota não é encontrada
    return;
}

/*
session_start();

$ehRotaLogin = stripos($caminho,'login');//procura a string login dentro do caminho da url

if(!isset($_SESSION['usuario_logado']) && $ehRotaLogin === false) //e se não encontrar verifica se esta logado ou não
{
    header("Location: /login");
    return;
}
*/
$classeControladora = $rotas[$caminho];
/** 
 * @var Requisicao
 */
$controlador = new $classeControladora();
$controlador->handle();

//var_dump($classeControladora);