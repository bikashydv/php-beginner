<?php

// What is class and instance
require_once "person.php";
require_once "student.php";

$student = new Student("bikash", 'yadav', '12345');
echo '<pre>';
var_dump($student);
echo '<pre>';

// $p = new Person("bikash", "yadav");
// $p->setAge(30);

// echo '<pre>';
// var_dump($p);
// echo '<pre>';
// echo $p->getAge();

// $p2 = new Person('Jhon', 'smith');
// echo '<pre>';
// var_dump($p2);
// echo '</pre>';
// echo person::$counter;
// // echo Person::$getCounter();

// $p2 = new Person();
// $p2->name = 'bik';
// $p2->surname = 'yad';




// echo '<pre>';
// var_dump($p);
// echo '</pre>';




// ////////echo $p->name . '<br>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter