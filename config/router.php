<?php

use Gerenciamento\Livros\Controller\FormularioInsercao;
use Gerenciamento\Livros\Controller\ListarLivros;
use Gerenciamento\Livros\Controller\DadosFormulario;
use Gerenciamento\Livros\Controller\Exclusao;
use Gerenciamento\Livros\Controller\FormularioEdicao;
use Gerenciamento\Livros\Controller\FormularioInsercaoUsuario;
use Gerenciamento\Livros\Controller\FormularioLogin;
use Gerenciamento\Livros\Controller\Logout;
use Gerenciamento\Livros\Controller\RealizarLogin;


$rotas = [
  '/listar-livros'   => ListarLivros::class,
  '/novo-livro'      => FormularioInsercao::class,
  '/salvar-livro'    => DadosFormulario::class,
  '/excluir-livro'   => Exclusao::class,
  '/atualizar-livro' => FormularioEdicao::class,
  '/login'           => FormularioLogin::class,
  '/realizar-login'  => RealizarLogin::class,
  '/logout'          => Logout::class,
  '/novo-cadastro'   => FormularioInsercaoUsuario::class
];

return $rotas;
