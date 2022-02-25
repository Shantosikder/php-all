<?php

interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow \n Meow";
  }
}

$animal = new Cat();
$animal->makeSound();


?>