<?php

//Example of extending/overriding parents static method 
class Chef
{
    public static function make_dinner()
    {
        echo "Cooking Le Comida.<br />";
    }
}


class AmateurChef extends Chef
{
    public static function make_dinner()
    {
        echo "Reading Recipe.<br />";
        parent::make_dinner();
        echo "Cleaning up mess.<br />";
    }
}

echo "Chef:<br />";
Chef::make_dinner();
echo "<br />";

echo "<hr />";

echo "Amateur Chef";
AmateurChef::make_dinner();

//Example of using parents static method as a fallback

class Image
{
    public static $resize_enabled = true;
    public static function geometry()
    {
        echo "800x600";
    }
}

class ProfileImage extends Image
{
    //overriding parent static method
    public static function geometry()
    {
        if (self::$resize_enabled) { //helper property to set dimensions accordingly to the class extended from Image
            echo "100x100";
        } else {
            parent::geometry(); //fallback static method we want to never change
        }
    }
}

echo Image::geometry() . "<br />"; // 800x600
echo ProfileImage::geometry() . "<br />"; //100x100

echo Image::$resize_enabled = false; //disable the resize so on the next call it'll just default to the default else case 
echo ProfileImage::geometry() . "<br />"; //800x600 weird? ^^^^^^^
?>