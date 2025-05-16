<?php
echo "<h2>PHP Array Functions</h2>";

// Sample array
$fruits = ["apple", "banana", "mango", "orange"];

// 1. Print original array
echo "<b>Original Array:</b><br>";
print_r($fruits);
echo "<br><br>";

// 2. Count elements
echo "<b>Count:</b> " . count($fruits) . "<br><br>";

// 3. Add element at end (push)
array_push($fruits, "grape");
echo "<b>After array_push('grape'):</b><br>";
print_r($fruits);
echo "<br><br>";

// 4. Remove last element (pop)
array_pop($fruits);
echo "<b>After array_pop():</b><br>";
print_r($fruits);
echo "<br><br>";

// 5. Add at beginning (unshift)
array_unshift($fruits, "kiwi");
echo "<b>After array_unshift('kiwi'):</b><br>";
print_r($fruits);
echo "<br><br>";

// 6. Remove first element (shift)
array_shift($fruits);
echo "<b>After array_shift():</b><br>";
print_r($fruits);
echo "<br><br>";

// 7. Sort array
sort($fruits);
echo "<b>Sorted array:</b><br>";
print_r($fruits);
echo "<br><br>";

// 8. Reverse sort
rsort($fruits);
echo "<b>Reverse Sorted array:</b><br>";
print_r($fruits);
echo "<br><br>";

// 9. Search in array
$index = array_search("banana", $fruits);
echo "<b>Index of 'banana':</b> $index <br><br>";

// 10. Check if value exists
if (in_array("apple", $fruits)) {
    echo "<b>'apple' exists in array.</b><br><br>";
}

// 11. Merge arrays
$veg = ["carrot", "tomato"];
$merged = array_merge($fruits, $veg);
echo "<b>Merged Array (fruits + veg):</b><br>";
print_r($merged);
echo "<br><br>";

// 12. Slice array
$sliced = array_slice($merged, 2, 3);
echo "<b>Slice of merged array (index 2 to 4):</b><br>";
print_r($sliced);
echo "<br><br>";

// 13. Remove duplicates
$dup = ["a", "b", "a", "c", "b"];
$unique = array_unique($dup);
echo "<b>Array after removing duplicates:</b><br>";
print_r($unique);
echo "<br><br>";

// 14. Combine keys and values
$keys = ["name", "age"];
$values = ["John", 25];
$combined = array_combine($keys, $values);
echo "<b>Combined array:</b><br>";
print_r($combined);
echo "<br><br>";
?>
