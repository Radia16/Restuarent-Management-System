<?php

class Animal{
    private $legs;

    public function legs(){
        return $this->legs;
     }
}
class Dog extends Animal{
    public function setLegs($legs){
        $this->legs = $legs;
    }
}
class Human extends Animal{
    public function setLegs($legs){
        $this->legs = $legs;
    }
}
class Cow extends Animal{
    public function setLegs($legs){
        $this->legs = $legs;
    }
}


$dog = new Dog();
$dog->setLegs(2);
echo $dog->legs();