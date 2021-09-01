<?php

namespace Gerenciamento\Livros\Controller;

use Gerenciamento\Livros\Entity\Livros;

class FormularioLogin extends ControllerCaminho implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('login/formulario.php', [
      'titulo' => 'Login'
    ]);
  }
}
