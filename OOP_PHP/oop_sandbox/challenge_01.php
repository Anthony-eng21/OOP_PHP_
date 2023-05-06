<?php

class Bicycle
{
    var $brand;
    var $model;
    var $year;
    var $description = "Used bicycle";
    var $weight_kg = 0.0;

    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    //kg => lb CONVERSION
    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }

}

//TREK
$trek = new Bicycle;
$trek->brand = "TREK";
$trek->model = "Dirt Humper";
$trek->year = 2023;
$trek->weight_kg = 1.0;

//CANNONDALE
$cd = new Bicycle;
$cd->brand = "CANNONDALE";
$cd->model = "Mud Slammer";
$cd->year = 2023;
$cd->weight_kg = 2.0;

//CALLS
echo $trek->name() . "<br />";
echo $cd->name() . "<br />";

echo $trek->weight_kg . "<br />"; //PROP
echo $trek->weight_lbs() . "<br />"; //METHOD

//Another way to set value of weight
$trek->set_weight_lbs(2);

echo $trek->weight_kg . "<br />"; //PROP
echo $trek->weight_lbs() . "<br />"; //METHOD
?>
