<?php

namespace Gerenciamento\Livros\Entity;

use DateTime;

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
   * @Column(type="string")
   */
  private $autor;
  /**
   * @Column(type="datetime")
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

  public function getAutor(): string
  {
    return $this->autor;
  }

  public function setAutor(string $autor): void
  {
    $this->autor = $autor;
  }

  public function getDataCadastro()
  {
    return $this->dataCadastro;
  }

  public function setDataCadastro()
  {
    $this->dataCadastro = new \DateTime("now");
  }
}
