<?php

class Sofa 
{

  public static $instance_count = 0;

  public $seats = 3;
  public $arms = 2;

  //associative arr design pattern and constructor method arguments
  //to organize our input data we're going to make our arguments 
  //iterable and tracked for easier reference and organization
  public function __construct($args=[])
  {
    self::$instance_count++; //counts how many times we instanciated a new class
    //use new value if you have it or fallback to the default
    $this->seats = $args['seats'] ?? $this->seats; //set amount with ['seats' = #] || default prop value
    $this->arms = $args['b '] ?? $this->arms;
  }

  //best practice to use after last instance of this class
  //unsets our instances when our script terminates execution
  //so here for the three instances this will echo (ByeByeBye)
  //used rarely most useful when logging and cleanup functions
  public function __destruct()
  {
    echo "Instance Count: " . self::$instance_count-- . "<br />";
  }

  public function __clone()
  {
    self::$instance_count++;
  }
}

class Couch extends Sofa 
{
  var $arms = 0;
}

class Loveseat extends Sofa 
{
  var $seats = 2;
}

//associative arr make it nice, yes
$sofa = new Sofa(['seats' => 3, 'arms' => 2]);
echo 'Sofa<br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';


$couch = new Couch(['seats' => 4, 'arms' => 2]);
echo 'Couch<br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

// unset($sofa); 
$loveseat = new Loveseat(['arms' => 0]);
echo 'Loveseat<br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

// echo 'Instance count: ' . Sofa::$instance_count . '<br />';s

?>
