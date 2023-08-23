<?php 

class Human {
    public $name;
    function sayHi() {
        echo "Salaaam";
    }

    function sayName() {
        echo "My Name is {$this->name}";
    }
}

class Cat {
    function sayHi() {
        echo "Meow";
    }
}

class Dog {
    function sayHi() {
        echo "Woof";
    }
}

$h1 = new Human();
$h1->name = 'Salafee'; // set name
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
echo "<br>";
$h1->sayName(); // getname
echo "<br>";
$c1 -> sayHi();
echo "<br>";
$d1 -> sayHi();