<?php
class Shape {
    public function draw() {
        echo "Drawing a shape<br>";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle<br>";
    }
}

class Square extends Shape {
    public function draw() {
        echo "Drawing a square<br>";
    }
}

$shapes = [new Shape(), new Circle(), new Square()];

foreach ($shapes as $shape) {
    $shape->draw();  // Calls appropriate draw method
}
?>
