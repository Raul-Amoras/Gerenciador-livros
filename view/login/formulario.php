<?php include __DIR__ . '/../header.php'; ?>
<form action="/realizar-login" method="post">
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control">
  </div>
  <button class="btn btn-primary">Entrar</button>
  <a href="/novo-cadastro">Cadastra-se</a>
</form>
<?php include __DIR__ . '/../footer.php'; ?>