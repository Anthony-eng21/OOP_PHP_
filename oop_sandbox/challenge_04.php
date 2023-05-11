<?php

use Bicycle as GlobalBicycle;
use Unicycle as GlobalUnicycle;

class Bicycle
{
    public static $instance_count = 0; //state var increments on new instances

    public $brand;
    public $model;
    public $year;
    public $category;
    public $description = "Used bicycle";
    private $weight_kg = 0.0;
    protected static $wheels = 2;

    //added feautre
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    //BASICALLY CONSTRUCTOR LOL
    public static function create()
    {
        $class_name = get_called_class(); // this is the class at runtime so instance / retrieve a string of this cur class name
        $obj = new $class_name; //Instance expects a class or string 
        //obj = new static      // self & static work 
        self::$instance_count++; //shared variable so we use self here 
        return $obj; //set this here to be use so we can instanciate   
    }
    
    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public static function wheel_details()
    {
        //if we used self here it would pointed at Bicycle with binding 
        //but for late static binding we use static for operations at runtime
        $wheel_string = static::$wheels == 1 ? "1 wheel." : static::$wheels . " wheels.";
        return "Has " . $wheel_string . ".";
    }

    //these methods have access to this private property
    public function weight_kg()
    {
        return $this->weight_kg . " kg.";
    }

    public function set_weight_kg($value)
    {
        return $this->weight_kg = floatval($value);
    }

    //kg => lb CONVERSION
    public function weight_lbs()
    {
        $weight_lbs =  floatval($this->weight_kg) * 2.2046226218;
        return $weight_lbs . " lbs";
    }

    public function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

}

class Unicycle extends Bicycle
{
    protected static $wheels = 1;

    public function bug_test()
    {
        return $this->weight_kg;
    }
}

$trek = new Bicycle;
$trek->brand = "Trek";
$trek->model = "Drity";
$trek->year = "2023";

echo "Bicycle count: " . Bicycle::$instance_count . "<br />";
echo "Unicycle count: " . Unicycle::$instance_count . "<br />";

//instances
$bike = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle count: " . Bicycle::$instance_count . "<br />";
echo "Unicycle count: " . Unicycle::$instance_count . "<br />";

echo "<hr />";
echo "Categories: " . implode(", ", Bicycle::CATEGORIES) . "<br />";
$trek->category = Bicycle::CATEGORIES[0];
echo "Category: " . $trek->category . "<br />";


echo "Bicycle: " . Bicycle::wheel_details() . "<br />";
echo "Unicycle: " . Unicycle::wheel_details() . "<br />";
echo "<hr />"
?>