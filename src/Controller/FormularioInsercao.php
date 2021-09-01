<?php

namespace Gerenciamento\Livros\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    require __DIR__ . '/../../view/Livros/formulario.php';
  }
}
