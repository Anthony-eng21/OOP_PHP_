<?php

use Bicycle as GlobalBicycle;

class Bicycle
{
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    private $weight_kg = 0.0;
    protected $wheels = 2;
    
    public function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public function wheel_details()
    {
        //dynamic to the property value looking for dat uni class lol
        $wheel_string = $this->wheels == 1 ? "1 wheel." : "{$this->wheels} wheels";
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

class Unicycle extends GlobalBicycle
{
    protected $wheels = 1;

    public function bug_test()
    {
        return $this->weight_kg;
    }
}

$uni = new Unicycle;

//TREK
$trek = new Bicycle;
$trek->brand = "TREK";
$trek->model = "Dirt Thumber";
$trek->year = 2023;

echo "Bicycle: " . $trek->wheel_details() . "<br/>";
echo "Unicycle: " . $uni->wheel_details() . "<br/>";
echo "<hr />";

echo "Set weight using kg. <br />";
//Setter
$trek->set_weight_kg(1);
//Getter
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";

echo "Set Weight using lbs. <br />";
$trek->set_weight_lbs(2); //setter
echo $trek->weight_kg() . "<br />"; //getter 
echo $trek->weight_lbs() . "<br />"; //getter

//this is a failed reference because we don't have ACCESS HERE!
// echo $uni->bug_test() . "<br />"; //getter
echo "<hr />";
