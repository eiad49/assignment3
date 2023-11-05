<?php
// Define the array
$numbers = array(2, 4, 6, 8, 10);

// i. Print the first element of the array.
echo "i. First element of the array: " . $numbers[0] . "<br>";

// ii. Print the last element of the array.
echo "ii. Last element of the array: " . end($numbers) . "<br>";

// iii. Add a new element with the value of 12 to the end of the array.
$numbers[] = 12;
echo "iii. Array after adding 12 to the end: " . implode(", ", $numbers) . "<br>";

// iv. Calculate the sum of all the elements in the array and print the result.
$sum = array_sum($numbers);
echo "iv. Sum of all elements in the array: " . $sum . "<br>";
?>
