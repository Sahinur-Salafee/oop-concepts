<?php

// Static Property and Methods

class Student {

    static $id,$name,$class;

    function __construct($id,$name,$class)
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
    }

    function getTheId() {
        return $this->id;
    }

    function getTheName() {
        return $this->name;
    }
    
    function getTheClass() {
        return $this->class;
    }
}

// $rahim = new Student('01','Rahim','Five');
echo $rahim::getTheId();