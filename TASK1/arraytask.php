<?php

// Task 1
$colors = array('red', 'green', 'white');
$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo $paragraph . "<br>";

// Task 2
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul><br>";

// Task 3
$cities = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid");
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}

// Task 4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo "Expected Output: " . reset($color) . "<br>";

// Task 5
$array = array(1, 2, 3, 4, 5);
$location = 4;
$newItem = '$';
array_splice($array, $location-1, 0, $newItem);
print_r($array);
echo "<br>";

// Task 6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}

// Task 7
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowestTemps = array_slice($temperatures, 0, 5);
$highestTemps = array_slice($temperatures, -5);
echo "Average Temperature is: $average<br>";
echo "List of five lowest temperatures: " . implode(', ', $lowestTemps) . "<br>";
echo "List of five highest temperatures: " . implode(', ', $highestTemps) . "<br>";

// Task 8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultArray = array_merge_recursive($array1, $array2);
print_r($resultArray);
echo "<br>";

// Task 9
$colors = array("red", "blue", "white", "yellow");
$uppercasedColors = array_map('strtoupper', $colors);
print_r($uppercasedColors);
echo "<br>";

// Task 10
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
$lowercasedColors = array_map('strtolower', $colors);
print_r($lowercasedColors);
echo "<br>";

// Task 11
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ', ';
    }
}
echo "<br>";

// Task 12
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$lengths = array_map('strlen', $words);
$shortest = min($lengths);
$longest = max($lengths);
echo "The shortest array length is $shortest. The longest array length is $longest.<br>";

// Task 13
$uniqueRandomNumbers = array_unique(array_rand(range(11, 20), 10));
print_r($uniqueRandomNumbers);
echo "<br>";

// Task 14
$array1 = array(2, 0, 10, 12, 6);
$nonZeroIntegers = array_filter($array1, function($value) { return $value !== 0; });
$lowestInteger = min($nonZeroIntegers);
echo "Sample Output: $lowestInteger<br>";

?>
