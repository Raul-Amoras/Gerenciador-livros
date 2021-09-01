<?php include __DIR__ . '/../header.php'; ?>
<form action="/salvar-livro<?= isset($livro) ? '?id=' . $livro->getId() : ''; ?>" method="POST">
  <div class="form-group">
    <label for="nome">Nome do livro</label>
    <input type="text" id="nome" name="nome" class="form-control" value=<?= isset($livro) ? $livro->getNome() : ''; ?>>
    <label for="autor">autor</label>
    <input type="text" id="autor" name="autor" class="form-control">
  </div>
  <button class="btn btn-primary">Salvar</button>
  <a href="/listar-livros" class="btn btn-secondary">Voltar</a>
  <?php include __DIR__ . '/../footer.php'; ?>