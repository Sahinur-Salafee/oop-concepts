<?php 
include './class-scope.php';
exit();
class Human {
    public $name;
    public $age;

    function __construct($personName,$age = 0)
    {
        $this->name = $personName;
        $this->age = $age;
    }

    function sayHi() {
        echo "Salam <br>";
        $this-> sayName();
    }

    function sayName() {
        if($this->age) {
            echo "My Name is {$this->name} I am {$this->age} years old";
        } else {
            echo "My name is {$this->name} I don't know how old I am";
        }
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

// Setter
$h1 = new Human('Salafee', 27);
$h2 = new Human('John', 25);
$h3 = new Human('Jack');
// $h1->name = 'Salafee'; // set name
// $h2-> name = 'John Deo';
$c1 = new Cat();
$d1 = new Dog();

// getter
$h1->sayHi();
// $h1->sayName(); // getname
echo '<br>';
$h2-> sayHi();
echo "<br>";
$h3 -> sayHi();
echo "<br>";
$c1 -> sayHi();
echo "<br>";
$d1 -> sayHi();

include './modifiers.php';