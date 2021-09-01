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
    $livro = new Livros();
    $livro->setNome($nome);

    $id = filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT
    );

    if (!is_null($id) && $id !== false) {
      $livro->setId($id);
      $this->entityManeger->merge($livro);
    } else {
      $this->entityManeger->persist($livro);
    }
    $this->entityManeger->flush();

    header('Location: /listar-livros', false, 302);
  }
}
