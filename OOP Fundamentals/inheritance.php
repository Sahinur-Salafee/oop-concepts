<?php

use Rectangle as GlobalRectangle;

class Animal {

    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function run () {
        echo "{$this->name} is Running<br>";
    }

    public function eat() {
        echo "{$this->name} is Eating<br>";
    }

    public function sleep() {
        echo "{$this->name} is Sleeping<br>";
    }

    protected function addTitle($title) {
        $this->name = $title . ' ' . $this->name;
    }
}

class Horse extends Animal {
    
    public function greeting() {
        echo "Nei<br>";
    }
}

class Man extends Animal {

    public function sayHi() {
        $this-> addTitle('Mr.');
        echo "{$this->name} can say hi";
    }
}

$horse1 = new Horse('Horse');
$horse1->eat();
$horse1->greeting();

$man1 = new Man('Rakib');
$man1->sleep();
$man1->sayHi();


class Shape {

}
class Shapes {

    private $shapes;

    function __construct()
    {
        $this->shapes = array();
    }

    function addShape(Shape $shape) { // set if the shape type is Shape
        array_push($this->shapes, $shape);
    }

    function totalShape() {
        return count($this->shapes);
    }
}

class Rectangle extends Shape {

}

class Triangle extends Shape {

}

class Peoples {

}

$shapeCollection = new Shapes();
$shapeCollection->addShape(new Rectangle());
$shapeCollection->addShape(new Triangle());
// $shapeCollection->addShape(new Peoples());
echo '<br>';
echo $shapeCollection->totalShape();