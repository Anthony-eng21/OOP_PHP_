<?php 

class Clock 
{
    //like static properties but consts are immutable
    public const DAY_IN_SECONDS = 60 * 60 * 24;

    public function tomorrow()
    {
        //self helps php knows we are referring to this cur obj's const value
        return time() + self::DAY_IN_SECONDS;
    }
}

echo Clock::DAY_IN_SECONDS . "<br />";

$clock = new Clock;
echo $clock->tomorrow() . "<br />";
?>