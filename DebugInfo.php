<?php

require_once "Student.php";


$student = new Student();
$student->setName("Fahmi Ihsan Firdaus");
$student->setAge(12);
$student->setAddress("Perumahan Muktiwari");

var_dump($student);
