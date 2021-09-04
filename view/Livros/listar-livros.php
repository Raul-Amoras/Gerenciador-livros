<?php include __DIR__ . '/../header.php'; ?>

<a href="/novo-livro" class="btn btn-primary mb-2">Novo Livro</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Autor</th>
      <th scope="col" style="text-align:end;">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($livros as $livro) : ?>
      <tr>
        <th scope="row"><?= $livro->getId(); ?></th>
        <td><?= $livro->getNome(); ?></td>
        <td><?= $livro->getAutor(); ?></td>
        <td style="text-align:end;">
          <a href="/atualizar-livro?id=<?= $livro->getId(); ?>" class="btn btn-info btn-sm">Alterar</a>
          <a href="/excluir-livro?id=<?= $livro->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

  <?php include __DIR__ . '/../footer.php'; ?>