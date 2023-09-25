<?php
function removeEvenNumbers($numbers) {
    // Initialize an empty array to store the result
    $result = [];

    // Loop through the input array and keep only odd numbers
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }

    // Print the resulting array
    print_r($result);
}

// Create an array containing the numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the input array
removeEvenNumbers($numbers);
?>
