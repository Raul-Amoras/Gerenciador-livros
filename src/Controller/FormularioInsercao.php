<?php

namespace Gerenciamento\Livros\Controller;

class FormularioInsercao extends ControllerCaminho implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('Livros/formulario.php', [
      'titulo' => 'Novo Livro'
    ]);
  }
}
