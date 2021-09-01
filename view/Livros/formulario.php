<?php include __DIR__ . '/../header.php'; ?>
<form action="">
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" id="descricao" name="descricao" class="form-control">
  </div>
  <button class="btn btn-primary">Salvar</button>
  <a href="/listar-livros" class="btn btn-secondary">Voltar</a>
  <?php include __DIR__ . '/../footer.php'; ?>