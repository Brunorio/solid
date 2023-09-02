<?php 
/* 

Single Responsibility Principle 
S = Cada classe deve ter apenas uma responsabilidade

*/

class Order {
  public function calculateTotalSum(){/*...*/}
  public function getItems(){/*...*/}
  public function getItemCount(){/*...*/}
  public function addItem($item){/*...*/}
  public function deleteItem($item){/*...*/}

  public function printOrder(){/*...*/}
  public function showOrder(){/*...*/}

  public function load(){/*...*/}
  public function save(){/*...*/}
  public function update(){/*...*/}
  public function delete(){/*...*/}
}

