<?php

abstract class Animal{
    protected $legs;

    public function legs(){
        return $this->legs;
    }
    abstract public function setLegs($legs);
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

class PrintOut{
    public $animals;
    public function __construct(Animal ...$animals)
    {
         $this->animals = $animals;
    }

    public function output(){
        foreach($this->animals as $animal){
            echo get_class($animal)."has ". $animal->legs()."legs";
        }
    }
}


$dog = new Dog();
$dog->setLegs(4);
$human = new Human();
$human->setLegs(2);


$printOut = new PrintOut($dog,$human);
$printOut->output();
