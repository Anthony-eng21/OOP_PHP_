<?php 

//nice to make entire new objects in php not just shallow copies
//this makes a different object identifier changes we make to 
//$a do not affect $b nice right
class Beverage
{
    public $name;

    function __construct()
    {
        echo "New beverage was created" . "<br />";
    }
    function __clone()
    {
        echo "Existing beverage was copied" . "<br />";
    }
}

//created()/ __construct() / obj::coffee
$a = new Beverage;
$a->name = "coffee";
echo $a->name . "<br />" ;
echo "<hr />";

//copied object __clone() / coffee cofee
//clone instances not classes
$b = clone $a;
echo $a->name . "<br />" ;
echo $b->name . "<br />" ;

echo "<hr />";

//we can change the name here withour mutating the orginal field
//because this is a seperate instance
$b->name = "tea";
echo $a->name . "<br />" ;
echo $b->name . "<br />" ;

echo "<hr />";
//Assignment By Reference 
//the reverse of cloning lol 

//this changes the memory of b to refer to c in memory 
$c = &$b;
$c->name = "Orange Juice";
echo $a->name . "<br />" ;
echo $b->name . "<br />" ;
echo $c->name . "<br />" ;

echo "<hr />"
?>