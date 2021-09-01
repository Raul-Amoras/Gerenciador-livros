<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Entity\Livros;
use Gerenciamento\Livros\Infra\EntityManagerCreator;

class FormularioEdicao extends ControllerCaminho implements InterfaceControladorRequisicao
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
    echo $this->renderizaHtml('Livros/formulario.php', [
      'livro' => $livro,
      'titulo' => 'Alterar' . ' ' . $livro->getNome()
    ]);
  }
}
