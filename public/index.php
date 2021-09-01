<?php

require __DIR__ . '/../vendor/autoload.php';

use Gerenciamento\Livros\Controller\DadosFormulario;
use Gerenciamento\Livros\Controller\FormularioInsercao;
use Gerenciamento\Livros\Controller\ListarLivros;

switch ($_SERVER['PATH_INFO']) {
  case '/listar-livros':
    $controlador = new ListarLivros();
    $controlador->processaRequisicao();
    break;
  case '/novo-livro':
    $controlador = new FormularioInsercao();
    $controlador->processaRequisicao();
    break;
  case '/salvar-livro':
    $controlador = new DadosFormulario();
    $controlador->processaRequisicao();
    var_dump($_POST);
    break;
  default:
    echo "erro 404.";
    break;
}
