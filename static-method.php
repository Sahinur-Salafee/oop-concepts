<?php
class MathCalculator {

    static $name;  // static property
    private $age;
    public $job;

    static function fibonacci($n) {
        self::$name = 'John'; // call static property
        self::doSomething(); // call static method
        echo "Fibonacci series up to {$n} <br>";
    }

    static function doSomething() {
        echo "Do something<br>";
    }

    function factorial($n) {
        $this->job = 'Developer';
        $this->age = 30;
        echo "Calculate factorial for {$n} <br>";
    }
}

$n1 = new MathCalculator('Mahbub');
$n1->factorial(20);
//$n1->fibonacci(10);

// don't need to instantiate the new object
MathCalculator::fibonacci(27);
echo MathCalculator::$name . '<br>';

// Static method overriding

class A {
    static function sayHi() {
        echo 'Hi from A <br>';
    }
}

class B extends A {
    static function sayHi() {
        echo 'Hi from B <br>';
        parent::sayHi();
    }
}

b::sayHi();