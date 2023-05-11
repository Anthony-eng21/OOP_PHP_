<?php 
//STATIC PROPERTIES AND METHODS 
class Student
{
    public static $grades = ['Freshmen', 'Sophmore', 'Junior', 'Senior'];
    private static $total_students = 0;

    public static function motto()
    {
        return "To learn PHP OOP";
    }

    public static function count()
    {
        return self::$total_students;
    }

    public static function add_student()
    {
        //in the class we use self and the scope res to refer to props methods etc
        self::$total_students++;
    }

}
echo "STATIC PROPERTIES AND METHODS;" . "<hr />";
//outside the class we use {Student} / objName and the scope res to refer to props methods etc
echo Student::$grades[0] . "<br />";
echo Student::$grades[1] . "<br />";
echo Student::$grades[2] . "<br />";
echo Student::$grades[3] . "<br />";

echo Student::motto() . "<br />";


echo Student::count() . "<br />";

echo Student::add_student();

echo Student::count() . "<br />";

//STATIC PROPERTIES AND METHODS ARE INHERITED;
echo "STATIC PROPERTIES AND METHODS ARE INHERITED;" . "<hr />";
class PartTimeStudent extends Student
{
    
}
echo PartTimeStudent::$grades[0] . "<br />";
echo PartTimeStudent::motto() . "<br />";

//Changes/mutations are shared among classes
PartTimeStudent::$grades[] = 'Alumni' . "<br />";

echo implode(', ', Student::$grades) . "<br />";

Student::add_student();
Student::add_student();
Student::add_student();
Student::add_student();
PartTimeStudent::add_student();

//From an idle perspective we'd think that the same value wouldnt print for the Child Class 
//but we know that their class values mutate together 
echo Student::count() . "<br />";
echo PartTimeStudent::count() . "<br />";
echo PartTimeStudent::count() . "<br />";
?>