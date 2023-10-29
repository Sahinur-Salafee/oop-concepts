<?php

/**
 * 
 * This file demonstrates the order precedence of methods in PHP classes that use traits.
 */

trait Greeting {
    public function sayHello() {
        echo "Hello from trait!";
    }
}

class AnotherClass{

    public function sayHello() {
        echo "Hello from Another class!";
    }
}

class MyClass extends AnotherClass{
    use Greeting;
}

$t1 = new MyClass();
$t1->sayHello();

 