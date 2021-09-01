<?php

namespace Gerenciamento\Livros\Entity;

/**
 * @Entity
 * @Table(name="livros")
 */
class Livros
{
  /**
   * @Id
   * @GeneratedValue
   * @Column(type="integer")
   */
  private $id;
  /**
   * @Column(type="string")
   */
  private $nome;
  /**
   * @GeneratedValue
   * @Column(type="string")
   */
  private $dataCadastro;

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getDataCadastro(): string
  {
    return $this->dataCadastro;
  }

  public function setDataCadastro(string $dataCadastro): void
  {
    $this->dataCadastro = $dataCadastro;
  }
}
