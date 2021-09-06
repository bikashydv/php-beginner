<?php

$age = 20;
$salary = 300000;

// // Sample if
// if ($age === 20) {
//     echo "1";
// }

// // Without circle braces
// if ($age === 20) echo "1";

// // Sample if-else
// if ($age > 20) {
//     echo "1";
// } else {
//     echo "2";
// }

// Difference between == and ===
$age == 20; //true
$age == '20'; //true

$age === 20; //true
$age === '20'; //false

// if AND
if ($age > 20 || $salary === 300000) {
    echo "Do something";
}

// if OR

// Ternary if
echo $age < 10 ? 'young' : 'old';

// Short ternary

$MyAge = $age ?: 18;
echo '<pre>';
var_dump($MyAge);
echo '</pre>';

// Null coalescing operator
$MyName = isset($name) ? $name : 'john';
$MyName = $name ?? 'john';


// switch

$userRole = 'user '; //editor, user ,admin 
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'admin';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'invalid role';
}
