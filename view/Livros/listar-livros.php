<?php include __DIR__ . '/../header.php'; ?>

<a href="/novo-livro" class="btn btn-primary mb-2">Novo Livro</a>
<ul class="list-group">
  <?php foreach ($livros as $livro) : ?>
    <li class="list-group-item">
      <?= $livro->getNome(); ?>
    </li>
  <?php endforeach; ?>
</ul>

<?php include __DIR__ . '/../footer.php'; ?>