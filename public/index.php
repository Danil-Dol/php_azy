<?php

require_once("../vendor/autoload.php");

use App\Performance;
use \App\Student;
use App\Tutor;
use App\Person;

$student1 = new Student("Ольга", 17, [3,4,5,3,4]);
$student1->setAge(22);
print($student1->getAge());
print("<br>");
print($student1->takeExam());
$student1->play();
$student1->rest();
$student1->addMark(5)->addMark(4)->addMark(4);
//$student1->live();



$avg = Performance::avg($student1->marks);
print($avg);
print("<br>");
print(Performance::$minMark);

#print($student1->name." ");
#print($student1->age);
/*print_r($student1->marks);
$student1->addMark(5)->addMark(4)->addMark(4);
print_r($student1->marks);
print($student1->addMark(3) -> addMark(3) -> avgMarks());
//print($student1->study());


$tutor = new Tutor("Олег", 20, [4,5], "П-11");
print($tutor->group);
$tutor->study();*/
