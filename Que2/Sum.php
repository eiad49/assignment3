<?php
function countVowels($inputString) {
    // Define an array of lowercase vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    // Initialize a count for vowels
    $vowelCount = 0;

    // Remove non-alphabetic characters and convert to lowercase
    $cleanedString = preg_replace("/[^a-zA-Z]/", '', strtolower($inputString));

    // Iterate through the cleaned string
    for ($i = 0; $i < strlen($cleanedString); $i++) {
        $char = $cleanedString[$i];
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

// Example usage
$inputString = "Hello, world!";
$result = countVowels($inputString);
echo $result;
?>