<?php
// Function to add two numbers
function add($a, $b) {
    return $a + $b;
}

// Function to calculate factorial
function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}

// Function to find greatest number
function greatest($a, $b, $c) {
    return max($a, $b, $c);
}

// Call the functions
echo "Sum of 10 and 5: " . add(10, 5) . "<br>";
echo "Factorial of 5: " . factorial(5) . "<br>";
echo "Greatest among 10, 20, 15: " . greatest(10, 20, 15) . "<br>";
?>
