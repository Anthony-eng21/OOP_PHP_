<?php 

//runs auto load to sort and find classes that here are undefined
//this is a real magic function
//SAFETY NET for when we have undefined classes 
function my_autoload($class)
{
    //regex only true for word chars helps with injection 
    if(preg_match('/\A\w+\Z/', $class))
    include 'classes/' . $class . 'class.php';
}

//Helps prevent errors and manage memory resources
spl_autoload_register('my_autoload');


$bike = new Bicycle;
$bike->brand = 'Trek';
echo $bike->brand;
?>