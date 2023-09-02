<?php 

/*

Interface Segregation Principle
I = Uma classe não deve ser forçada a implementar interfaces e métodos que não irão utilizar
Dividir uma interface abrangente em várias interfaces específicas, facilitando a divisão do código

*/

interface Vehicle {
  public function accelerate(int $value);
  public function break(int $value);
  public function shiftGears(int $value);
}

class Car implements Vehicle {
  public function accelerate(int $value){/*...*/}
  public function break(int $value){/*...*/}
  public function shiftGears(int $value){/*...*/}
}

class AirPlane implements Vehicle {
  public function accelerate(int $value){/*...*/}
  public function break(int $value){/*...*/}

  // not applicable but need to implement
  public function shiftGears(int $value){/*...*/}
}

class Boat implements Vehicle {
  public function accelerate(int $value){/*...*/}
  public function break(int $value){/*...*/}

  // not applicable but need to implement
  public function shiftGears(int $value){/*...*/}
}