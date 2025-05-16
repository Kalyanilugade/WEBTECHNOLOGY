<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $sum = $a + $b + $c;

    echo "The sum of $a, $b and $c is: $sum";
} else {
    echo "Please submit the form.";
}
?>
