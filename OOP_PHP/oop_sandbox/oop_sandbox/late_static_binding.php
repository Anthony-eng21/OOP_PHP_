<?php

class Sofa 
{
  protected static $identity = 'Sofa class';

  public static function identity_test() 
  {
    echo 'self: ' . self::$identity . "<br />";
    echo 'static: ' . static::$identity . "<br />";

    echo 'get_class: ' . get_class() . "<br />"; //class in memory 
    echo 'get_called_class: ' . get_called_class() . "<br />"; //class at runtime 
  }

}

class Loveseat extends Sofa 
{
  protected static $identity = 'Loveseat class';
}

Sofa::identity_test();
echo "<hr />";
Loveseat::identity_test();


//SOFA
// self: Sofa class
// static: Sofa class
// get_class: Sofa
// get_called_class: Sofa
/* ------- */
//LOVESEAT
// self: Sofa class
// static: Loveseat class
// get_class: Sofa
// get_called_class: Loveseat
?>