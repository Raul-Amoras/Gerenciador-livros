<?php

namespace Gerenciamento\Livros\Controller;

class FormularioInsercaoUsuario extends ControllerCaminho implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('login/formularioNovaconta.php', [
      'titulo' => 'Cadastro Novo Usuario'
    ]);
  }
}
