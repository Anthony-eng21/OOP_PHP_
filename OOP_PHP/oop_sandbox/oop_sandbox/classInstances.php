<?php

class Student
{
}

$student1 = new Student;
$student2 = new Student;

echo get_class($student1) . "<br/> ";

$class_names = ['Product', 'Student', 'student']; //and the declared ones we look for here
//loop thorugh and tell us if there are declared classes or not 
foreach ($class_names as $class_name) {
    if (is_a($student1, $class_name)) { //another helpful built in function
        echo "student1 is {$class_name}.<br/>";
    } else {
        echo "student1 is not a {$class_name}.<br/>";
    }
}

?>