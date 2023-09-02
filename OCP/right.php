<?php 
/*

Open Closed Principle
- Objetos ou entidades devem estar abertos para extensão, mas fechados para modificação
O = Código existente não deve ser modificado para adicionar novas funcionalidades, mas sim extendido
Usar herança para criar novos comportamentos ao invés de modificar a funçõa base

*/

interface Television {
  public function turnOn();
  public function turnOff();
  public function changeChannel(int $channel);
}

class SmartTV implements Television {
  public function turnOn(){/*...*/}
  public function turnOff(){/*...*/}
  public function changeChannel(int $number) {/*...*/}
}

class CubeTV implements Television {
  public function turnOn(){/*...*/}
  public function turnOff(){/*...*/}
  public function changeChannel(int $number) {/*...*/}
}

function useTelevision(Television $tv) {
  $tv->turnOn();
  $tv->changeChannel(5);
  $tv->turnOff();
}