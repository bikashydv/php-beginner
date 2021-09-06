<?php
require_once "person.php";


class Student extends Person
{
    public string $studentId;

    public function __construct($name, $surname, $studentId)
    {
        Parent::__construct($name, $surname);
        $this->age = 18;
        $this->studentId = $studentId;
    }
}
