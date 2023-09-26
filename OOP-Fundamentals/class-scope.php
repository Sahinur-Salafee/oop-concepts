<?php

class ParentClass {

    function __construct()
    {
        $this->sayHi();
    }

    function sayHi() {
        echo "Hi! I am Parent Class.<br>";
    }
}

class ChildClass extends ParentClass{

    function sayHi() {
        parent::sayHi();
        echo "Hello! I am Child Class.<br>";
    }
}

$cc = new ChildClass();