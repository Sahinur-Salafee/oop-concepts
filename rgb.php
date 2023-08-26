<?php

class RGB {
    private $color;
    public $red;
    public $green;
    public $blue;

    function __construct($colorCode='')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    function getColor() {
        return $this->color;
    }

    function setColor($colorCode) {
        $this->color = ltrim($colorCode, '#');
    }

    private function parseColor() {

        if($this-> color) {
            list($this-> red,$this-> green, $this-> blue) = sscanf($this->color, '%02x%02x%02x');
        } else {
            list($this-> red,$this-> green, $this-> blue) = array(0,0,0);
        }
    }

    function readRGBColor() {
        echo "Red = {$this->red} <br> Green = {$this->green}<br> Blue = {$this->blue}";
    }

    function getRed() {
        echo $this->red;
    }
    
    function getGreen() {
        echo $this->green;
    }

    function getBlue() {
        echo $this->blue;
    }

}

$myColor = new RGB('#1fb5ad');
$myColor->readRGBColor();
echo '<br>'; 
$myColor->getBlue();
echo '<br>';
