<?php
class Student {
    public $name;
    public $age;
    public $marks;
    public $cgpa;

    // Constructor
    function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    // Display method
    function display() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age <br>";
        echo "Marks: $this->marks <br>";
        echo "CGPA: $this->cgpa <br><br>";
    }
}

$stu1 = new Student("kalyani", 20, 450, 8.9);
$stu1->display();
?>
