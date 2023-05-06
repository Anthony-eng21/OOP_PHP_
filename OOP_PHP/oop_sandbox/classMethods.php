<?php

class Student
{
    var $first_name;
    var $last_name;
    var $country = "None";

    function say_hello()
    {
        return "hello world";
    }

    //this refers to this current instance / object
    function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

$student1 = new Student; //instance

$student1->first_name = "Lucy";
$student1->last_name = "Jillings";

/* --- */

$student2 = new Student; //instance

$student2->first_name = "Jenny";
$student2->last_name = "Smith";


echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";

//CLASS METHODS 
echo $student1->say_hello() . "<br />";
echo $student1->say_hello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Class Methods: " . implode(', ', $class_methods) . "<br />";

if (method_exists('Student', 'say_hello')) 
{
    echo "Method say_hello() exists in Student class.<br />";
} else 
{
    echo "Method say_hello() doesn't exists in Student class.<br />";
}

?>