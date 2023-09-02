<?php 

/*

Liskov Substitution Principle
- Uma classe derivada deve ser substituível por sua classe base
L = Se for extender uma classe, mantenha o princípio de funcionamento dela e de seus métodos originais

*/

class AuthIntern {
  public function checkCredentials(string $email, string $password){
    // do something 
    return true;
  }
}

class AuthApi extends AuthIntern {
  public function checkCredentials(string $email, string $password){
    // do something 
    return ['auth' => true, 'status' => 200];
  }
}