<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Listar cursos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <?php if (isset($_SESSION['logado'])) : ?>
    <nav class="navbar navbar-dark bg-dark mb-2">
      <a class="flex-sm-fill text-sm-center" href="/listar-livros">Home</a>
      <a class="flex-sm-fill text-sm-center" href="/logout">Sair</a>

    </nav>
  <?php endif; ?>

  <div class="container">
    <div class="jumbotron">
      <h1><?= $titulo; ?></h1>
    </div>