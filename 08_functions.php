<?php

// Function which prints "Hello I am Zura"
// function hello()
// {
//     echo "hello i am bikah";
// }

// hello();
// hello();


// Function with argument
function hello($name)
{
    echo "hello i am $name" . '<br>';
}

hello('bikash');

// Create sum of two functions

// function sum($a, $b)
// {
//     return $a + $b;
// }
// echo sum(4, 5);

// Create function to sum all numbers using ...$nums
// function sum(...$nums)
// {
//     // echo '<pre>';
//     // var_dump($nums);
//     // echo '</pres>';
//     $sum = 0;
//     foreach ($nums as $n) {
//         $sum += $n;
//     }
//     return $sum;
// }
// echo sum(1, 2, 3, 4, 5, 6);

// Arrow functions\
function sum(...$nums)
{
    return  array_reduce($nums, fn ($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 5, 6);
