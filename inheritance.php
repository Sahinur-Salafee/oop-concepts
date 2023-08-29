<?php

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