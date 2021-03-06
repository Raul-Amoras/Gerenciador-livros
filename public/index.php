<?php

require __DIR__ . '/../vendor/autoload.php';

use Gerenciamento\Livros\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas   = require __DIR__ . '/../config/router.php';

if (!array_key_exists($caminho, $rotas)) {
  http_response_code(404);
  exit();
}
session_start();

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
