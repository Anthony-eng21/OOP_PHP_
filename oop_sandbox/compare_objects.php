<?php
//compares props of the object and memory identifier if the props change in a clone new identifier is made 
class Box {
  public $name="box";
}

$box = new Box;

//EXACT SAME
//asignment by reference point to the same identifier in memory
$box_reference = $box;

//NOT THE SAME
//different piece of memory whole other identifier string
$box_clone = clone $box;

$box_modified = clone $box;
$box_modified->name = "changed box";

$another_box = new Box;


// == is casual and just checks if all property values are equal
echo 'Reference: ' . ($box == $box_reference ? 'T' : 'F') . '<br />'; //T Reference 
echo 'Cloned: ' . ($box == $box_clone ? 'T' : 'F') . '<br />'; //T Cloned
echo 'Modified: ' . ($box == $box_modified ? 'T' : 'F') . '<br />';//F Modified: changed property 
echo 'Another: ' . ($box == $another_box ? 'T' : 'F') . '<br />';// T BOTH ARE INSTANCES    

echo "<hr />";

// === is strict and checks if they reference the same object
//this one is true because did a direct obj reference and didnt make a clone on that expression
echo 'Reference: ' . ($box === $box_reference ? 'T' : 'F') . '<br />'; // Reference: T 
//these are clones so they have different memory identifiers
echo 'Cloned: ' . ($box === $box_clone ? 'T' : 'F') . '<br />'; // Cloned: F
echo 'Modified: ' . ($box === $box_modified ? 'T' : 'F') . '<br />';// Modified F
echo 'Another: ' . ($box === $another_box ? 'T' : 'F') . '<br />'; //Another F

?>
