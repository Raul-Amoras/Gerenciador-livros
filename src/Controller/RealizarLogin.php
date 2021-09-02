<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Entity\Usuario;
use Gerenciamento\Livros\Infra\EntityManagerCreator;

class RealizarLogin extends ControllerCaminho implements InterfaceControladorRequisicao
{

  private $repositorioUsuario;

  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())->getEntityManager();
    $this->repositorioUsuario = $entityManager->getRepository(Usuario::class);
  }
  public function processaRequisicao(): void
  {
    $email = filter_input(
      INPUT_POST,
      'email',
      FILTER_VALIDATE_EMAIL
    );
    if (is_null($email) || $email === false) {
      $_SESSION['tipoMensagem'] = 'danger';
      $_SESSION['Mensagem'] = "E-mail inválido";
      header('Location: /login');
      return;
    }

    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $usuario = $this->repositorioUsuario->findOneBy(['email' => $email]);

    if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
      $_SESSION['tipoMensagem'] = 'danger';
      $_SESSION['Mensagem'] = "E-mail ou senha inválido";
      header('Location: /login');
      return;
    }

    $_SESSION['logado'] = true;

    header('Location: /listar-livros');
  }
}
