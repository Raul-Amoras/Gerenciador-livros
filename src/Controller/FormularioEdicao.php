<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Entity\Livros;
use Gerenciamento\Livros\Infra\EntityManagerCreator;

class FormularioEdicao implements InterfaceControladorRequisicao
{

  private $repositorioLivros;

  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())->getEntityManager();
    $this->repositorioLivros = $entityManager->getRepository(Livros::class);
  }

  public function processaRequisicao(): void
  {
    $id = filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT
    );

    if (is_null($id) || $id === false) {
      header('Location: /listar-livros');
      return;
    }
    $livro = $this->repositorioLivros->find($id);
    $titulo = 'Alterar' . ' ' . $livro->getNome();
    require __DIR__ . '/../../view/Livros/formulario.php';
  }
}
