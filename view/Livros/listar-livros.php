<?php include __DIR__ . '/../header.php'; ?>

<a href="/novo-livro" class="btn btn-primary mb-2">Novo Livro</a>
<ul class="list-group">
  <?php foreach ($livros as $livro) : ?>
    <li class="list-group-item d-flex justify-content-between">
      <?= $livro->getNome(); ?>
      <span>
        <a href="/atualizar-livro?id=<?= $livro->getId(); ?>" class="btn btn-info btn-sm">Alterar</a>
        <a href="/excluir-livro?id=<?= $livro->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
      </span>
    </li>
  <?php endforeach; ?>
</ul>

<?php include __DIR__ . '/../footer.php'; ?>