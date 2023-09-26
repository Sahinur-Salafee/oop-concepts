<?php

class MyColor {

    public $color;

    function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color) {
        $this->color = $color;
    }

    // toString magic method convert a object into a string
    // This feature is very helpful for error reportings.
    function __toString()
    {
        return "The color is {$this->color}";
    }
}

$c1 = new MyColor("red");
echo $c1;