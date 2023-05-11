<?php

class Unicycle extends Bicycle
{
    protected static $wheels = 1;

    public function bug_test()
    {
        return $this->weight_kg;
    }
}

?>