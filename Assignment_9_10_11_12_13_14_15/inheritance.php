<?php
class Vehicle {
    public $brand = "Generic Vehicle";

    public function start() {
        echo "$this->brand is starting...<br>";
    }
}

class Car extends Vehicle {
    public $brand = "Car";

    public function honk() {
        echo "$this->brand says: Beep Beep!<br>";
    }
}

$car = new Car();
$car->start();  // Inherited method
$car->honk();   // Child class method
?>
