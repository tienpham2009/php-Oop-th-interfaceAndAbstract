<?php
//namespace Animals;
//use AbstractClass\Animal;
//include_once (dirname(__FILE__) . "/../vendor/autoload.php");
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once(dirname(__FILE__) . '/../interfaceClass/Edible.php');
class Chicken extends Animal implements Edible {
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat(): string
    {
       return "could be fried";
    }


}
