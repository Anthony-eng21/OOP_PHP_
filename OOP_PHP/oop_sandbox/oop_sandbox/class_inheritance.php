<?php 

class User 
{
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $user_name;

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User
{

    var $city;
    var $state;
    var $country;

    public function location()
    {
        return $this->city . " " . $this->state . ", " . $this->country;
    }
}

//modifying property for this class 
class AdminUser extends User
{
    var $is_admin = true;
    
    //overwriting P Method with php inheritance
    public function full_name()
    {
        return $this->first_name . " " . $this->last_name . " (Admin)";
    }
}

    $u = new User;
    $u->first_name = "i want to ";
    $u->last_name = "Seinfeld";
    $u->user_name = "jseinfeld";

    //should behave differently than User P => Class
    $c = new Customer;
    $c->first_name = "Tony";
    $c->last_name = "Woodworth";
    $c->user_name = "twoodworth";
    $c->city = "Los Angeles";
    $c->state = "California";
    $c->country = "USA";

    echo $u->fullName() . "<br />";
    echo $c->fullName() . "<br />";

    echo $c->location() . "<br />";

    if(is_subclass_of($c, 'User')) {
        echo "Instance is a subclass of user.<br />";
    }

    //defing subclasses to customize children class with parent logic
    $parents = class_parents($c);

    echo implode(', ', $parents) //Users
    
?>