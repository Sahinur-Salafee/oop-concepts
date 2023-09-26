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
}

class FavColor {

    public $data;
    public $color;

    function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new MyColor($color); // Call another object
    }

    public function updateColor($color) {
        $this->color = $color;
    }

    function __clone()
    {
        $this->color = clone $this->color;
    }
}

$f1 = new FavColor('Some data', 'Red');
// print_r($f1);
echo '<br>';

$f2 = clone $f1;
print_r($f2);
echo '<br>';
$f2->updateColor('Green');
print_r($f1);
echo '<br>';
print_r($f2);
