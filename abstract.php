<?php

abstract class Shape {

    abstract function getArea();
    abstract function getPerimeter();

}

class Rectangle extends Shape {

    private $base, $height;

    function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base) {
        $this->base = $base;
    } 
    
    public function setHeight($height) {
        $this->height = $height;
    }

    function getArea(){
        return $this->base*$this->height;
    }

    function getPerimeter()
    {
        
    }
}

class Triangel extends Shape {

    private $base, $height;

    function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    function getArea(){
        return $this->base * $this->height;
    }

    function getPerimeter()
    {
        
    }
}

$shape1 = new Triangel(10,5);
echo $shape1->getArea();


// Final keyword
// You can't override the final method in another child class.

abstract class OurClass {

    final function doSomething() {
        echo "<br>Do Something";
    }
}

class myClass extends OurClass {

}

$m1 = new myClass();
$m1->doSomething();


