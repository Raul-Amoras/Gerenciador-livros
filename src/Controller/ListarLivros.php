<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Infra\EntityManagerCreator;
use Gerenciamento\Livros\Entity\Livros;


class ListarLivros implements InterfaceControladorRequisicao
{
  private $repositorioDeLivros;
  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())
      ->getEntityManager();
    $this->repositorioDeLivros = $entityManager->getRepository(Livros::class);
  }

  public function processaRequisicao(): void
  {
    $livros = $this->repositorioDeLivros->findall();
    $titulo = 'Lista Livros';
    require __DIR__ . '/../../view/Livros/listar-livros.php';
  }
}
