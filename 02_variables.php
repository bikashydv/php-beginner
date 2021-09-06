<?php

// What is a variable
// a variable is the name of memory location  that hold   data .in php variable declare with $
// Variable types
/*string
        integer
        float 
        boolean
        array
        object 
        null
      */
// Declare variables
$name = 'bikash';
$age = 20;
$isMale = true;
$height = 1.88;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $isMale, $height, $age, $salary);
// Change the value of the variable
$name = true;

// Print type of the variable
echo gettype($name);
// Variable checking functions
is_string($name);  //false
is_int($age);      //true
is_bool($isMale);  //true
is_double($height); //true

// Check if variable is defined
isset($name);   //true
isset($address); //false
// Constants
define('PI', 3.14);
echo  PI . '<br>';

// Using PHP built-in constants

echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
