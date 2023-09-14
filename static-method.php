<?php
class MathCalculator {

    static function fibonacci($n) {
        echo "Fibonacci series up to {$n} <br>";
    }

    function factorial($n) {
        echo "Calculate factorial for {$n} <br>";
    }
}

//$n1 = new MathCalculator();
//$n1->fibonacci(10);
//$n1->factorial(20);

MathCalculator::fibonacci(27);