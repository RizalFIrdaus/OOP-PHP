<?php


require_once "Student.php";


$student = new Student();
$student->setName("Rizal");
$student->setAge(22);
$student->setAddress("Perumahan Muktiwari");
echo $student;
