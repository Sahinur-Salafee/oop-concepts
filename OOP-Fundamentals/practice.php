<?php

// Static Property and Methods

class Student {

    static $id,$name,$class;

    function __construct($id,$name,$class)
    {
        self::$id= $id;
        self::$name = $name;
        self::$class = $class;
    }

    static function getTheId() {
        return self::$id . '<br>';
    }

    static function getTheName() {
        return self::$name . '<br>';
    }
    
    static function getTheClass() {
        return self::$class . '<br>';
    }
}

$rahim = new Student('01','Rahim','Five');
echo $rahim::getTheId();
echo Student::getTheName();
echo Student::getTheClass();