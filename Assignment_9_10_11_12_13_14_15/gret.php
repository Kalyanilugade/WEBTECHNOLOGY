
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $greatest = $num1;

    if ($num2 > $greatest) {
        $greatest = $num2;
    }

    if ($num3 > $greatest) {
        $greatest = $num3;
    }

        echo "<h2>The greatest number is: $greatest</h2>";
    } else {
        echo "Please submit the form.";
    }
?>
