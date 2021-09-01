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
      echo "E-mail inválido.";
      return;
    }

    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $usuario = $this->repositorioUsuario->findOneBy(['email' => $email]);

    if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
      echo "E-mail ou senha inválido";
      return;
    }
    header('Location: /listar-livros');
  }
}
