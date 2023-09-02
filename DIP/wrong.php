<?php 

/*

Dependency Inversion Principle
- Dependa de abstrações e não de implementações
D = Classes high-level não devem depender diretamente de classes low-level
Se uma classe de alto nível (high-level) depende de uma classe de baixo nível (low-level) e a classe de baixo nível pode ter diferentes formas de funcionamento, para evitar acoplamento forte, é aconselhável criar interfaces ou classes abstratas para a classe de alto nível e utilizar a técnica de injeção de dependência.

*/

class Movie {
  private string $name;
  private ActionCategory $category;

  public function __construct(string $name, ActionCategory $category) {

  }

  public function getCategory(){
    return $this->category;
  }
}

class ActionCategory {

}