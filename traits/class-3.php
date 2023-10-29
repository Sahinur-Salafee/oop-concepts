<?php
// abstract and static methods in traits

use MyClass as GlobalMyClass;

trait MyTrait {

    static $number = 2;

    static function hello() {
        echo "<br>Hello There<br>";
    }

    // abstract method

    abstract function HelloWorld();
    
}

class MyClass {
    use MyTrait;

    function HelloWorld()
    {
        echo "Hello World<br>";
    }
}

class MyClassB {
    static $number = 3;
}

echo MyClass::$number;
MyClass::hello();

$m1 = new MyClass();
$m1->HelloWorld();

echo MyClassB::$number;