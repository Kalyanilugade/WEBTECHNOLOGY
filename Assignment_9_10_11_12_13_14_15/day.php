<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dayNumber = $_POST["dayNumber"];

    switch ($dayNumber) {
        case 1:
            echo "Today is Monday";
            break;
        case 2:
            echo "Today is Tuesday";
            break;
        case 3:
            echo "Today is Wednesday";
            break;
        case 4:
            echo "Today is Thursday";
            break;
        case 5:
            echo "Today is Friday";
            break;
        case 6:
            echo "Today is Saturday";
            break;
        case 7:
            echo "Today is Sunday";
            break;
        default:
            echo "Invalid day number!";
            break;
    }
} else {
    echo "Please submit the form.";
}
?>
