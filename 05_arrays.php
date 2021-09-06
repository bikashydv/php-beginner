<?php

// // Create array
// $fruits = ["banana", "mango", "apple", "orange"];
// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Get element by index
// echo $fruits[1] . '<br>';

// // Set element by index
// $fruits[0] = 'peach';
// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Check if array has element at index 2
// isset($fruits[3]); //false

// // Append element
// $fruits[] = 'banana';
// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Print the length of the array
// echo count($fruits) . '<br>';

// // Add element at the end of the array
// array_push($fruits, 'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '<pre>';

// // Remove element from the end of the array
// echo array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Add element at the beginning of the array
// array_unshift($fruits, 'bik');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the beginning of the array
// echo array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Split the string into an array
// $string = "banana, Apple,peace";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// // Combine array elements into string
// echo implode("&", $fruits);

// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('apple', $fruits));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('mango', $fruits));
// echo '</pre>';

// // Merge two arrays
// $vegetables = ["potato", "cucumber"];
// echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
// var_dump([...$fruits, ...$vegetables]);
// echo '<pre>';

// // Sorting of array (Reverse order also)
// echo '<pre>';
// var_dump($fruits);
// echo '</pre';
// rsort($fruits);
// echo '<per>';
// var_dump($fruits);
// echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'bikash',
    'surname' => 'yadav',
    'age' => 30,
    'hobbies' => ['cri', 'video game' . 'travel']

];
echo '<pre>';
var_dump($person);
//print_r($person)
echo '</pre>';

// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['channel'] = 'darkbik';
echo '<pre>';
var_dump($person);
echo '</pre>';

//// Null coalescing assignment operator. Since PHP 7.4
// if (!isset($person['address'])) {
//     $person['address'] = 'unknown';
// }
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

$person['address']  ??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key


// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '<pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos = [
    ['title' => 'todo title 1', 'completed' => true],
    ['title' => 'todo title 2', 'completed' => false]
];

echo '<pre>';
var_dump($todos);
echo '</pre>';
