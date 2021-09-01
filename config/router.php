<?php

use Gerenciamento\Livros\Controller\FormularioInsercao;
use Gerenciamento\Livros\Controller\ListarLivros;
use Gerenciamento\Livros\Controller\DadosFormulario;

$rotas = [
  '/listar-livros' => ListarLivros::class,
  '/novo-livro'    => FormularioInsercao::class,
  '/salvar-livro'  => DadosFormulario::class
];

return $rotas;
