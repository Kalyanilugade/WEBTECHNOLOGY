<?php
abstract class Animal {
    abstract public function sound();

    public function eat() {
        echo "Eating food...<br>";
    }
}

class Cow extends Animal {
    public function sound() {
        echo "Cow says: Moo!<br>";
    }
}

$cow = new Cow();
$cow->sound();
$cow->eat();
?>
