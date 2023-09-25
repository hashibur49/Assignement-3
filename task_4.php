<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($grades) / count($grades);

        // Print the average grade for the student
        echo "Average grade for $student: $averageGrade\n";
    }
}

// Create a multidimensional array to store the grades of three students
$studentGrades = [
    'Student 1' => ['Math' => 80, 'English' => 95, 'Science' => 74],
    'Student 2' => ['Math' => 81, 'English' => 96, 'Science' => 75],
    'Student 3' => ['Math' => 82, 'English' => 97, 'Science' => 76],
];

// Call the function with the student grades array
calculateAverageGrades($studentGrades);
?>