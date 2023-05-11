<?php

class Student
{
    var $first_name;
    var $last_name;
    var $country = "None";
}

$student1 = new Student;//instance

$student1->first_name = "Lucy";
$student1->last_name = "Jillings";

/* --- */

$student2 = new Student;//instance

$student2->first_name = "Jenny";
$student2->last_name = "Smith";


echo $student1->first_name . " " . $student1->last_name . "<br />";;
echo $student2->first_name . " " . $student2->last_name . "<br />";;

//initial class information 
$class_vars = get_class_vars('Student'); //parent
echo "Class vars:<br/ >";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

//instanciated data
$object_vars = get_object_vars($student1); //instance 
echo "Class vars:<br/ >";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if(property_exists('Student', 'first_name')) {
    echo "property firstname exists in Student class.<br />";
} else {
    echo "property firstname doesn't exists in Student class.<br />";
}