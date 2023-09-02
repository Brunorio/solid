<?php 
/*

Open Closed Principle
- Objetos ou entidades devem estar abertos para extensão, mas fechados para modificação
O = Código existente não deve ser modificado para adicionar novas funcionalidades, mas sim extendido
Usar herança para criar novos comportamentos ao invés de modificar a funçõa base

*/

class Television {
  private string $model;

  public function changeChannel(){
    if($this->model == 'Cube'){/*...*/}
    else if($this->model == 'Smart'){/*...*/}
  }
}