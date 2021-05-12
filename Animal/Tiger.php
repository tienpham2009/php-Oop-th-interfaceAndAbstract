<?php
//namespace Animals;
//use AbstractClass\Animal;
//include_once (dirname(__FILE__) . "/../vendor/autoload.php");
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
class Tiger extends Animal {
    public function makeSound(): string
    {
       return " Tiger roarrrrr!";
    }
}


