<?php

use Student as GlobalStudent;

class Student
{
    public $first_name;
    public $last_name;
    public $country = "None";


    protected $registration_id;
    private $tuition = "3000.00";

    //this refers to this current instance / object
    public function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
    
    //available everywhere 
    public function hello_world()
    {
        return "hello world";
    }

    //accessible in the classes code and in it's subclasses
    protected function hello_family()
    {
        return "hello family";
    }

    //only available in the Parent classes code
    private function hello_me()
    {
        return "hello me";
    }

    public function tuition_fmt()
    {
        return '$' . $this->tuition;
    }

}

class PartTimeStudent extends Student
{
    public function hello_parent()
    {
        return $this->hello_family();
    }
}

$student1 = new PartTimeStudent; //instance

$student1->first_name = "Lucy";
$student1->last_name = "Jillings";

/* --- */
// echo $student1->tuition; private prop
echo $student1->full_name() . "<br />";

echo $student1->hello_parent() . "<br />";

/*OVERLOADING: How PHP handles calls
/to props and methods which do not exist
or are not visible /

/Dynamic values because the behavior is somewhat mutable

/Behaviors of overloading
1) GET value of undefined property:notice (PartTimeStudent::tuition)
2)SET value of undefined property: define and set adding onto a nonexistent 
obj value(prop, method) and basically writing to it
3) Private properties may seem to be visible in subclasses /
*/

// $student1->tuition = 1000;
// echo $student1->tuition . "<br />" 
echo $student1->tuition_fmt() . "<br />" 
?>