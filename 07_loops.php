<?php

// while
// while (true){

// }


// Loop with $counter
$counter = 0;
// while ($counter < 10) {
//     echo $counter . '<br>';
//     // if ($counter === 5) {
//     //     break;
//     // }
//     $counter++;
// }


// do - while
// do {
//     echo $counter . '<br>';;
//     $counter++;
// } while ($counter < 0);


// for
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// foreach
$fruits = ["banana", "orange", "apple"];
foreach ($fruits as $i => $fruit) {
    echo $i . '' . $fruit . '<br>';
}

// Iterate Over associative array.

$person = [
    'name' => 'bikash',
    'surname' => 'yadav',
    'age' => 30,
    'hobbies' => ['cricket', 'video game'],

];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . '' . implode(",", $value) . '<br>';
    } else {
        echo $key . '' . $value . '<br>';
    }
}
