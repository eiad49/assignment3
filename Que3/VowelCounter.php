<?php
function countVowelsInString($inputString) {
    // Convert the input string to lowercase
    $inputString = strtolower($inputString);

    // Define an array of lowercase vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Initialize a count for vowels
    $vowelCount = 0;

    // Remove non-alphabetic characters
    $inputString = preg_replace("/[^a-z]/i", '', $inputString);

    // Iterate through the cleaned string
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

// Example usage
$inputString = "Hello, world!";
$result = countVowelsInString($inputString);
echo $result;
?>
