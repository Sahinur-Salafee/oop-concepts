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

    public function __get($prop)
    {
        return $this->$prop . '<br>';
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    // function getName() {
    //     echo $this->name . '<br>';
    // }

    // function setName($name) {
    //     $this->name = $name;
    // }

    // function getAge() {
    //     echo $this->age . '<br>';
    // }

    // function setAge($age) {
    //     $this->age = $age;
    // }

    // function getClass() {
    //     echo $this->class . '<br>';
    // }

    // function setClass($class) {
    //     $this->class = $class;
    // }


}

$student1 = new Student('Salafee',28,'HSC');
// get values
echo $student1->name;
echo $student1->age;
echo $student1->class;

// set values
$student1->name = 'Wania';
echo $student1->name;
$student1->age = 3;
echo $student1->age;
$student1->class = 'One';
echo $student1->class;

// $student1->getName();
// $student1->getAge();
// $student1->getClass();
// $student1->setName('Wania');
// $student1->setAge(3);
// $student1->setClass('One');
// $student1->getName();
// $student1->getAge();
// $student1->getClass();