<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Entity\Livros;
use Gerenciamento\Livros\Infra\EntityManagerCreator;

class DadosFormulario implements InterfaceControladorRequisicao
{

  private $entityManeger;

  public function __construct()
  {
    $this->entityManeger = (new EntityManagerCreator())->getEntityManager();
  }

  public function processaRequisicao(): void
  {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $livroNome = new Livros();
    $livroAutor = new Livros();
    $livroData = new Livros();
    $livroNome->setNome($nome);
    $livroAutor->setAutor($_POST['autor']);
    $livroData->setDataCadastro(date_default_timezone_set('UTC'));
    $this->entityManeger->persist($livroNome);
    $this->entityManeger->flush();

    header('Location: /listar-livros', false, 302);
  }
}
