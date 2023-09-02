<?php 

/*

Dependency Inversion Principle
- Dependa de abstrações e não de implementações
D = Classes high-level não devem depender diretamente de classes low-level
Se uma classe de alto nível (high-level) depende de uma classe de baixo nível (low-level) e a classe de baixo nível pode ter diferentes formas de funcionamento, para evitar acoplamento forte, é aconselhável criar interfaces ou classes abstratas para a classe de alto nível e utilizar a técnica de injeção de dependência.

*/

class Movie {
  private string $name;
  private Category $category;

  public function __construct(string $name, Category $category) {
    $this->name = $name;
    $this->category = $category;
  }

  public function getCategory(): Category{
    return $this->category;
  }
}

interface Category {}

class ActionCategory implements Category { }