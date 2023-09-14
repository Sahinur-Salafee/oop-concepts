<?php
class MathCalculator {

    function __construct($name)
    {
        $this->name = $name;
    }

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
        self::$name = 'deo';
        $this->age = 30;
        echo "Calculate factorial for {$n} <br>";
    }
}

$n1 = new MathCalculator('Mahbub');
$n1->factorial(20);
//$n1->fibonacci(10);

// don't need to instantiate the new object
MathCalculator::fibonacci(27);
echo MathCalculator::$name;