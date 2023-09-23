<?php
class Student {

    private $name;
    private $age;
    private $class;

    function __construct($name='',$age='', $class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    function getName() {
        echo $this->name . '<br>';
    }

    function setName($name) {
        $this->name = $name;
    }

    function getAge() {
        echo $this->age . '<br>';
    }

    function setAge($age) {
        $this->age = $age;
    }

    function getClass() {
        echo $this->class . '<br>';
    }

    function setClass($class) {
        $this->class = $class;
    }
}

$student1 = new Student('Salafee',28,'HSC');
$student1->getName();
$student1->getAge();
$student1->getClass();
$student1->setName('Wania');
$student1->setAge(3);
$student1->setClass('One');
$student1->getName();
$student1->getAge();
$student1->getClass();