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
?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
      <meta charset="UTF-8">
      <title>Listar cursos</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
      <div class="container">
        <div class="jumbotron">
          <h1>Listar cursos</h1>
        </div>

        <a href="/novo-livro" class="btn btn-primary mb-2">Novo Livro</a>
        <ul class="list-group">
          <?php foreach ($livros as $livro) : ?>
            <li class="list-group-item">
              <?= $livro->getNome(); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </body>

    </html>
<?php
  }
}
