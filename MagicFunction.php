<?php


require_once "Student.php";

// TO STRING
$student = new Student();
$student->setName("Rizal");
$student->setAge(22);
$student->setAddress("Perumahan Muktiwari");
// echo $student;

// INVOKE
$student1 = new Student();
$student1(1, 2, 3, 5);
