<?php

class Student
{

}

$classes = get_declared_classes(); //returns arr of built in PHP classes
echo "Classes: " . implode(',', $classes) . "<br/>";

$classNames = ['Product', 'Student', 'student']; //and the declared ones we look for here

//loop thorugh and tell us if there are declared classes or not 
foreach ($classNames as $className) {
    if (class_exists($className)) { //another helpful built in function
        echo "{$className} is a declared class. <br/>";
    } else {
        echo "{$className} is not a declared class. <br/>";
    }
}
?>