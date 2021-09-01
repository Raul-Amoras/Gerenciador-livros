<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Infra\EntityManagerCreator;
use Gerenciamento\Livros\Entity\Livros;

class Exclusao implements InterfaceControladorRequisicao
{

  private $entityManager;

  public function __construct()
  {
    $this->entityManager = (new EntityManagerCreator())->getEntityManager();
  }
  public function processaRequisicao(): void
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if (is_null($id) || $id === false) {
      header('Location: /listar-livros');
      return;
    }
    $livro = $this->entityManager->getReference(Livros::class, $id);
    $this->entityManager->remove($livro);
    $this->entityManager->flush();
    header('Location: /listar-livros');
  }
}
