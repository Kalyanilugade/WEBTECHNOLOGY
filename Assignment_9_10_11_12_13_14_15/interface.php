<?php
interface Animal{
    public function makeSound();
}

class Dog implements Animal{
    public function makeSound(){
        echo "dog say: helloo <br>";
    }
}

class Cat implements Animal{
    public function makeSound(){
        echo "cat say: Good morning <br>";
    }
}

$dog=new Dog();
$cat=new Cat();
$dog->makeSound();
$cat->makeSound();
?>