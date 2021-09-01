<?php

use Gerenciamento\Livros\Controller\FormularioInsercao;
use Gerenciamento\Livros\Controller\ListarLivros;
use Gerenciamento\Livros\Controller\DadosFormulario;
use Gerenciamento\Livros\Controller\Exclusao;
use Gerenciamento\Livros\Controller\FormularioEdicao;

$rotas = [
  '/listar-livros'   => ListarLivros::class,
  '/novo-livro'      => FormularioInsercao::class,
  '/salvar-livro'    => DadosFormulario::class,
  '/excluir-livro'   => Exclusao::class,
  '/atualizar-livro' => FormularioEdicao::class
];

return $rotas;
