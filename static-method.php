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
    protected static $name;
    static function sayHi() {
        echo self::$name = 'Hello<br>';
        echo 'Hi from A <br>';
    }
}

class B extends A {
    static function sayHi() {
        echo self::$name = 'Hay<br>';
        echo 'Hi from B <br>';
        parent::sayHi();
    }
}

B::sayHi();

// constant in Class
define('A',10);
echo A;
echo '<br>';
const City = 'Dhaka';
echo City;
echo '<br>';

// In a class the constant variable is always in static scope
class X {
    const name = 'Salafee';

    function sayHi() {
        echo 'Hi '. self::name; // static scope
        // echo 'Hi '. $this::name; 
    }
}

$m1 = new X();
echo $m1::name;
echo '<br>';
$m1->sayHi();
echo '<br>';
echo X::name; // call like static property because it is in static scope