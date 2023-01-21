<?php

require_once "Student.php";

$student1 = new Student();
$student2 = new Student();

$student1->setName("Rizal");
$student2->setName("Rizal");
$student1->setAge(22);
$student2->setAge(8);

var_dump($student1 === $student1);
